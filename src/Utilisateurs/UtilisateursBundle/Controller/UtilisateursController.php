<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use html2pdf;

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
        $html = $this->renderView('UtilisateursBundle:Default:layout/facturePDF.html.twig', array('facturePDF' => $facture));

        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf('P','A4','fr');

        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetAuthor('DevAndClick');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference);
        $html2pdf->pdf->SetSubject('Facture DevAndClick');
        $html2pdf->pdf->SetKeywords('Facture, Dev');
        $html2pdf->pdf->SetDisplayMode('real');

        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $html2pdf->Output('Facture.pdf');


        $response = new Response();
        $response->headers->set('Content-type', 'application/pdf');
        return $response;
    }


}
