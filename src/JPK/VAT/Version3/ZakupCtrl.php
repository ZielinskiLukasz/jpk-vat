<?php

namespace App\JPK\VAT\Version3;

use App\JPK\BaseDocument\BaseItemAbstract;

class ZakupCtrl extends BaseItemAbstract
{
    public function generate() : \DOMElement
    {
        $doc = $this->domDocument;

        $ZakupCtrl = $doc->createElement('tns:ZakupCtrl');
        $LiczbaWierszyZakupow = $ZakupCtrl->appendChild($doc->createElement('tns:LiczbaWierszyZakupow', 1));
        $PodatekNaliczony = $ZakupCtrl->appendChild($doc->createElement('tns:PodatekNaliczony', 18));

        return $ZakupCtrl;
    }
}
