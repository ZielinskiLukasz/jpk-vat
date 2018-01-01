<?php

namespace App\JPK\VAT\Version3;

use App\JPK\BaseDocument\BaseItemAbstract;

class Podmiot1 extends BaseItemAbstract
{
    public function generate() : \DOMElement
    {
        $doc = $this->domDocument;

        $Podmiot1 = $doc->createElement('tns:Podmiot1');

        $Podmiot1->appendChild($doc->createElement('tns:NIP', '1111111111'));
        $Podmiot1->appendChild($doc->createElement('tns:PelnaNazwa', 'ABCDF sp. z o.o.'));

        //$Podmiot1->appendChild($doc->createElement('tns:Email'));

//        $AdresPodmiotu = $Podmiot1->appendChild($doc->createElement('tns:AdresPodmiotu'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:KodKraju', 'PL'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:Wojewodztwo', 'MAZOWIECKIE'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:Powiat', 'a'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:Gmina', 'a'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:Ulica', 'a'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:NrDomu', 'a'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:NrLokalu', 'a'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:Miejscowosc', 'a'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:KodPocztowy', '11-111'));
//        $AdresPodmiotu->appendChild($doc->createElement('tns:Poczta', 'a'));

        return $Podmiot1;
    }
}
