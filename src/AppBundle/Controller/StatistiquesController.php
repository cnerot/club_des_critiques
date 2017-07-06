<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Concept;
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
 
}
