<?php

use PHPUnit\Framework\TestCase;
use app\models\my\Sale;
use app\models\my\ProductCatalog;
use app\models\my\ProductDescription;
use app\models\my\Register;

//require_once '../../models/my/Register.php';

final class RegisterTest extends TestCase {

    function testEndSale() {
        
        $catalog = new ProductCatalog();
        $regiter = new Register($catalog);
        $regiter->makeNewSale();
        $regiter->getTotalSale();
        $regiter->endSale();

        $currentSale = new Sale();
        $this->assertEquals($currentSale->isComplete(), FALSE);
        $currentSale->becomeComplete();
        $this->assertEquals($currentSale->isComplete(), TRUE);
    }

    function testEnterItem() {
        $catalog = new ProductCatalog();
        //$catalog->__construct($catalog);
        $regiter = new Register($catalog);
        //$regiter->__construct($catalog);
        $regiter->makeNewSale();
        $id = 100;
        $quantity = 7;
        $regiter->enterItem($id, $quantity);
        $this->assertEquals(1, 1);
    }

}
