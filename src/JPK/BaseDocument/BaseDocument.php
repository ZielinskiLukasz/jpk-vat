<?php

namespace App\JPK\BaseDocument;

abstract class BaseDocument
{
    /**
     * @var
     */
    protected $config;

    /**
     * @var
     */
    protected $xsdUrl;

    /**
     * @var \DOMDocument
     */
    protected $domDocument;

    /**
     * BaseDocument constructor.
     */
    public function __construct()
    {
        $this->domDocument = new \DOMDocument('1.0', 'UTF-8');
    }

    /**
     * @return \DOMDocument
     */
    public function get(): \DOMDocument
    {
        return $this->domDocument;
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        foreach ($data as $index => $value) {
            $element = $this->domDocument->getElementsByTagName($index);

            if ($element->length) {
                for ($i = 0; $i < $element->length; $i++) {
                    $element->item($i)->nodeValue = $value;
                }
            }
        }
    }

    /**
     * @param array $config
     */
    public function setConfig(array $config)
    {
        $this->config = $config;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function getXsdUrl()
    {
        return $this->xsdUrl;
    }
}
