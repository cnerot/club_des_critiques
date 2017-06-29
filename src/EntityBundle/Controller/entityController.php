<?php

namespace EntityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Service\Product;
use EntityBundle\Service\Attributes;
use EntityBundle\Service\Categories;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\HttpFoundation\Request;

class entityController extends Controller
{
    public function createAction()
    {


        return $this->render('EntityBundle:entity:create.html.twig', array(
            // ...
        ));
    }

    public function viewAction(Request $request)
    {

        $em = $this->get('doctrine')->getManager();
        $entity = (new Product())->getById($em, $request->query->get('id', null));
        return $this->render('EntityBundle:entity:view.html.twig', array(
            'entity' => $entity
        ));//
    }

    public function frontviewAction()
    {
        $em = $this->get('doctrine')->getManager();
        $categories = (new Categories())->getById($em,1);
        $categories = $categories->save($em);




        echo "<pre>";
        var_dump($categories);
        echo "</pre>";
        ////$em = $this->get('doctrine')->getManager();
        ////$entity = $em->getRepository('EntityBundle:entity')->findAll();
        return $this->render('EntityBundle:entity:frontview.html.twig', array(
        //    //"ent" => $entity,
        ));
    }

    public function editAction()
    {
        return $this->render('EntityBundle:entity:edit.html.twig', array(
            // ...
        ));
    }
}
