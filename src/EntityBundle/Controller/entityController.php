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
        return $this->render('EntityBundle:entity:create.html.twig', array());
    }

    public function viewAction(Request $request)
    {

        $em = $this->get('doctrine')->getManager();
        $entity = (new Product())->getById($em, $request->query->get('id', null));

        $data = $request->request->all();
        if (isset($data['product_id'])){
            foreach ($data as $key => $val){
                $key_array = explode('_',$key);
                if ($key_array['0'] == "attribute"){
                    $attribute = $entity->data[$key_array[1]];
                    $attribute->value = $val;
                    $attribute->save($em);
                }
            }
            $entity = (new Product())->getById($em, $request->query->get('id', null));
        }


        return $this->render('EntityBundle:entity:view.html.twig', array(
            'entity' => $entity
        ));
    }

    public function frontviewAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $entity = (new Product())->getById($em, $request->query->get('id', null));
        $categorie = (new Categories())->getById($em, $entity->id)->name;

        return $this->render('EntityBundle:entity:frontview.html.twig', array(
            'entity' => $entity,
            'categorie' => $categorie,
        ));
    }

    public function editAction()
    {
        return $this->render('EntityBundle:entity:edit.html.twig', array(
            // ...
        ));
    }
}
