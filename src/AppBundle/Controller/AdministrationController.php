<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Concept;
class AdministrationController extends Controller
{
    /** 
     * @Route("/concept", name="administration_concept")
     */
    public function conceptAction(Request $request)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));
        $concept = $em->getRepository('AppBundle:Concept')->find(1);
        if(isset($_POST['concept'])){
            if($concept->getId() == null ){
                $concept = new Concept();
                $concept->setId(1);
            }
            $concept->setConcept($_POST['concept']);
            $em = $this->getDoctrine()->getManager();
            $em->persist($concept);
            $em->flush();
            $this->addFlash('success', "Concept modifié");
        }
        return $this->render('administration\administration.html.twig', [
            'id_membre' => $session->get('id'),
            'membre'=>$membre,
            'concept'=>$concept->getConcept(),
        ]);
    }

}
