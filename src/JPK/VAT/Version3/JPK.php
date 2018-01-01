<?php

namespace App\JPK\VAT\Version3;

use App\JPK\BaseDocument\BaseItemAbstract;

class JPK extends BaseItemAbstract
{
    public $xsdUrl = 'http://www.mf.gov.pl/documents/764034/6145258/Schemat_JPK_VAT%283%29_v1-1.xsd';

    public function generate() : \DOMElement
    {
        $jpk = $this->domDocument->createElementNS('http://jpk.mf.gov.pl/wzor/2017/11/13/1113/', 'tns:JPK');
        $jpk->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $jpk->setAttributeNS('http://www.w3.org/2000/xmlns/' ,'xmlns:kck', 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2013/05/23/eD/KodyCECHKRAJOW/');
        $jpk->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:etd', 'http://crd.gov.pl/xml/schematy/dziedzinowe/mf/2016/01/25/eD/DefinicjeTypy/');

        return $this->domDocument->appendChild($jpk);
    }
}
