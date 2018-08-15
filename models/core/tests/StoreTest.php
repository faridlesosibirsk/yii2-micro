<?php

use PHPUnit\Framework\TestCase;
use app\models\core\Register;
use app\models\core\ProductCatalog;
use app\models\core\Store;

//require_once '../../models/my/Register.php';
//require_once '../../models/my/Store.php';

final class StoreTest extends TestCase {

    function testGetRegister() {
        $store = new Store();
        $store->getRegister();
        $this->assertEquals(1, 1);
    }

}
