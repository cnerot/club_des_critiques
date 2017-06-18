<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use AppBundle\Entity\Salon;
use AppBundle\Entity\Note;
use AppBundle\Entity\Amis;
use AppBundle\Entity\Chatsalon;
use AppBundle\Entity\Participant;
use AppBundle\Entity\bon_mauvais_membre;

class SalonController extends Controller
{
    /**
     * @Route("/salon", name="salon")
     */
    public function indexAction(Request $request)
    {
	   $idMembre = 1; // à récupérer en $_SESSION   
	   $idSalon = $request->get('salon')->getId();
	   //$idSalon = 9; //////////
	   $participantsWithInfos = [];          
	   $participant_ = new Participant();   	   	    
        
        // vérifier non banni
        $participantMe = [];
		$participantMe = $this->getDoctrine()
		 ->getRepository('AppBundle:Participant')
		 ->findOneBy([
			"id_salon" => $idSalon,
			"id_membre" => $idMembre,
		 ]);
		 
		 if(empty($participantMe)){
			$participant_->setIdSalon($idSalon);
			$participant_->setIdMembre($idMembre);
			$participant_->setBan(0);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($participant_);
			$em->flush();
		}
	    
	    if(!empty($participantMe)){
			if($participantMe->getBan() == 1){
				$response = new Response();
				
				$response->setStatusCode(200);
				$response->headers->set('Refresh', '1; url=/?ban=1');
				
				$response->send();
			}
        }
        
        $participants = $this->getDoctrine()
		->getRepository('AppBundle:Participant')
		->findBy([
			"id_salon" => $idSalon,
		]);						
		
		foreach($participants as $participant){
			 $membres = $this->getDoctrine()
			->getRepository('AppBundle:Membre')
			->findOneBy([
				"id" => $participant->getIdMembre(),
			]);								
			
			$amis = $this->getDoctrine()
			->getRepository('AppBundle:Amis')
			->findOneBy([
				"id_membre1" => $idMembre,
				"id_membre2" => $participant->getIdMembre(),
			]);
			
			$amis_ = $this->getDoctrine()
			->getRepository('AppBundle:Amis')
			->findOneBy([
				"id_membre1" => $participant->getIdMembre(),
				"id_membre2" => $idMembre,
			]);	
			
			if(!empty($amis) || !empty($amis_)){
				$participant->ami = "true";
			}else{
				$participant->ami = "false";
			}
			
			$participant->nom = $membres->getNom();
			$participant->prenom = $membres->getPrenom();
			
			// couronne ou diamant
			
			$bon_mauvais_membre = $this->getDoctrine()
			->getRepository('AppBundle:bon_mauvais_membre')
			->findBy([
				"id_membre_recoit" => $participant->getIdMembre(),
			]);
			
			$somme = 0;
			
			foreach($bon_mauvais_membre as $bon_mauvais){
				$somme += $bon_mauvais->getNote();
			}
						
			if($somme >= 20){
				$participant->good = "couronne";
			}
			else if($somme >= 10){
				$participant->good = "diamant";
			}
			else{
				$participant->good = "";
			}
			
			if($idMembre != $participant->getIdMembre()){ // s'il ne s'agit pas de nous
				$participantsWithInfos[] = $participant;
			}
		}                  

         // récupérer messages
         
         $idSalon = $request->get('salon')->getId();
         
         $em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
			"SELECT c
			FROM AppBundle:Chatsalon c
			WHERE c.id_salon = :id_salon
			ORDER BY c.date"
		)->setParameter('id_salon', $idSalon);
		
		$messages = $query->getResult();
		
		foreach($messages as $message){
			 $membre = $this->getDoctrine()
			->getRepository('AppBundle:Membre')
			->findOneBy([
				"id" => $message->getIdMembre(),
			]);
			
			$message->prenom_et_nom = $membre->getPrenom()." ".$membre->getNom();						
		}			
         //echo "<pre>";
         //print_r($messages);
         //echo "</pre>";
        //$encoders = array(new XmlEncoder(), new JsonEncoder());
		//$normalizers = array(new ObjectNormalizer());
		//$serializer = new Serializer($normalizers, $encoders);
		
		//$jsonContent = $serializer->serialize($messages, 'json');
             
             //print_r($jsonContent);
             
         return $this->render('salon\index.html.twig',[
            'salon' => $request->get('salon'),
            'participants' => $participantsWithInfos,
            'messages' => $messages,
            'idMembre' => $idMembre,
        ]);
    }
    
    /**
     * @Route("/salon/recupererDerniersMessages", name="salon_recupererDerniersMessages")
     */
    public function recupererDerniersMessagesAction(Request $request)
    {
	   $idMembre = 1; // à récupérer en $_SESSION
	   //$idSalon = 9;	   
	   $idSalon = $request->get('idSalon');
	   $lastIdMsg = $request->get('lastIdMsg');
	   //$lastIdMsg = 12;
		
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
			"SELECT c
			FROM AppBundle:Chatsalon c
			WHERE c.id_salon = :id_salon AND c.id > :id
			ORDER BY c.date"
		)->setParameter('id_salon', $idSalon)
		->setParameter('id', $lastIdMsg);
		
		$messages = $query->getResult();
		
		$i = 0;
		$content = [];
		foreach($messages as $message){
			 $membre = $this->getDoctrine()
			->getRepository('AppBundle:Membre')
			->findOneBy([
				"id" => $message->getIdMembre(),
			]);
			
			//$message->prenom_et_nom = $membre->getPrenom()." ".$membre->getNom();						
			
			$content[$i]['id'] = $message->getId();
			$content[$i]['id_salon'] = $idSalon;
			if($message->getIdMembre() == $idMembre)
				$content[$i]['me'] = "true";
			else
				$content[$i]['me'] = "false";
			$content[$i]['id_membre'] = $message->getIdMembre();
			$content[$i]['msg'] = $message->getMsg();
			$content[$i]['date'] = $message->getDate()->format('d/m/Y H:i:s');
			$content[$i]['prenom_et_nom'] = $membre->getPrenom()." ".$membre->getNom();
			$i++;
		}                
        
        //echo "<pre>";
			//print_r($messages);
        //echo "</pre>";
        
        //echo "<pre>";
			//print_r($content);
        //echo "</pre>";
        
        if(!empty($content)){
			$encoders = array(new XmlEncoder(), new JsonEncoder());
			$normalizers = array(new ObjectNormalizer());
			$serializer = new Serializer($normalizers, $encoders);
			
			$jsonContent = $serializer->serialize($content, 'json');
			
			return new JsonResponse([$jsonContent]);
		}else{
			return new Response("no changement");
		}
    }
    
    /**
     * @Route("/salon/envoyerMessage", name="salon_envoyerMessage")
     */
    public function envoyerMessageAction(Request $request)
    {
	   $idMembre = 1; // à récupérer en $_SESSION
	   $idSalon = $request->get('idSalon');
       $chatSalon = new Chatsalon();
       
       // vérifier non banni
       $participantMe = $this->getDoctrine()
		->getRepository('AppBundle:Participant')
		->findOneBy([
			"id_salon" => $idSalon,
			"id_membre" => $idMembre,
		]);
       
       if($participantMe->getBan() == 1){
			return new Response("banni");
	   }
       
        $membre = $this->getDoctrine()
		->getRepository('AppBundle:Membre')
		->findOneBy([
			"id" => $idMembre,
		]);
        
        $name = $membre->getPrenom()." ".$membre->getNom();
        
        $message = $request->get('message');
        //$message = "mon message";
        
        $chatSalon->setIdSalon($idSalon);
		$chatSalon->setIdMembre($idMembre);
		$chatSalon->setMsg($message);
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($chatSalon);
		$em->flush();
        
         return new Response("ok");
    }
    
    /**
     * @Route("/salon/wantBanFromSalon", name="salon_wantBanFromSalon")
     */
    public function wantBanFromSalonAction(Request $request)
    {
	   $nbBanMax = 2;
	   $idMembre = 1; // à récupérer en $_SESSION
	   $idSalon = $request->get('idSalon');
	   $idMembreParticipant = $request->get('idMembreParticipant');
	   //$idMembreParticipant = 2;
       
        $participants = $this->getDoctrine()
		->getRepository('AppBundle:Participant')
		->findOneBy([
			"id_salon" => $idSalon,
			"id_membre" => $idMembreParticipant,
		]);
		
        $idMembresWhoBan = explode(",", trim($participants->getIdMembresWhoBan(), ","));
        
        if(!in_array($idMembre, $idMembresWhoBan)){ // si l'idMembre ne l'a pas encore banni
			$participants->setIdSalon($idSalon);
			$participants->setIdMembre($idMembreParticipant);
			if(count($idMembresWhoBan) >= $nbBanMax){
				$participants->setBan(1); // bannissement				
			}
			$participants->setIdMembresWhoBan($participants->getIdMembresWhoBan().$idMembre.",");
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($participants);
			$em->flush();
			
			return new Response("ok");
		}
		else{ // si déjà banni
			return new Response("Vous avez déjà fait une demande de bannissement pour ce contact.");
		}            
        
        return new Response("ok");
    }
    
    /**
     * @Route("/salon/goodMembre", name="salon_goodMembre")
     */
    public function goodMembreAction(Request $request)
    {
	   $bon_mauvais_membres = new bon_mauvais_membre();
	   $idMembre = 1; // à récupérer en $_SESSION
	   //$idMembreRecoit = $request->get('idSalon');
	   $idMembreRecoit = $request->get('idMembreParticipant');
	   $idSalon = $request->get('idSalon');
       
        $bon_mauvais_membre = $this->getDoctrine()
		->getRepository('AppBundle:bon_mauvais_membre')
		->findOneBy([
			"id_membre_recoit" => $idMembreRecoit,
			"id_membre_donne" => $idMembre,
		]);
		
        if(!empty($bon_mauvais_membre)){
			// update
			$bon_mauvais_membre->setIdMembreRecoit($idMembreRecoit);
			$bon_mauvais_membre->setIdMembreDonne($idMembre);
			$bon_mauvais_membre->setNote($request->get('note'));
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($bon_mauvais_membre);
			$em->flush();
		}else{
			// insert
			$bon_mauvais_membres->setIdMembreRecoit($idMembreRecoit);
			$bon_mauvais_membres->setIdMembreDonne($idMembre);
			$bon_mauvais_membres->setNote($request->get('note'));
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($bon_mauvais_membres);
			$em->flush();
		}
        
        return new Response("ok");
    }
    
    /**
     * @Route("/salon/addToContacts", name="salon_addToContacts")
     */
    public function addToContactsAction(Request $request)
    {
		$idMembre = 1; // à récupérer en $_SESSION
		$idContact = $request->get('idContact');
		
		$amis__ = new Amis();
		
		$amis = $this->getDoctrine()
		->getRepository('AppBundle:Amis')
		->findOneBy([
			"id_membre1" => $idMembre,
			"id_membre2" => $idContact,
		]);
		
		$amis_ = $this->getDoctrine()
		->getRepository('AppBundle:Amis')
		->findOneBy([
			"id_membre1" => $idContact,
			"id_membre2" => $idMembre,
		]);
		
		if(empty($amis) && empty($amis_) && $idContact != $idMembre){
			$amis__->setIdMembre1($idMembre);
			$amis__->setIdMembre2($idContact);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($amis__);
			$em->flush();
		}
		
		return new Response("ok");
	}
	
	/**
     * @Route("/salon/chargeContacts", name="salon_chargeContacts")
     */
    public function chargeContactsAction(Request $request)
    {
		$idMembre = 1; // à récupérer en $_SESSION
		$idSalon = $request->get('idSalon');
		
		$amis__ = new Amis();
		
		$amis = $this->getDoctrine()
		->getRepository('AppBundle:Amis')
		->findBy([
			"id_membre1" => $idMembre,
		]);
		
		$amis_ = $this->getDoctrine()
		->getRepository('AppBundle:Amis')
		->findBy([
			"id_membre2" => $idMembre,
		]);
		
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
			"SELECT p
			FROM AppBundle:Participant p
			WHERE p.id_salon <> :id_salon"
		)->setParameter('id_salon', $idSalon);
		
		$participants = $query->getResult();
		
		foreach($participants as $participant){
			$idMembresNonParticipants[] = $participant->getIdMembre();
		}				
		
		foreach($amis as $ami){
			if(in_array($ami->getIdMembre2(), $idMembresNonParticipants)){ // si l'ami n'est pas déjà dans le salon
				$idContactsPossibleToInvite[] = $ami->getIdMembre2();
			}
		}
		
		foreach($amis_ as $ami){
			if(in_array($ami->getIdMembre1(), $idMembresNonParticipants)){ // si l'ami n'est pas déjà dans le salon
				$idContactsPossibleToInvite[] = $ami->getIdMembre1();
			}
		}
		
		foreach($idContactsPossibleToInvite as $idContactP){
			$membres = $this->getDoctrine()
			->getRepository('AppBundle:Membre')
			->findOneBy([
				"id" => $idContactP,
			]);
			
			$contactsPossibleToInvite[] = $membres;
		}
		
		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
		$serializer = new Serializer($normalizers, $encoders);
		
		$jsonContent = $serializer->serialize($contactsPossibleToInvite, 'json');
		
		return new JsonResponse([$jsonContent]);	
	}
	
	/**
     * @Route("/salon/invitContacts", name="salon_invitContacts")
     */
    public function invitContactsAction(Request $request)
    {
		$idMembre = 1; // à récupérer en $_SESSION
		//$idSalon = $request->get('idSalon');
		$idSalon = 9;
		
			
		
		return new Response("ok");
	}
	
	/**
     * @Route("/salon/historique", name="salon_historique")
     */
    public function historiqueAction(Request $request)
    {
		$idMembre = 1; // à récupérer en $_SESSION
		$idSalon = $request->get('idSalon');
		
		$salon = $this->getDoctrine()
		->getRepository('AppBundle:Salon')
		->findOneBy([
			"id" => $idSalon,
		]);				
		
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
			"SELECT s
			FROM AppBundle:Chatsalon s
			WHERE s.id_salon = :id_salon
			ORDER by s.date ASC"
		)->setParameter('id_salon', $idSalon);
		$ChatsSalon = $query->getResult();				
				
		$participantsWithInfos = [];
		foreach($ChatsSalon as $ChatSalon){	
			$participant = $this->getDoctrine()
				->getRepository('AppBundle:Participant')
				->findOneBy([
					"id_salon" => $idSalon,
					"id_membre" => $ChatSalon->getIdMembre(),
				]);
			
				$membres = $this->getDoctrine()
					->getRepository('AppBundle:Membre')
					->findOneBy([
						"id" => $participant->getIdMembre(),
					]);
				
				$ChatSalon->nom = $membres->getNom();
				$ChatSalon->prenom = $membres->getPrenom();
				
				$participantsWithInfos[] = $ChatSalon;				
		}
		
		return $this->render('salon\historiqueSalon.html.twig',[
            'salon' => $salon,
            'chats' => $participantsWithInfos,
        ]);
	}
}
