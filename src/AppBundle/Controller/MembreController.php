<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Amis;
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
     * @Route("/all", name="membre_all")
     */
    public function peopleAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $membres = $em->getRepository('AppBundle:Membre')->findAll();
        return $this->render('membre\membres.html.twig', [
            'membres'=>$membres
        ]);
    }
    /** 
     * @Route("/profil/{id}", name="membre_profil")
     */
    public function showAction($id)
    {   
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('AppBundle:Membre')->findOneById($id);
        return $this->render('membre\profil.html.twig', [
            'membre'=>$membre
        ]);
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
     * @Route("/invite/{id}", name="membre_invite")
     */
    
    public function inviteAction($id, Request $request)
    {
        $session = $request->getSession();
        $membre = new Membre();
        $amis = new Amis();
       // $session->get('id');
        $amis->setId_membre1($session->get('id'));
        $amis->setId_membre2($id);
        $em = $this->getDoctrine()->getManager();
        $em->persist($amis);
        $em->flush();
        $this->addFlash('success', "Invitation envoyée");
       
        return $this->redirectToRoute('membre_all', ['id'=>$membre->getId()]);      
    }
    /**
     * @Route("/editPicture", name="membre_picture")
     */
    
    public function editpictureAction(Request $request)
    {
        $session = $request->getSession();
        $repository = $this->getDoctrine()->getRepository('AppBundle:Membre');
        // query for a single product matching the given name and price
        $membre = $repository->findById($session->get('id'));
        if(isset($_FILES['picture'])){
                $uploaddir = 'ressource/profil';
                $uploadfile = $uploaddir . basename($_FILES['picture']['name']);

                echo '<pre>';
                if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
                        move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile);
                        $membre->setPicture($uploadfile);
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($membre);
                        $em->flush();
                        $this->addFlash('success', "image telechargée");
                        echo "Le fichier est valide, et a été téléchargé avec succès. Voici plus d'informations :\n";
                } else {
                        echo "la taille de l'image dépasse la taille autorisé.";
                }
                    
            }
        return $this->redirectToRoute('membre_profil', ['id'=>$session->get('id')]);      
    }
    /**
     * @Route("/login", name="membre_login")
    */
    public function loginAction(Request $request)
    {
        $membre = new Membre();
        $form = $this->createForm(ConnexionForm::class, $membre);
        $form->handleRequest($request);
        $session = $request->getSession();
        if($form->isValid()){
            $repository = $this->getDoctrine()->getRepository('AppBundle:Membre');
            // query for a single product matching the given name and price
            $membre = $repository->findOneBy(
                array('mail' => $membre->getMail(), 'mdp' => $membre->getMdp())
            );
            if($membre!=null){
               // var_dump($membre->getDescription());
                /*return $this->redirectToRoute('membre_profil', [
                     'id'=>$membre->getId(),
                ]); */

                $session->set('id', $membre->getId());
                $session->set('name', $membre->getNom());
                return $this->render('membre\profil.html.twig', [
                    'membre'=>$membre,
                    'name'=>$session->get('name'),
                ]);
            }
              
        }
        return $this->render('membre/login.html.twig',[
            'membre' => $membre,
            'form' => $form->createView(),
        ]);
    }
}
