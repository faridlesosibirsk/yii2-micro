<?php

namespace app\models\core;

use app\models\core\Sale;
use app\models\core\ProductCatalog;
use app\models\core\ProductDescription;

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
