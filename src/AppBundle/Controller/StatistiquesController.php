<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Concept;

use EntityBundle\Entity\categorie;

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
        if (isset($_COOKIE['visite'])) {
            setCookie('visite', $_COOKIE['visite'] + 1);
        } else {
            setCookie('visite', 1);
        }
        return $this->render('administration\statistiques.html.twig', [
            'id_membre' => $session->get('id'),
            'membre'=>$membre,
            'nb'   => $_COOKIE['visite']+1,
        ]);
    }
    /** 
     * @Route("/noteuser", name="statistiques_noteuser")
     */
    public function noteUserAction(Request $request)
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
     * @Route("/articleStat", name="statistiques_articleStat")
     */
    public function ArticleByCategoryAction(Request $request)
    {
        $session = $request->getSession();
        
        $em = $this->get('doctrine')->getManager();
        $categories = (new EntityBundle\Entity\categories())->getAll($em);
        
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
        if(isset($_POST['mois'])){
            $debut = date_create('2017-0'.$_POST['mois'].'-01');
            $end = date_create('2017-0'.$_POST['mois'].'-31');
            $em = $this->get('doctrine')->getManager();
            $visites = $em->getRepository('AppBundle:Visiteur')->findAll();
            $visiteur = array();
            foreach ($visites as $visite){
                $date = $visite->getDate_visite();
                if($date>=$debut && $date<=$end){
                $visiteur[] = array(
                                    'nb_viste'=>$visite->getNb_visite(),
                                    'date_visite'=>$visite->getDate_visite()
                                    );
                }
            }
            echo json_encode($visiteur);
        }else{
            $debut = date_create('2017-01-01');
            $end = date_create('2017-01-31');
            $em = $this->get('doctrine')->getManager();
            $visites = $em->getRepository('AppBundle:Visiteur')->findAll();
            $visiteur = array();
            foreach ($visites as $visite){
                $date = $visite->getDate_visite();
                if($date>=$debut && $date<=$end){
                $visiteur[] = array(
                                    'nb_viste'=>$visite->getNb_visite(),
                                    'date_visite'=>$visite->getDate_visite()
                                    );
                }
            }	
            echo json_encode($visiteur);
        }
        
        return $this->redirectToRoute('statistiques_statistique', []);  
    }
 
}
