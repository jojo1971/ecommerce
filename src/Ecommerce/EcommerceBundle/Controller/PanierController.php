<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Ecommerce\EcommerceBundle\Form\UtilisateursAdressesType;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Controller\CommandeController;




class PanierController extends Controller
{
    public function menuAction(){
         $session = $this->get('request')->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));
     return $this->render('EcommerceBundle:Default:panier/modulesUsed/panier.html.twig', array('articles' => $articles));
    }
    public function supprimerAction($id){

        $session = $this->get('request')->getSession();
        $panier = $session->get('panier');
        if(array_key_exists($id, $panier)){
            unset($panier[$id]);
            $session->set('panier', $panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succés');
        }
        return $this->redirect($this->generateUrl('panier'));

    }
    public  function ajouterAction($id){
        $session = $this->get('request')->getSession();


        if (!$session->has('panier')) $session->set('panier',array());

        $panier = $session->get('panier');

        //$panier[id du produit]=> quantité

        if (array_key_exists($id, $panier)){
            if($this->get('request')->query->get('qte') != null) $panier[$id] = $this->get('request')->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifiée avec succès');
        }else{
            if ($this->get('request')->query->get('qte') != null)
                $panier[$id] = $this->get('request')->query->get('qte');
            else
                $panier[$id] =1;
             $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }

        $session->set('panier', $panier);



        return $this->redirect($this->generateUrl('panier'));
    }
    public function panierAction()
    {
        $session = $this->get('request')->getSession();
       // $session->remove('panier');
        //die();

        if(!$session->has('panier')) $session->set('panier',array());

        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));

        return $this->render('EcommerceBundle:Default:panier/layout/panier.html.twig', array('produits' => $produits,
                                                                                        'panier' => $session->get('panier')));
    }

    public  function  adresseSuppressionAction($id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($id);

        if($this->container->get('security.context')->getToken()->getUser() != $entity->getUtilisateur() || !$entity)
            return $this->redirect($this->generateUrl('livraison'));

            $em->remove($entity);
            $em->flush();

          return ($this->redirect($this->generateUrl('livraison')));
    }

    public function livraisonAction()
    {
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $entity = new UtilisateursAdresses();
        $form = $this->createForm(new UtilisateursAdressesType(), $entity);

        if($this->get('request')->getMethod() == 'POST'){

            $form->handleRequest($this->get('request'));
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($utilisateur);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('livraison'));
            }
        }

        return $this->render('EcommerceBundle:Default:panier/layout/livraison.html.twig', array('utilisateur' => $utilisateur,
                                                                                                 'form' => $form->createView()));
    }

    public  function setLivraisonOnSession(){
        $session = $this->get('request')->getSession();

        if($session->has('adresse'))  $session->set('adresse', array());
        $adresse = $session->get('adresse');

        if($this->get('request')->request->get('livraison') != null && $this->get('request')->request->get('facturation') != null ){
            $adresse['livraison'] = $this->get('request')->request->get('livraison');
            $adresse['facturation'] = $this->get('request')->request->get('facturation');
        }else{
            return $this->redirect($this->generateUrl('validation'));
        }
        $session->set('adresse', $adresse);

        return $this->redirect($this->generateUrl('validation'));
    }

    public function validationAction()
    {
        if($this->get('request')->getMethod() == 'POST')
            $this->setLivraisonOnSession();

        $em = $this->getDoctrine()->getManager();
        $prepareCommande = $this->forward('EcommerceBundle:Commandes:prepareCommande');
        $commande = $em->getRepository('EcommerceBundle:Commandes')->find($prepareCommande->getContent());

        /*
        $session = $this->get('request')->getSession();
        $adresse = $session->get('adresse');

        $produits = $em->getRepository('EcommerceBundle:Produits')->findArray(array_keys($session->get('panier')));
        $livraison = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($adresse['livraison']);
        $facturation = $em->getRepository('EcommerceBundle:UtilisateursAdresses')->find($adresse['facturation']);

       */



        return $this->render('EcommerceBundle:Default:panier/layout/validation.html.twig', array('commande' => $commande));
    }
}
