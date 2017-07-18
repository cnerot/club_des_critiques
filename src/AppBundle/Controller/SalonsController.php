<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Salon;
use AppBundle\Entity\Note;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Article;

class SalonsController extends Controller
{
    /**
     * @Route("/salons", name="salons")
     */
    public function indexAction(Request $request)
    {
        $salon = new Salon();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $membre =  $em->getRepository('AppBundle:Membre')->findOneById($session->get('id'));

        if(empty($membre)){
			$membre = new Membre();
		}
        
        $salonsReceived = $this->getDoctrine()
        ->getRepository('AppBundle:Salon')
        ->findAll();
        
        $a = 0;
        $salons = [];
        $tabIdDoublons = [];
        foreach($salonsReceived as $salonReceived){
			$i = 0;
			$found = false;
			$foundAncien = false;
			foreach($salonsReceived as $salonReceived2){
				if($found == false && $salonReceived->getId() != $salonReceived2->getId()){
					if(
					$salonReceived->getDateDebut() == $salonReceived2->getDateDebut() && 
					$salonReceived->getDateFin() == $salonReceived2->getDateFin() &&
					$salonReceived->getIdArticle() == $salonReceived2->getIdArticle()					
					){
						$found = true;
						
						if(strtotime(date('Y-m-d')) > strtotime($salonReceived->getDateFin()->format('Y-m-d'))){
							$found = false;							
						}						
						if(!in_array($salonReceived->getId(), $tabIdDoublons) && !in_array($salonReceived2->getId(), $tabIdDoublons)){
							$salons[] = $salonReceived;
							$foundAncien = true;
							$tabIdDoublons[] = $salonReceived->getId();
							$tabIdDoublons[] = $salonReceived2->getId();
						}
					}
				}
				$i++;
			}
			if($found == false && $foundAncien == false){
				$salons[] = $salonReceived;
			}
		}

		$pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();
         return $this->render('salons\index.html.twig',[
			 "pages" => $pages_static,

			 'salons' => $salons,
            'id_membre'=> $session->get('id'),
            'membre'=> $membre,
        ]);

    }
    
    /**
     * @Route("/salons/ajouter", name="salons_ajouter")
     */
    public function ajouterSalonAction(Request $request)
    {
        $salon = new Salon();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $membre =  $em->getRepository('AppBundle:Membre')->findOneById($session->get('id'));

        if(empty($membre)){
			$membre = new Membre();
		}
		
		$articles = [];
		
        $articles = $this->getDoctrine()
        ->getRepository('AppBundle:Article')
        ->findAll();
        
        $salonsReceived = $this->getDoctrine()
        ->getRepository('AppBundle:Salon')
        ->findAll();
        
        //$a = 0;
        //$salons = [];
        //$tabIdDoublons = [];
        //foreach($salonsReceived as $salonReceived){
			//$i = 0;
			//$found = false;
			//$foundAncien = false;
			//foreach($salonsReceived as $salonReceived2){
				//if($found == false && $salonReceived->getId() != $salonReceived2->getId()){
					//if(
					//$salonReceived->getDateDebut() == $salonReceived2->getDateDebut() && 
					//$salonReceived->getDateFin() == $salonReceived2->getDateFin() &&
					//$salonReceived->getIdArticle() == $salonReceived2->getIdArticle()					
					//){
						//$found = true;
						
						//if(strtotime(date('Y-m-d')) > strtotime($salonReceived->getDateFin()->format('Y-m-d'))){
							//$found = false;							
						//}						
						//if(!in_array($salonReceived->getId(), $tabIdDoublons) && !in_array($salonReceived2->getId(), $tabIdDoublons)){
							//$salons[] = $salonReceived;
							//$foundAncien = true;
							//$tabIdDoublons[] = $salonReceived->getId();
							//$tabIdDoublons[] = $salonReceived2->getId();
						//}
					//}
				//}
				//$i++;
			//}
			//if($found == false && $foundAncien == false){
				//$salons[] = $salonReceived;
			//}
		//}
		$pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();

		return $this->render('salons\ajouterSalon.html.twig',[
            'id_membre'=> $session->get('id'),
            'membre'=> $membre,
            'articles'=> $articles,
			 "pages" => $pages_static,

		 ]);

    }
    
    /**
     * @Route("/salons/ajouterVerif", name="salons_ajouterVerif")
     */
    public function ajouterVerifSalonAction(Request $request)
    {
        $salon_ = new Salon();
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $membre =  $em->getRepository('AppBundle:Membre')->findOneById($session->get('id'));
		$titre = $request->get('titre');
		$description = $request->get('description');
		$dateDebut = $request->get('dateDebut');
		$dateFin = $request->get('dateFin');
		$article = $request->get('article');
		
        if(empty($membre)){
			$membre = new Membre();
		}     
        
        $error = false;
        
        $explodeDateDebut = explode("/", $dateDebut);   
        $dateDebutFR = $explodeDateDebut[2]."-".$explodeDateDebut[1]."-".$explodeDateDebut[0];
        
        $explodeDateFin = explode("/", $dateFin);
        $dateFinFR = $explodeDateFin[2]."-".$explodeDateFin[1]."-".$explodeDateFin[0];
        
        if(strtotime($dateDebutFR) > strtotime($dateFinFR)){
			$error = true;
		}        
        
        if($error == true)
			return new Response("Erreur dans le formulaire");
		else{			
			$salon_->setTitreSalon($titre);
			$salon_->setDescription($description);
			$salon_->setDateDebut(new \DateTime($dateDebutFR));
			$salon_->setDateFin(new \DateTime($dateFinFR));
			$salon_->setValide(1);
			$salon_->setIdArticle($article);	
				
			$em = $this->getDoctrine()->getManager();
			$em->persist($salon_);
			$em->flush();
			
			return new Response("Salon créé");			
		}
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
		$nbMaxParticipants = 20;
		$salons = new Salon();
		$notes = new Note();
		//$idSalon = $request->get('idSalon');
		//$noteChosen = $request->get('noteChosen');

		$idSalon = 2;
		$noteChosen = 3;
		$nbMaxSalon = $this->getDoctrine()
		->getRepository('AppBundle:Parametres')
		->findOneBy([
			"id" => 1,
		]);
		
		$nbMaxParticipants = $nbMaxSalon->getNbMaxSalon();
		
		$salon = $this->getDoctrine()
		->getRepository('AppBundle:Salon')
		->findOneBy([
			"id" => $idSalon,
		]);
		
		$participants = $this->getDoctrine()
		->getRepository('AppBundle:Participant')
		->findBy([
			"id_salon" => $idSalon,
			"actif" => 1,
		]);				
		$idArticle = $salon->getIdArticle();
		
		//echo $idArticle;
		
		if(count($participants) >= $nbMaxParticipants){
			//echo "supérieur à 20";
			
			$sameSalons = $this->getDoctrine()
			->getRepository('AppBundle:Salon')
			->findBy([
				"id_article" => $idArticle,
				"titre_salon" => $salon->getTitreSalon(),
				"description" => $salon->getDescription(),
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
					"actif" => 1,
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
		$nbMaxParticipants = 20;
		$salons = new Salon();
		$notes = new Note();
		$idMembre = 1; // à récupérer en $_SESSION
		//$idSalon = 9; // à récupérer en $request->get
		//$noteChosen = 4; // à récupérer en $request->get
		$idSalon = $_GET['idSalon']; // à récupérer en $request->get
		$noteChosen = $_GET['noteChosen']; // à récupérer en $request->get
		
		$nbMaxSalon = $this->getDoctrine()
		->getRepository('AppBundle:Parametres')
		->findOneBy([
			"id" => 1,
		]);
		
		$nbMaxParticipants = $nbMaxSalon->getNbMaxSalon();
		
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
		$pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();

		return $this->forward('AppBundle:Salon:index',[
            'salon' => $salon,
			"pages" => $pages_static,

		]);
	}
}
