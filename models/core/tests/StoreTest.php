<?php

use PHPUnit\Framework\TestCase;
use app\models\my\Register;
use app\models\my\ProductCatalog;
use app\models\my\Store;

//require_once '../../models/my/Register.php';
//require_once '../../models/my/Store.php';

final class StoreTest extends TestCase {

    function testGetRegister() {
        $store = new Store();
        $store->getRegister();
        $this->assertEquals(1, 1);
    }

}
