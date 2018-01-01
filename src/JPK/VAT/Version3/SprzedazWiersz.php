<?php

namespace App\JPK\VAT\Version3;

use App\JPK\BaseDocument\BaseItemAbstract;

class SprzedazWiersz extends BaseItemAbstract
{
    public function generate() : \DOMElement
    {
        $doc = $this->domDocument;

        $sprzedazWiersz = $doc->createElement('tns:SprzedazWiersz');

        $sprzedazWiersz->appendChild($doc->createElement('tns:LpSprzedazy', '1'));
        $sprzedazWiersz->appendChild($doc->createElement('tns:NrKontrahenta', '3333333333'));
        $sprzedazWiersz->appendChild($doc->createElement('tns:NazwaKontrahenta', 'MMMMMMM'));
        $sprzedazWiersz->appendChild($doc->createElement('tns:AdresKontrahenta', 'a'));
        $sprzedazWiersz->appendChild($doc->createElement('tns:DowodSprzedazy', '333/2017'));
        $sprzedazWiersz->appendChild($doc->createElement('tns:DataWystawienia', '2018-01-07'));
        $sprzedazWiersz->appendChild($doc->createElement('tns:DataSprzedazy', '2018-01-07'));

        for ($i=10; $i<= 39; $i++) {

            $v = 0;

            switch ($i) {
                case 19: $v = 100; break;
                case 20: $v = 78; break;
                case 21: $v = 23; break;
                case 22: $v = 18; break;
            }

            $sprzedazWiersz->appendChild($doc->createElement('tns:K_' . $i, $v));
        }

        return $sprzedazWiersz;
    }
}
