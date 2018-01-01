<?php

namespace App\JPK;

use App\JPK\BaseDocument\BaseDocument;

class DocumentValidator
{
    /**
     * @var BaseDocument
     */
    private $document;

    /**
     * DocumentValidator constructor.
     * @param BaseDocument $document
     */
    public function __construct(BaseDocument $document)
    {
        $this->document = $document;
    }

    /**
     * @return array|bool
     * @throws \Exception
     */
    public function validate()
    {
        if (!file_get_contents($this->document->getXsdUrl())) {
            throw new \Exception('Schema is missing');
            return false;
        }

        $isValid = $this->document->get()->schemaValidate($this->document->getXsdUrl());

        if (!$isValid) {

            $errors = libxml_get_errors();
            $result = [];

            foreach ($errors as $error) {
                $result[] = $this->libxmlGetError($error);
            }

            libxml_clear_errors();

            return $result;
        }
    }

    /**
     * @param $error
     * @return string
     */
    private function libxmlGetError(\LibXMLError $error) : string
    {
        $errorString = "Error $error->code in $error->file ( Line: {$error->line} ):";
        $errorString .= trim($error->message);

        return $errorString;
    }

}
