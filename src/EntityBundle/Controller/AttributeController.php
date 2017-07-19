<?php

namespace EntityBundle\Controller;

use EntityBundle\Entity\attribute;
use EntityBundle\Entity\attributeOption;
use EntityBundle\Service\Attributes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AttributeController extends Controller
{
    public function allAction(Request $request)
    {

        $em = $this->get('doctrine')->getManager();
        $session = $request->getSession();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));
        $id = $request->query->get('id', null);
        $attributes = $em->getRepository('EntityBundle:attribute')->findBy(["category" => $id]);
        $pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();
        return $this->render('EntityBundle:Attribute:all.html.twig', array(
            "pages" => $pages_static,
            'membre' => $membre,
            'id_membre' => $session->get('id'),
            'id' => $id,
            'attributes' => $attributes,
        ));
    }

    public function createAction(Request $request)
    {


        $em = $this->get('doctrine')->getManager();
        $session = $request->getSession();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));
        $categories = $em->getRepository('EntityBundle:categorie')->findAll();
        $id = $request->query->get('id', null);
        $data = $request->request->all();
        $name = $request->request->get('name', null);
        $type = $request->request->get('type', null);
        if ($name != null || $type != null) {
            $error = false;
            if ($name == null) {
                $error = true;
            }
            if ($type == null) {
                $error = true;
            }
            if (!$error) {
                $data = $request->request->all();

                $attribute = new Attribute();
                $attribute->setName($data['name']);
                $attribute->setType($data['type']);
                $attribute->setCategory($id);
                $attribute->setObligatory($data["obligatory"]);
                $em->persist($attribute);
                $em->flush();
                if ($data['type'] == '2') {

                    foreach ($data['input'] as $option) {
                        $attr_option = new attributeOption();
                        $attr_option->setAttributeId($attribute->getId());
                        $attr_option->setValue($option);
                        $em->persist($attr_option);
                    }
                    $em->flush();
                }
                if ($data['type'] == '4') {
                    $attr_option = new attributeOption();
                    $attr_option->setAttributeId($attribute->getId());
                    $attr_option->setValue($data['date']);
                    $em->persist($attr_option);
                    $em->flush();
                }

                $url = $this->generateUrl("categorie_view", array("id" => $id));
                return $this->redirect(
                    sprintf('%s', $url)
                );


            }
        }


        $pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();
        return $this->render('EntityBundle:Attribute:create.html.twig', array(
            "pages" => $pages_static,
            'membre' => $membre,
            'id_membre' => $session->get('id'),
            'id' => $id,
            "categories" => $categories,
        ));
    }

    public function viewAction(Request $request)
    {

        $em = $this->get('doctrine')->getManager();

        $session = $request->getSession();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));
        $attribute = (new Attributes())->getById($em, $request->query->get('id', null));

        $pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();
        return $this->render('EntityBundle:Attribute:view.html.twig', array(// ...
            'membre' => $membre,
            'attribute' => $attribute,
            'id_membre' => $session->get('id'),
            "pages" => $pages_static,

        ));
    }

    public function deleteAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();

        $session = $request->getSession();
        $membre = $em->getRepository('AppBundle:Membre')->find($session->get('id'));

        $pages_static = $em->getRepository('EntityBundle:Staticpage')->findAll();
        return $this->render('EntityBundle:Attribute:delete.html.twig', array(// ...
            "pages" => $pages_static,
            'membre' => $membre,
            'id_membre' => $session->get('id'),
        ));
    }

}
