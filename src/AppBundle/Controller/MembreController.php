<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Membre;
use AppBundle\Form\MembreForm;
use AppBundle\Form\ConnexionForm;
class MembreController extends Controller
{
    /** 
     * @Route("/", name="membre_index")
     */
    public function indexAction()
    {
       
    }
    /** 
     * @Route("/profil", name="membre_profil")
     */
    public function showAction(Request $request)
    {
        return $this->render('membre\profil.html.twig');
    }
    /**
     * @Route("/edit", name="membre_edit")
     */
    
    public function editAction(Request $request)
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
     /**
     * @Route("/login", name="membre_login")
     */
    public function loginAction(Request $request)
    {
        $membre = new Membre();
        $form = $this->createForm(ConnexionForm::class, $membre);
        $form->handleRequest($request);
        if($form->isValid()){
           
           return $this->redirectToRoute('membre_profil', ['id'=>$membre->getId()]);      
        }
        return $this->render('membre/login.html.twig',[
            'membre' => $membre,
            'form' => $form->createView(),
        ]);
    }
    
}
