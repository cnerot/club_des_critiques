<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Visitecategorie;
use AppBundle\Entity\Concept;
use EntityBundle\Service\Categories;
use EntityBundle\Entity\categorie;
use Symfony\Component\Validator\Constraints\Date;


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
     * @Route("/visiteCategorie", name="statistiques_visiteCategorie")
     */
    public function visiteCategorieAction(Request $request)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $visiteCategories = $em->getRepository('AppBundle:Visitecategorie')->findAll();
        $visites = array();
        foreach($visiteCategories as $visiteCategorie){
            $Categories = (new Categories())->getById($em, $visiteCategorie->getId_categorie());
            $visites[] = array(
                               $Categories->name,
                                $visiteCategorie->getNb_visite(),
                                );
        }
        
        return new JsonResponse($visites);


    }
    /** 
     * @Route("/articleStat", name="statistiques_articleStat")
     */
    public function ArticleByCategoryAction(Request $request)
    {
        $session = $request->getSession();
        
        $em = $this->get('doctrine')->getManager();
        $categories = (new Categories())->getAll($em);
        $array = array();
        foreach ((new Categories())->getAll($em) as $categorie)
        {
                $array[] = [
                         $categorie->name,
                         count($categorie->getProducts($em)),
                ];
        }
        
        
        
      
        return new JsonResponse($array);

    }
    /** 
     * @Route("/echangeStat", name="statistiques_echangeStat")
     */
    public function echangeStatAction(Request $request)
    {
        $session = $request->getSession();
        
        $em = $this->get('doctrine')->getManager();
        $status_own = count($em->getRepository('EntityBundle:Borrow')->findBy(["status"=>7]));
        $status_share = count($em->getRepository('EntityBundle:Borrow')->findBy(["status"=>1]));
        $status_interest = count($em->getRepository('EntityBundle:Borrow')->findBy(["status"=>2]));
        $status_valid = count($em->getRepository('EntityBundle:Borrow')->findBy(["status"=>3]));


        $array[] = array("Proprietaire de livre", $status_own + $status_share + $status_interest + $status_valid);
        $array[] = array("Livre à preter",$status_share + $status_interest + $status_valid);
        $array[] = array("livre prêté",$status_interest + $status_valid);

        //return $array;
        
      
        return new JsonResponse($array);

    }
 
    /** 
     * @Route("/nbVisite", name="statistiques_nbVisite")
     */
    public function nbVisiteAction(Request $request)
    {
        $session = $request->getSession();

            $em = $this->get('doctrine')->getManager();
            $visites = $em->getRepository('AppBundle:Visiteur')->findAll();
            $visiteur = array();
            foreach ($visites as $visite){
                    $datev = $visite->getDate_visite();
                        if(isset($visiteur[$datev->format('Y-m-d')])){
                            $visiteur[$datev->format('Y-m-d')] = $visiteur[$datev->format('Y-m-d')]+$visite->getNb_visite();
                        }else{
                            $visiteur[$datev->format('Y-m-d')] = $visite->getNb_visite()+1;
                        }
                    }
            $nbVisite=array();
            foreach($visiteur as $key => $value){
            $nbVisite[]= array(
                               $key,"$value"
                            );
                
            }
                   // var_dump($visiteur);
            //echo json_encode($visiteur);
       
        return new JsonResponse($nbVisite);
       //return $this->redirectToRoute('statistiques_statistique', []);  
    }
 
}
