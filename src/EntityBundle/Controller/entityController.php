<?php

namespace EntityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Service\Product;
use EntityBundle\Service\Attributes;
use EntityBundle\Service\Categories;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Salon;
use AppBundle\Entity\Membre;
class entityController extends Controller
{
    public function createAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $session = $request->getSession();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));

        $categorie_id =  $request->query->get('id', null);

        $data = $request->request->all();
        if (!empty($data)) {
            $cat = new Product();
            $cat->name = $data["title"];
            $cat->category = $categorie_id;
            $cat = $cat->save($this->get('doctrine')->getManager());
            $url = $this->generateUrl("categorie_all");
            return $this->redirect(
                sprintf('%s', $url)
            );
        }
        $pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();
        return $this->render('EntityBundle:entity:create.html.twig', array(
            "pages" => $pages_static,
            'membre' => $membre,
            'id_membre' => $session->get('id'),
        ));
    }

    public function viewAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $session = $request->getSession();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));

        $entity = (new Product())->getById($em, $request->query->get('id', null));
        $categorie = (new Categories())->getById($em, $entity->category)->name;
        $data = $request->request->all();
        if (isset($data['product_id'])){
            foreach ($data as $key => $val){
                if ($key == 'product_id'){
                    continue;
                }
                $key_array = explode('_',$key);
                if ($key_array['0'] == "attribute"){
                    $attribute = $entity->data[$key_array[1]];
                    $attribute->value = $val;
                    $attribute->save($em);
                }
            }
            foreach ($_FILES as $key => $val){
                $key_array = explode('_',$key);
                if ($key_array['0'] == "attribute"){
                    $attribute = $entity->data[$key_array[1]];
                    $attribute->value = $val;
                    $attribute->save($em);
                }
            }
            $entity = (new Product())->getById($em, $request->query->get('id', null));
        }


        $pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();
        return $this->render('EntityBundle:entity:view.html.twig', array(
            "pages" => $pages_static,
            'entity' => $entity,
            'categorie' => $categorie,
            'membre' => $membre,
            'id_membre' => $session->get('id'),
        ));
    }

    public function frontviewAction(Request $request)
    {
        /**
         * Recuperation des salons
         */

        $em = $this->getDoctrine()->getManager();
        $session = $request->getSession();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));

        $salon = new Salon();
        $session = $request->getSession();
        $membre =  $em->getRepository('AppBundle:Membre')->findOneById($session->get('id'));

        if(empty($membre)){
            $membre = new Membre();
        }

        $salonsReceived = $this->getDoctrine()
            ->getRepository('AppBundle:Salon')
            ->findBy(["id_article" => $request->query->get('id', null)]);

        $a = 0;
        $salons = [];
        $tabIdDoublons = [];
        foreach($salonsReceived as $salonReceived){
            $i = 0;
            $found = false;
            $foundAncien = false;
            foreach($salonsReceived as $salonReceived2){
                if($found == false && $salonReceived->getId() != $salonReceived2->getId()){
                    if(
                        $salonReceived->getDateDebut() == $salonReceived2->getDateDebut() &&
                        $salonReceived->getDateFin() == $salonReceived2->getDateFin() &&
                        $salonReceived->getIdArticle() == $salonReceived2->getIdArticle()
                    ){
                        $found = true;

                        if(strtotime(date('Y-m-d')) > strtotime($salonReceived->getDateFin()->format('Y-m-d'))){
                            $found = false;
                        }
                        if(!in_array($salonReceived->getId(), $tabIdDoublons) && !in_array($salonReceived2->getId(), $tabIdDoublons)){
                            $salons[] = $salonReceived;
                            $foundAncien = true;
                            $tabIdDoublons[] = $salonReceived->getId();
                            $tabIdDoublons[] = $salonReceived2->getId();
                        }
                    }
                }
                $i++;
            }
            if($found == false && $foundAncien == false){
                $salons[] = $salonReceived;
            }
        }

        $em = $this->get('doctrine')->getManager();
        $entity = (new Product())->getById($em, $request->query->get('id', null));
        $categorie = (new Categories())->getById($em, $entity->id)->name;

        $pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();
        $loan = $em->getRepository('EntityBundle:Borrow')->findOneBy([
            'idOwner' =>$session->get('id'),
            'idProduct' =>$entity->id,
        ]);

        $loans = $em->getRepository('EntityBundle:Borrow')->findBy([
            'idProduct' => $entity->id,
        ]);
        if($loan != null){
            $loan = $loan->getStatus();
        }
        return $this->render('EntityBundle:entity:frontview.html.twig', array(
            "pages" => $pages_static,
            'entity' => $entity,
            'categorie' => $categorie,
            'salons' => $salons,
            'membre' => $membre,
            'id_membre' => $session->get('id'),
            'status' => $loan,
            'loans' => $loans,
        ));
    }

    public function editAction()
    {
        return $this->render('EntityBundle:entity:edit.html.twig', array(
            // ...
        ));
    }
}
