<?php

namespace App\JPK\BaseDocument;

abstract class BaseItemAbstract
{
    /**
     * @var \DOMDocument
     */
    protected $domDocument;

    /**
     * @var
     */
    private $data;

    /**
     * BaseItem constructor.
     * @param \DOMDocument $domDocument
     */

    public function __construct(\DOMDocument $domDocument)
    {
        $this->domDocument = $domDocument;
    }

    /**
     * @return \DOMElement
     */
    abstract public function generate() : \DOMElement;

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }
}
