<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Concept;

use EntityBundle\Service\Categories;

class StatistiquesController extends Controller
{
    /** 
     * @Route("/statistique", name="statistiques_statistique")
     */
    public function statistiqueAction(Request $request)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));
       
        return $this->render('administration\statistiques.html.twig', [
            'id_membre' => $session->get('id'),
            'membre'=>$membre,
        ]);
    }
    /** 
     * @Route("/noteuser", name="statistiques_noteuser")
     */
 /*   public function noteUserAction(Request $request)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));
        
        return $this->render('administration\statistiques.html.twig', [
            'id_membre' => $session->get('id'),
            'membre'=>$membre,
        ]);
    }*/
    /** 
     * @Route("/articleStat", name="statistiques_articleStat")
     */
    public function ArticleByCategoryAction(Request $request)
    {
        $session = $request->getSession();
        
        $em = $this->get('doctrine')->getManager();
        $categories = (new Categories())->getAll($em);
        
        var_dump($categories);
        
        /*return $this->render('administration\statistiques.html.twig', [
            'id_membre' => $session->get('id'),
            'membre'=>$membre,
        ]);*/
    }
 
    /** 
     * @Route("/nbVisite", name="statistiques_nbVisite")
     */
    public function nbVisiteAction(Request $request)
    {
        $session = $request->getSession();
        if(isset($_GET['mois'])){
            $debut = date_create('2017-0'.$_GET['mois'].'-01');
            $end = date_create('2017-0'.$_GET['mois'].'-31');
            $em = $this->get('doctrine')->getManager();
            $visites = $em->getRepository('AppBundle:Visiteur')->findAll();
            $visiteur = array();
            foreach ($visites as $visite){
                $date = $visite->getDate_visite();
                if($date>=$debut && $date<=$end){
                    $datev = $visite->getDate_visite();
                    $visiteur[] = array(
                                        $datev->format('Y-m-d'),
                                        "".$visite->getNb_visite()."",
                                        );
                }
            }
            //echo json_encode($visiteur);
        }else{
            $debut = date_create('2017-01-01');
            $end = date_create('2017-01-31');
            $em = $this->get('doctrine')->getManager();
            $visites = $em->getRepository('AppBundle:Visiteur')->findAll();
            $visiteur = array();
            foreach ($visites as $visite){
                $date = $visite->getDate_visite();
                if($date>=$debut && $date<=$end){
                    $datev = $visite->getDate_visite();
                    $visiteur[] = array(
                                        $datev->format('Y-m-d'),
                                        $visite->getNb_visite(),
                                        );
                }
            }
           // var_dump($visiteur["nb_viste"]);
            //var_dump($visiteur);
            //echo json_encode($visiteur);
        }
        return new JsonResponse($visiteur);
       //return $this->redirectToRoute('statistiques_statistique', []);  
    }
 
}
