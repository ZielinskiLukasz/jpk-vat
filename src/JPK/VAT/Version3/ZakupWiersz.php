<?php

namespace App\JPK\VAT\Version3;

use App\JPK\BaseDocument\BaseItemAbstract;

class ZakupWiersz extends BaseItemAbstract
{
    public function generate() : \DOMElement
    {
        $doc = $this->domDocument;

        $ZakupWiersz = $doc->createElement('tns:ZakupWiersz');

        $ZakupWiersz->appendChild($doc->createElement('tns:LpZakupu', 1));
        $ZakupWiersz->appendChild($doc->createElement('tns:NrDostawcy', 'xxx'));
        $ZakupWiersz->appendChild($doc->createElement('tns:NazwaDostawcy', 'TREWQ'));
        $ZakupWiersz->appendChild($doc->createElement('tns:AdresDostawcy', 'ZZZZZZ'));
        $ZakupWiersz->appendChild($doc->createElement('tns:DowodZakupu', '100/2017'));
        $ZakupWiersz->appendChild($doc->createElement('tns:DataZakupu', '2018-01-05'));
        $ZakupWiersz->appendChild($doc->createElement('tns:DataWplywu', '2018-01-05'));

        for ($i=43; $i<=50; $i++) {

            $v = 0;

            switch ($i)
            {
                case 45: $v = 80; break;
                case 46: $v = 25; break;
                case 47: $v = 18; break;
            }

            $ZakupWiersz->appendChild($doc->createElement('tns:K_' . $i, $v));
        }

        return $ZakupWiersz;
    }
}
