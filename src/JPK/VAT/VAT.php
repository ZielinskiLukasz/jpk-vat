<?php

namespace App\JPK\VAT;

use App\JPK\BaseDocument\BaseDocument;
use App\JPK\VAT\Version3\Config;
use App\JPK\VAT\Version3\JPK;
use App\JPK\VAT\Version3\Naglowek;
use App\JPK\VAT\Version3\Podmiot1;
use App\JPK\VAT\Version3\SprzedazCtrl;
use App\JPK\VAT\Version3\SprzedazWiersz;
use App\JPK\VAT\Version3\ZakupCtrl;
use App\JPK\VAT\Version3\ZakupWiersz;

class VAT extends BaseDocument
{
    /**
     * @return bool
     */
    public function create()
    {
        switch ($this->getVersion()) {
            case 3:
                return $this->prepareVersion3();
                break;
        }

        throw new \InvalidArgumentException('Document version is unknown');
        return false;
    }

    /**
     * Prepare JPK VAT 3 (2018.01.01)
     * kodSystemowy JPK_VAT (3)
     * wersjaSchemy 1-1
     *
     * @return bool
     */
    private function prepareVersion3()
    {
        $jpk = new JPK($this->domDocument);
        $this->xsdUrl = $jpk->xsdUrl;

        $jpk = $jpk->generate();

        $Naglowek = new Naglowek($this->domDocument);
        $jpk->appendChild($Naglowek->generate());

        $Podmiot1 = new Podmiot1($this->domDocument);
        $jpk->appendChild($Podmiot1->generate());

        $SprzedazWiersz = new SprzedazWiersz($this->domDocument);
        $jpk->appendChild($SprzedazWiersz->generate());

        $SprzedazCtrl = new SprzedazCtrl($this->domDocument);
        $jpk->appendChild($SprzedazCtrl->generate());

        $ZakupWiersz = new ZakupWiersz($this->domDocument);
        $jpk->appendChild($ZakupWiersz->generate());

        $ZakupCtrl = new ZakupCtrl($this->domDocument);
        $jpk->appendChild($ZakupCtrl->generate());

        return true;
    }
}
