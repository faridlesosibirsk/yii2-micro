<?php

namespace app\models\core;

//use app\models\core\ProductDescription;

interface InterfaceSalesLineItem {

    public function __construct(InterfaceProductDescription $desc, int $quantity);

    public function getSubTotal();
}

final class SalesLineItem implements InterfaceSalesLineItem {

    private $quantity;
    private $description;

    public function __construct(InterfaceProductDescription $desc, int $quantity) {
        $this->description = $desc;
        $this->quantity = $quantity;
    }

    public function getSubTotal() {
        return ($this->description->getPrice()) * $this->quantity;
    }

}
