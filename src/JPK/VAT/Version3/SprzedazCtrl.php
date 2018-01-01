<?php

namespace App\JPK\VAT\Version3;

use App\JPK\BaseDocument\BaseItemAbstract;

class SprzedazCtrl extends BaseItemAbstract
{
    public function generate() : \DOMElement
    {
        $doc = $this->domDocument;

        $SprzedazCtrl = $doc->createElement('tns:SprzedazCtrl');
        $LiczbaWierszySprzedazy = $SprzedazCtrl->appendChild($doc->createElement('tns:LiczbaWierszySprzedazy', 1));
        $PodatekNalezny = $SprzedazCtrl->appendChild($doc->createElement('tns:PodatekNalezny', 23));

        return $SprzedazCtrl;
    }
}
