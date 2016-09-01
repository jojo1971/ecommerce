<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UtilisateursController extends Controller
{
    public function facturesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('EcommerceBundle:Commandes')->byFacture($this->getUser());//Récupère l'utilisateur courant
        
        return $this->render('UtilisateursBundle:Default:layout/facture.html.twig', array('factures' => $factures));
    }

    public function facturePDFAction($id){

        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EcommerceBundle:Commandes')->findOneBy(array('utilisateur' => $this->getUser(),
                                                                                     'valider' => 1,
                                                                                       'id' => $id));

        if(!$facture){
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('factures'));
        }

               //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
       // $html = $this->renderView('UtilisateursBundle:Default:layout/facturePDF.html.twig', array('facturePDF' => $facture));

        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...

    $content = $this->renderView('UtilisateursBundle:Default:layout/facturePDF.html.twig', array('facture' => $facture));
    $pdfData = $this->get('obtao.pdf.generator')->outputPdf($content);

    /* You can also pass some options.
       The following options are available :
            protected $font = 'Arial'
            protected $format = 'P'
            protected $language = 'en'
            protected $size = 'A4'
       Here is an example to generate a pdf with a special font and a landscape orientation
    */
    $pdfData = $this->get('obtao.pdf.generator')->outputPdf($content,array('font'=>'Georgia','format'=>'L'));

    $response = new Response($pdfData);
    $response->headers->set('Content-Type', 'application/pdf');

    return $response;
    }


}
