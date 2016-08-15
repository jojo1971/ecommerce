<?php

namespace Ecommerce\EcommerceBundle\Controller;


use Ecommerce\EcommerceBundle\Form\RechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
      public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->byCategorie($categorie);

        return $this->render('EcommerceBundle:Default:Produits/layout/produits.html.twig', array('produits' => $produits));
    }
    public function produitsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findAll();

        return $this->render('EcommerceBundle:Default:Produits/layout/produits.html.twig', array('produits' => $produits));
    }
    public function presentationAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->find($id);
        return $this->render('EcommerceBundle:Default:Produits/layout/presentation.html.twig', array('produit' => $produit));
    }

    public  function rechercheAction(){

        $form = $this->createForm(new RechercheType());

        return $this->render('EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig', array('form' => $form->createView()));
    }

    public function  rechercheTraitementAction(){

        if ($this->get('request')->getMethod() == 'POST'){

            $form = $this->createForm(new RechercheType());
            $form->bind($this->get('request'));
            echo $form['recherche']->getData();
        }

        die();
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository('EcommerceBundle:Produits')->recherche($chaine);

        return $this->render('EcommerceBundle:Default:Produits/layout/presentation.html.twig', array('produit' => $produit));
    }
}
