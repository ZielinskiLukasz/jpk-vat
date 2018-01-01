<?php

namespace App\JPK;

use App\JPK\BaseDocument\BaseDocument;

class DocumentFactory
{
    /**
     * Document types
     */
    CONST DOCUMENTS_TYPES = [
        'VAT' => 'App\JPK\VAT\VAT'
    ];

    /**
     * Create document by type and version strategy
     *
     * $document = DocumentFactory::create(JPKFacade::DOCUMENT_VAT, $version);
     *
     * @param string $type
     * @param int $version
     * @return BaseDocument
     */
    public static function create(string $type, int $version) : BaseDocument
    {
        $className = self::DOCUMENTS_TYPES[$type];

        $document = new $className();
        $document->setVersion($version);
        $document->create();

        return $document;
    }
}
