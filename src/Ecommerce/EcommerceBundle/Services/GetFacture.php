<?php

namespace Ecommerce\EcommerceBundle\Services;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;





class GetFacture{
    public function __construct(ContainerInterface $container){
        $this->container = $container;
      
    }
      public function get($id)
    {
        return $this->container->get($id);
    }

    public function facture($facture){
        
                $content = $this->container->get('templating')->render('UtilisateursBundle:Default:layout/facturePDF.html.twig', array('facture' => $facture));
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