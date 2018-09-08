<?php

namespace app\models\core;

use app\models\core\Sale;
use app\models\core\ProductCatalog;
use app\models\core\ProductDescription;

interface InterfaceRegister {

    public function __construct(InterfaceProductCatalog $catalog);

    public function endSale();

    public function enterItem(int $id, int $quantity);

    public function makeNewSale();

    public function makePayment(int $cashTendered);

    public function getTotalSale();
}

final class Register implements InterfaceRegister {

    private $catalog;
    private $currentSale;

    public function __construct(InterfaceProductCatalog $catalog) {
        $this->catalog = $catalog;
    }

    public function endSale() {
        $this->currentSale->becomeComplete();
    }

    public function enterItem(int $id, int $quantity) {
        //$desc = new ProductDescription();
        $desc = $this->catalog->getProductDescription($id);
        $this->currentSale->makeLineItem($desc, $quantity);
    }

    public function makeNewSale() {
        $this->currentSale = new Sale();
    }

    public function makePayment(int $cashTendered) {
        $this->currentSale->makePayment($cashTendered);
    }

    public function getTotalSale() {
        return $this->currentSale->getTotal();
    }

}
