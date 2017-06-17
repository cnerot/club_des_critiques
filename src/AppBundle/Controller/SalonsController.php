<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Salon;
use AppBundle\Entity\Note;

class SalonsController extends Controller
{
    /**
     * @Route("/salons", name="salons")
     */
    public function indexAction(Request $request)
    {
        $salon = new Salon();
        //$em = $this->getDoctrine()->getManager();
        
        //$em = $this->getDoctrine()->getManager();
		//$query = $em->createQuery(
			//"SELECT s
			//FROM AppBundle:Salon s
			//GROUP BY s.id_article"
		//);
		
		//$salonsReceived = $query->getResult();
        
        //echo "<pre>";
			//print_r($salonsReceived);
        //echo "</pre>";
        
        $salonsReceived = $this->getDoctrine()
        ->getRepository('AppBundle:Salon')
        ->findAll();
        
        $a = 0;
        $salons = [];
        $tabIdDoublons = [];
        foreach($salonsReceived as $salonReceived){
			$i = 0;
			$found = false;
			foreach($salonsReceived as $salonReceived2){
				if($found == false && $salonReceived->getId() != $salonReceived2->getId()){
					if(
					$salonReceived->getDateDebut() == $salonReceived2->getDateDebut() && 
					$salonReceived->getDateFin() == $salonReceived2->getDateFin() &&
					$salonReceived->getIdArticle() == $salonReceived2->getIdArticle()					
					){
						$found = true;
						if(!in_array($salonReceived->getId(), $tabIdDoublons) && !in_array($salonReceived2->getId(), $tabIdDoublons)){
							$salons[] = $salonReceived;
							$tabIdDoublons[] = $salonReceived->getId();
							$tabIdDoublons[] = $salonReceived2->getId();
						}
						$idSalonsDoublons[$a][0] = $salonReceived->getId();
						$idSalonsDoublons[$a][0] = $salonReceived2->getId();
					}else{
						
					}
				}
				$i++;
			}
			if($found == false){
				$salons[] = $salonReceived;
			}
		}
       //echo "<pre>";
       //print_r($salons);
       //echo "</pre>";
        
        // replace this example code with whatever you need
        //return $this->render('salons\index.html.twig', [
            //'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        //]);
        
         return $this->render('salons\index.html.twig',[
            'salons' => $salons,
        ]);

    }
    
     /**
     * @Route("/salons/popupRejoindre", name="salons_popupRejoindre")
     */
    public function popupRejoindreAction(Request $request)
    {
		$salons = new Salon();
		$notes = new Note();
		$idSalon = $request->get('idSalon');
		
		$salon = $this->getDoctrine()
		->getRepository('AppBundle:Salon')
		->findOneBy([
			"id" => $idSalon,
		]);
		
		$nomSalon = $salon->getTitreSalon();
		
		//echo $nomSalon;
		return new Response($nomSalon);
		//return new JsonResponse(['data', json_encode($nomSalon)]);	
	}
    
     /**
     * @Route("/salons/recupIdSalonPossible", name="salons_recupIdSalonPossible")
     */
    public function recupIdSalonPossibleAction(Request $request)
    {
		$nbMaxParticipants = 2;
		$salons = new Salon();
		$notes = new Note();
		$idSalon = $request->get('idSalon');
		$noteChosen = $request->get('noteChosen');
		
		$salon = $this->getDoctrine()
		->getRepository('AppBundle:Salon')
		->findOneBy([
			"id" => $idSalon,
		]);
		
		$participants = $this->getDoctrine()
		->getRepository('AppBundle:Participant')
		->findBy([
			"id_salon" => $idSalon,
		]);				
		
		$idArticle = $salon->getIdArticle();
		
		//echo $idArticle;
		
		if(count($participants) >= $nbMaxParticipants){
			//echo "supérieur à 20";
			
			$sameSalons = $this->getDoctrine()
			->getRepository('AppBundle:Salon')
			->findBy([
				"id_article" => $idArticle,
				"date_debut" => $salon->getDateDebut(),
				"date_fin" => $salon->getDateFin(),
			]);
			
			//echo "<pre>";
				//print_r($sameSalons);
			//echo "</pre>";
			
			$foundSalon = false;
			
			foreach($sameSalons as $sameSalon){
				$participantsSameSalons = $this->getDoctrine()
				->getRepository('AppBundle:Participant')
				->findBy([
					"id_salon" => $sameSalon->getId(),
				]);
				
				if(count($participantsSameSalons) < $nbMaxParticipants){
					// prendre ce salon
					$idSalon = $sameSalon->getId();
					$foundSalon = true;
				}
			}
			
			if($foundSalon == false){
				// créer salon en copiant celui à l'id 9
				$salons->setTitreSalon($salon->getTitreSalon());
				$salons->setDescription($salon->getDescription());
				$salons->setDateDebut($salon->getDateDebut());
				$salons->setDateFin($salon->getDateFin());
				$salons->setValide(1);
				$salons->setIdArticle($salon->getIdArticle());
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($salons);
				$em->flush();
						
				$idSalon = $salons->getId();
			}
		}
		
		$salon = $this->getDoctrine()
		->getRepository('AppBundle:Salon')
		->findOneBy([
			"id" => $idSalon,
		]);
				
		//echo $nomSalon;
		return new Response($salon->getId());
		//return new JsonResponse(['data', json_encode($nomSalon)]);	
	}        
    
    /**
     * @Route("/salons/vote", name="salons_vote")
     */
    public function voteAction(Request $request)
    {
		$nbMaxParticipants = 1;
		$salons = new Salon();
		$notes = new Note();
		$idMembre = 1; // à récupérer en $_SESSION
		//$idSalon = 9; // à récupérer en $request->get
		//$noteChosen = 4; // à récupérer en $request->get
		$idSalon = $_GET['idSalon']; // à récupérer en $request->get
		$noteChosen = $_GET['noteChosen']; // à récupérer en $request->get
		/*$salon = $this->getDoctrine()
		->getRepository('AppBundle:Salon')
		->findOneBy([
			"id" => $idSalon,
		]);
		
		$participants = $this->getDoctrine()
		->getRepository('AppBundle:Participant')
		->findBy([
			"id_salon" => $idSalon,
		]);				
		
		$idArticle = $salon->getIdArticle();
		
		//echo $idArticle;
		
		if(count($participants) >= $nbMaxParticipants){
			//echo "supérieur à 20";
			
			$sameSalons = $this->getDoctrine()
			->getRepository('AppBundle:Salon')
			->findBy([
				"id_article" => $idArticle,
				"date_debut" => $salon->getDateDebut(),
				"date_fin" => $salon->getDateFin(),
			]);
			
			//echo "<pre>";
				//print_r($sameSalons);
			//echo "</pre>";
			
			$foundSalon = false;
			
			foreach($sameSalons as $sameSalon){
				$participantsSameSalons = $this->getDoctrine()
				->getRepository('AppBundle:Participant')
				->findBy([
					"id_salon" => $sameSalon->getId(),
				]);
				
				if(count($participantsSameSalons) < $nbMaxParticipants){
					// prendre ce salon
					$idSalon = $sameSalon->getId();
					$foundSalon = true;
				}
			}
			
			if($foundSalon == false){
				// créer salon en copiant celui à l'id 9
				$salons->setTitreSalon($salon->getTitreSalon());
				$salons->setDescription($salon->getDescription());
				$salons->setDateDebut($salon->getDateDebut());
				$salons->setDateFin($salon->getDateFin());
				$salons->setValide(1);
				$salons->setIdArticle($salon->getIdArticle());
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($salons);
				$em->flush();
						
				$idSalon = $salons->getId();
			}
		}*/
				
		$salon = $this->getDoctrine()
		->getRepository('AppBundle:Salon')
		->findOneBy([
			"id" => $idSalon,
		]);
					
		$note = $this->getDoctrine()
		->getRepository('AppBundle:Note')
		->findOneBy([
			"id_article" => $salon->getIdArticle(),
			"id_membre" => $idMembre,
		]);	
		
		if(!empty($note)){
			// update
			$note->setNote($noteChosen);
			$note->setIdArticle($salon->getIdArticle());
			$note->setIdMembre($idMembre);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($note);
			$em->flush();
		}else{
			// insert
			$notes->setNote($noteChosen);
			$notes->setIdArticle($salon->getIdArticle());
			$notes->setIdMembre($idMembre);
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($notes);
			$em->flush();		
		}
		
		//return new Response("ok");
		
		 //return $this->render('salon\index.html.twig',[
            //'salon' => $salon,
        //]);
        
        return $this->forward('AppBundle:Salon:index',[
            'salon' => $salon,
        ]);
	}
}
