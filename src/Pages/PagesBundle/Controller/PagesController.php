<?php

namespace Pages\PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public  function menuAction(){
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('PagesBundle:Pages')->findAll();

        return $this->render('PagesBundle:Default:Pages/modulesUsed/menu.html.twig', array('pages' => $pages));
    }
    public function pageAction($id)
    {
        return $this->render('PagesBundle:Default:Pages/layout/Pages.html.twig');
    }
}
