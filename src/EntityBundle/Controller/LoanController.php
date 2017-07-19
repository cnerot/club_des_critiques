<?php

namespace EntityBundle\Controller;

use AppBundle\Entity\Messagerie;
use EntityBundle\Service\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use EntityBundle\Entity\Borrow;

class LoanController extends Controller
{
    public function createAction(Request $request)
    {
        $data = array();

        try{
            $em = $this->get('doctrine')->getManager();
            $session = $request->getSession();
            $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));
            $input = $request->request->all();

            $loan = new Borrow();
            $loan->setIdOwner($session->get('id'));
            $loan->setStatus(Borrow::STATUS_OWNED);
            $loan->setIdProduct($input['productid']);
            $em->persist($loan);
            $em->flush();
        } catch (Exception $e){
            $data["error"] = true;
            $response = new Response(json_encode($data));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }

        $data["error"] = false;

        $response = new Response(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }
    public function loanAction(Request $request)
    {
        $data = array();
        try{
            $em = $this->get('doctrine')->getManager();
            $session = $request->getSession();
            $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));
            $input = $request->request->all();

            $loan = $em->getRepository('EntityBundle:Borrow')->findOneBy([
                'idOwner' =>$session->get('id'),
                'idProduct' => $input['productid'],
            ]);
            $loan->setStatus(Borrow::STATUS_LOANABLE);
            $em->persist($loan);
            $em->flush();
        } catch (Exception $e){
            $data["error"] = true;
            $response = new Response(json_encode($data));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }

        $data["error"] = false;

        $response = new Response(json_encode($data));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    public function borrowAction(Request $request)
    {
        $id = $request->query->get('loan', null);

        $em = $this->get('doctrine')->getManager();
        $session = $request->getSession();

        $loan = $em->getRepository('EntityBundle:Borrow')->find($id);
        $loan->setStatus(Borrow::STATUS_INTEREST);
        $loan->setIdLoan($session->get('id'));
        $em->persist($loan);
        $em->flush();
        $url = $this->generateUrl("frontview")."?id=".$request->query->get('entity', null);
        return $this->redirect(
            sprintf('%s', $url)
        );
    }
    public function savevalidateAction(Request $request)
    {
        $id = $request->query->get('loan', null);
        $em = $this->get('doctrine')->getManager();
        $session = $request->getSession();

        $loan = $em->getRepository('EntityBundle:Borrow')->find($id);
        $loan->setStatus(Borrow::STATUS_INTEREST_VALID);

        $message_1 = new Messagerie();
        $message_1->setId_recever($loan->getIdLoan());
        $message_1->setId_sender($loan->getIdOwner());
        $message_1->setObjet("Pret Accepté");
        $message_1->setMessage("Votre pret a été accepté vous allez recevoir votre livre");
        $message_1->setDate(new \DateTime(date('Y-m-d H:i:s')));
        $message_1->setVu(0);
        $email = $em->getRepository('AppBundle:Membre')->find($loan->getIdLoan())->getMail();

        $message_2 = new Messagerie();
        $message_2->setId_recever($loan->getIdOwner());
        $message_2->setId_sender($loan->getIdLoan());
        $message_2->setObjet("Pret Accepté");
        $message_2->setMessage("Votre pret a été accepté. les coordonnées sont: " . $email);
        $message_2->setDate(new \DateTime(date('Y-m-d H:i:s')));
        $message_2->setVu(0);


        $em->persist($loan);
        $em->persist($message_1);
        $em->persist($message_2);
        $em->flush();

        $url = $this->generateUrl("loan_validate")."?id=".$request->query->get('entity', null);
        return $this->redirect(
            sprintf('%s', $url)
        );
    }
    public function validateAction(Request $request)
    {

        $em = $this->get('doctrine')->getManager();
        $session = $request->getSession();

        $loans = $em->getRepository('EntityBundle:Borrow')->findAll();
        $new_loans = array();
        foreach ($loans as $loan){
            $new = array();
            $new['id'] = $loan->getId();
            $new['status'] = $loan->getStatus();
            $new['owner'] = $em->getRepository('AppBundle:Membre')->find($loan->getIdLoan());
            $new['loan'] = $em->getRepository('AppBundle:Membre')->find($loan->getIdOwner());
            $new['product'] = (new Product())->getById($em,$loan->getIdProduct());
            $new_loans[] = $new;
        }
        $url = $this->generateUrl("frontview")."?id=".$request->query->get('entity', null);
        return $this->render('EntityBundle:Borrow:admin.html.twig', array(
            'loans' => $new_loans,
        ));
    }
}
