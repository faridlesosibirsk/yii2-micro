<?php

namespace app\models\core;

class SalesLineItem {

    private $quantity;
    private $description;

    public function SaleLineItem($desc, $quantity) {
        $this->description = $desc;
        $this->quantity = $quantity;
    }

    public function getSubTotal() {
        return ($this->description->getPrice()) * $this->quantity;
    }

}
