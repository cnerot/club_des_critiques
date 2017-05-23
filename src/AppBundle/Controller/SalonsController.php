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
        
        $salonsReceived = $this->getDoctrine()
        ->getRepository('AppBundle:Salon')
        ->findAll();
       
       //echo "<pre>";
       //print_r($salonsReceived);
       //echo "</pre>";
        
        // replace this example code with whatever you need
        //return $this->render('salons\index.html.twig', [
            //'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        //]);
        
         return $this->render('salons\index.html.twig',[
            'salons' => $salonsReceived,
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
     * @Route("/salons/vote", name="salons_vote")
     */
    public function voteAction(Request $request)
    {
		$salons = new Salon();
		$notes = new Note();
		$idMembre = 1; // à récupérer en $_SESSION
		//$idSalon = $request->get('idSalon'); // à récupérer en $request->get
		//$noteChosen = $request->get('noteChosen'); // à récupérer en $request->get
		$idSalon = $_GET['idSalon']; // à récupérer en $request->get
		$noteChosen = $_GET['noteChosen']; // à récupérer en $request->get
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
