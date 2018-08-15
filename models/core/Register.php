<?php

namespace app\models\my;

use app\models\my\Sale;
use app\models\my\ProductCatalog;
use app\models\my\ProductDescription;

class Register {

    private $catalog;
    private $currentSale;

    public function __construct($catalog) {
        $this->catalog = $catalog;
    }

    public function endSale() {
        $this->currentSale->becomeComplete();
    }

    public function enterItem($id, $quantity) {
        $desc = new ProductDescription();
        $desc = $this->catalog->getProductDescription($id);
        $this->currentSale->makeLineItem($desc, $quantity);
    }

    public function makeNewSale() {
        $this->currentSale=new Sale();
    }

    public function makePayment($cashTendered) {
        $this->currentSale->makePayment($cashTendered);
    }

    public function getTotalSale() {
        return $this->currentSale->getTotal();
    }

}
