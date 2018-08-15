<?php

use PHPUnit\Framework\TestCase;
use app\models\my\SalesLineItem;
use app\models\my\ProductDescription;

//require_once '../../models/my/SalesLineItem.php';

final class SalesLineItemTest extends TestCase {

    private $salesLineItem;
    private $desc;

    public function testSalesLineItem() {

        $this->salesLineItem = new SalesLineItem();

        $this->desc = new ProductDescription();
        $id = 100;
        $price = 3;
        $description = 'товар 1';
        $this->desc->ProductDescription($id, $price, $description);

        $quantity = 7;
        $this->salesLineItem->SaleLineItem($this->desc, $quantity);
        $SubTotal = 21;

        $this->assertEquals($this->salesLineItem->getSubTotal(), $SubTotal);
    }

}
