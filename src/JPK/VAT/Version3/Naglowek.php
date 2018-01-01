<?php

namespace App\JPK\VAT\Version3;

use App\JPK\BaseDocument\BaseItemAbstract;

class Naglowek extends BaseItemAbstract
{
    public function generate() : \DOMElement
    {
        $doc = $this->domDocument;

        $Naglowek = $doc->createElement('tns:Naglowek');

        $KodFormularza = $doc->createElement('tns:KodFormularza', 'JPK_VAT');
        $KodFormularza->setAttribute('wersjaSchemy', '1-1');
        $KodFormularza->setAttribute('kodSystemowy', 'JPK_VAT (3)');

        $Naglowek->appendChild($KodFormularza);

        $Naglowek->appendChild($doc->createElement('tns:WariantFormularza', 3));

        /**
         * Pole zawiera warianty: 0 – Plik JPK za okres; 1-Pierwsza korekta
        2- druga korekta itd.
         */
        $Naglowek->appendChild($doc->createElement('tns:CelZlozenia', 1));

        $dt = new \DateTime();
        $Naglowek->appendChild($doc->createElement('tns:DataWytworzeniaJPK', $dt->format('Y-m-d\TH:i:s\Z')));
        $Naglowek->appendChild($doc->createElement('tns:DataOd', '2018-01-01'));
        $Naglowek->appendChild($doc->createElement('tns:DataDo', '2018-01-31'));
        $Naglowek->appendChild($doc->createElement('tns:NazwaSystemu', 'dcwq_jpk_vat'));

        //$Naglowek->appendChild($doc->createElement('tns:DomyslnyKodWaluty', 'PLN'));
        //$Naglowek->appendChild($doc->createElement('tns:KodUrzedu', '0402'));

        return $Naglowek;
    }
}
