<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Messagerie;
use AppBundle\Entity\Membre;
use AppBundle\Form\MailForm;
use AppBundle\Form\ContactForm;

class MessagerieController extends Controller
{
    /** 
     * @Route("/", name="membre_index")
     */
    public function indexAction()
    {
        
        
    }
    /** 
     * @Route("/reception", name="messagerie_reception")
     */
    public function receptionAction()
    {
        $em = $this->getDoctrine()->getManager();
        $membre = $em->getRepository('AppBundle:Membre')->findAll();
        $messagerieReceve = $em->getRepository('AppBundle:Messagerie')->findBy(array('id_recever' => 5));
        $messagerieSent = $em->getRepository('AppBundle:Messagerie')->findBy(array('id_sender' => 5));
        return $this->render('mail\boiteReception.html.twig', [
            'messagerieSent'=>$messagerieSent,
            'messagerie'=>$messagerieReceve,
            'membre' => $membre,
        ]);
        
    }
    /** 
     * @Route("/lire/{id}", name="messagerie_lire")
     */
    public function lireAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('AppBundle:Messagerie')->findOneById($id);
       // var_dump($message.getId());
        //die;
        $membre = $em->getRepository('AppBundle:Membre')->findAll();
        return $this->render('mail\lireMail.html.twig', [
            'message'=>$message,
            'membre' => $membre,
        ]);
        
    }
    /** 
     * @Route("/nousContacter", name="messagerie_nouscontacter")
     */
    public function contactAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $receverAdmin = $em->getRepository('AppBundle:Membre')->findBy(array('statut'=>1));
        //var_dump($receverAdmin);
        $message = new Messagerie();
        $form = $this->createForm(contactForm::class, $message);
        $form->handleRequest($request);
        
        if($form->isValid()){
            // query for a single product matching the given name and price
            $membre = new Membre();
            if(!$em->getRepository('AppBundle:Membre')->findBy(array('mail'=>$request->get('mail')))){
                $membre->setNom($request->get('nom'));
                $membre->setMail($request->get('mail'));
                $em = $this->getDoctrine()->getManager();
                $em->persist($membre);
                $em->flush();
                $message->setId_Sender($membre->getId());
            }else{
                $sender = $em->getRepository('AppBundle:Membre')->findOneBy(array('mail'=>$request->get('mail')));
                $message->setId_Sender($sender->getId());
            }
            
            foreach ($receverAdmin as $admin){
                $message->setId_Recever($admin->getId());
                $message->setVu(0);
                //$message->setDate(Symfony\Component\Validator\Constraints\Date('Y-m-d H:i'));
                $date = new \DateTime(date('Y-m-d H:i:s'));
              //  var_dump($date);
                //$date =$date->format('Y-m-d H:i');
                $message->setDate($date);
                $em = $this->getDoctrine()->getManager();
                $em->persist($message);
                $em->flush();
            }
        }
       // var_dump($message.getId());
        //die;
        $membre = $em->getRepository('AppBundle:Membre')->findAll();
        
        return $this->render('mail/nousContacter.html.twig', [
            'form'=>$form->createView(),
        ]);
        
    }


    /**
     * @Route("/send/{id}", name="messagerie_send")
    */
    public function sendAction(Request $request, $id)
    {
        $message = new Messagerie();
        $form = $this->createForm(mailForm::class, $message);
        $form->handleRequest($request);
     
        if($form->isValid()){
            // query for a single product matching the given name and price
            $message->setId_Sender(5);
            $message->setId_Recever($id);
            $message->setVu(0);
            //$message->setDate(Symfony\Component\Validator\Constraints\Date('Y-m-d H:i'));
            $date = new \DateTime(date('Y-m-d H:i:s'));
          //  var_dump($date);
            //$date =$date->format('Y-m-d H:i');
            $message->setDate($date);
            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();
              
        }
        return $this->render('mail/mail.html.twig',[
           // 'membre' => $membre,
            'form' => $form->createView(),
        ]);
    }
}
