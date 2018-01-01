<?php

namespace App\Controller;

use App\JPK\JPKFacade;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @param JPKFacade $jpk
     * @return Response
     */
    public function index(JPKFacade $jpk)
    {
        $vat = $jpk->createDocument(JPKFacade::DOCUMENT_TYPE_VAT, 3);
        $doc = $jpk->generateXml($vat);

        $response = new Response($doc);
        $response->headers->set('Content-Type', 'xml');

        return $response;
    }


}
