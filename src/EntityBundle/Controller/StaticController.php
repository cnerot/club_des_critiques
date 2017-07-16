<?php

namespace EntityBundle\Controller;

use EntityBundle\Entity\Staticpage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StaticController extends Controller
{
    public function createAction(Request $request)
    {

        $em = $this->get('doctrine')->getManager();

        $categorie_id =  $request->query->get('id', null);

        $data = $request->request->all();
        if (!empty($data)) {
            $page = new Staticpage();
            $page->setName($data["title"]);
            $page->setContent($data["content"]);
            $em->persist($page);
            $em->flush();
            $url = $this->generateUrl("administration_siteadmin");
            return $this->redirect(
                sprintf('%s', $url)
            );

        }
        return $this->render('EntityBundle:Static:create.html.twig', array(
            // ...
        ));
    }

    public function editAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $page_id = $request->query->get('id', null);
        $page = $em->getRepository('EntityBundle:Staticpage')->findOneBy(["id" => $page_id]);
        $data = $request->request->all();
        if (!empty($data)) {
            $page->setName($data["title"]);
            $page->setContent($data["content"]);
            $em->persist($page);
            $em->flush();
            $url = $this->generateUrl("administration_siteadmin");
            return $this->redirect(
                sprintf('%s', $url)
            );

        }
        return $this->render('EntityBundle:Static:edit.html.twig', array(
            "page" => $page,
        ));
    }

    public function deleteAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $page_id = $request->query->get('id', null);
        $page = $em->getRepository('EntityBundle:Staticpage')->findOneBy(["id" => $page_id]);

        $em->remove($page);
        $em->flush();
        $url = $this->generateUrl("administration_siteadmin");
        return $this->redirect(
            sprintf('%s', $url)
        );
    }

    public function viewAction(Request $request)
    {
        $em = $this->get('doctrine')->getManager();
        $page_id = $request->query->get('id', null);
        $page = $em->getRepository('EntityBundle:Staticpage')->findOneBy(["id" => $page_id]);

        return $this->render('EntityBundle:Static:view.html.twig', array(
            "page" => $page,
        ));
    }

}
