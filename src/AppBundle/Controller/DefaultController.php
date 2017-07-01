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
        $session = $request->getSession();
        $erreur=null;
        if($form->isValid()){
            $repository = $this->getDoctrine()->getRepository('AppBundle:Membre');
            // query for a single product matching the given name and price
            $mailMembre= $repository->findOneBy(
                array('mail' => $membre->getMail())
            );
            if(filter_var($membre->getMail(), FILTER_VALIDATE_EMAIL) && $mailMembre == null){
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
                $erreur=null;
                $this->addFlash('success', "Mail de configuration a été envoyé");
            }elseif(!filter_var($membre->getMail(), FILTER_VALIDATE_EMAIL)){
                $erreur ="Veuillez renseigner une adresse mail valide!";
            }else{
                $erreur ="L'adresse mail existe déja!";
            }
           //return $this->redirectToRoute('membre_show', ['id'=>$membre->getId()]);      
        }
        if($session->get('id')!=null){
            $em = $this->getDoctrine()->getManager();
            $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));
        }
        $em = $this->getDoctrine()->getManager();
        $concept = $em->getRepository('AppBundle:Concept')->find(1);
        return $this->render('home/index.html.twig',[
            'membre' => $membre,
            'email' => $form->createView(),
            'id_membre' => $session->get('id'),
            'concept' => $concept->getConcept(),
            'mailExist'=>$erreur
        ]);
    }
   
}
