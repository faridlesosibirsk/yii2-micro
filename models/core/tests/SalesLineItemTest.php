<?php

use PHPUnit\Framework\TestCase;
use app\models\core\SalesLineItem;
use app\models\core\ProductDescription;

//require_once '../../models/my/SalesLineItem.php';

final class SalesLineItemTest extends TestCase {

    private $salesLineItem;
    private $desc;

    public function testSalesLineItem() {

        //$this->salesLineItem = new SalesLineItem();

        //$this->desc = new ProductDescription();
        $id = 100;
        $price = 3;
        $description = 'товар 1';
        $this->desc = new ProductDescription($id, $price, $description);

        $quantity = 7;
        $this->salesLineItem = new SalesLineItem($this->desc, $quantity);
        $SubTotal = 21;

        $this->assertEquals($this->salesLineItem->getSubTotal(), $SubTotal);
    }

}
