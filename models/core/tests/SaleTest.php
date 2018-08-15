<?php

use PHPUnit\Framework\TestCase;
use app\models\my\SalesLineItem;
use app\models\my\Payment;
use app\models\my\ProductDescription;
use app\models\my\Sale;

//require_once '../../models/my/Sale.php';
//require_once '../../models/my/SalesLineItem.php';

final class SaleTest extends TestCase {

    private $Sale;

    function testGetBalance() {
        $this->Sale = new Sale();
        $cachTendered = 3;
        $this->Sale->makePayment($cachTendered);
        $this->assertEquals($this->Sale->getBalance(), $cachTendered);
    }

    function testComplete() {
        $this->Sale = new Sale();
        $this->assertEquals($this->Sale->isComplete(), false);
        $this->Sale->becomeComplete();
        $this->assertEquals($this->Sale->isComplete(), true);
    }

    function testMakeLineItem() {
        $this->Sale = new Sale();
        $saleLineItem = new SalesLineItem();
        $desc = new ProductDescription();
        $id = 100;
        $price = 3;
        $description = 'товар 1';
        $desc->ProductDescription($id, $price, $description);
        $quantity = 7;
        $saleLineItem->SaleLineItem($desc, $quantity);
        $lineItems = array();
        $lineItems = $lineItems + array($saleLineItem);
        $SubTotal=21;
        $this->assertEquals($SubTotal, $lineItems[0]->getSubTotal());
    }

}
