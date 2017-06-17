<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Membre;
use AppBundle\Form\MembreForm;
use AppBundle\Form\ConnexionForm;
use AppBundle\Form\InscriptionForm;
use AppBundle\Helper\Helper;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $membre = new Membre();
        $form = $this->createForm(InscriptionForm::class, $membre);
        $form->handleRequest($request);
        if($form->isValid()){
            $mdp = Helper::createPassword(10);//.''.base64_encode($membre->getMail());
            $hashed_password = 'RTBDSG907HGVB@@BGJGfgcgfVGHCDFVBHJhfhg0989';
            $membre->setMdp(crypt($mdp,$hashed_password));
            $message = \Swift_Message::newInstance()
             ->setSubject('Confirmation d\'inscription sur le club des critiques')
             ->setFrom('noreply@clubcritique.com')
             ->setTo($membre->getMail())
             ->setBody('Bonjour ! ici est votre lien de confirmation!'
                     . '<br> Votre login: '.$membre->getMail().''
                     . '<br> Votre Mot de passe : '.$mdp .'',
             'text/html'
             );
            $this->get('mailer')->send($message);
            $em = $this->getDoctrine()->getManager();
            $em->persist($membre);
            $em->flush();

            $this->addFlash('success', "Mail de configuration a été envoyé");

           //return $this->redirectToRoute('membre_show', ['id'=>$membre->getId()]);      
        }

        return $this->render('home/index.html.twig',[
            'membre' => $membre,
            'email' => $form->createView(),
        ]);
    }
   
}
