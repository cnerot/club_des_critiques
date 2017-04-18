<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Membre;
use AppBundle\Form\MembreForm;

class MembreController extends Controller
{
    /** 
     * @Route("/", name="membre_index")
     */
    public function indexAction()
    {

        return $this->render('membre\index.html.twig',[
               'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /** 
     * @Route("/show/{id}", name="membre_show")
     */
    public function showAction(Membre $membre)
    {
      
    }
    /**
     * @Route("/create", name="membre_create")
     */
    
    public function createAction(Request $request)
    {
        $membre = new Membre();
        $form = $this->createForm(MembreForm::class, $membre);
        
        $form->handleRequest($request);
        if($form->isValid()){
           $em = $this->getDoctrine()->getManager();
           $em->persist($membre);
           $em->flush();
           
           $this->addFlash('success', "Votre compte à été créé!");
           
           return $this->redirectToRoute('membre_show', ['id'=>$membre->getId()]);      
        }
        return $this->render('membre\create.html.twig',[
            'membre' => $membre,
            'form' => $form->createView(),
        ]);
    }
    
}
