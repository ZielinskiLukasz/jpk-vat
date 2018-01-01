<?php

namespace App\JPK;

use App\JPK\BaseDocument\BaseDocument;
use Symfony\Component\Config\Definition\Exception\Exception;

class JPKFacade
{
    /**
     *
     */
    CONST DOCUMENT_TYPE_VAT = 'VAT';

    /**
     * @param string $documentObject
     * @param int $version
     * @return BaseDocument
     */
    public function createDocument(string $documentObject, int $version) : BaseDocument
    {
        $document = DocumentFactory::create($documentObject, $version);

        return $document;
    }

    /**
     * @param BaseDocument $document
     * @param array $data
     * @return string
     */
    public function setData(BaseDocument $document, array $data)
    {
        return $document->setData($data);
    }

    /**
     * @param BaseDocument $document
     * @return string
     */
    public function generateXml(BaseDocument $document)
    {
        return $document->get()->saveXML();
    }

    public function validateDocument(BaseDocument $document)
    {
        $validator = new DocumentValidator($document);
        $validator->validate();
    }
}
