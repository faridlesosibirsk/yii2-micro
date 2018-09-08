<?php

namespace app\models\core;

use app\models\core\Register;
use app\models\core\ProductCatalog;

interface InterfaceStore {

    public function __construct();

    public function getRegister();
}

final class Store implements InterfaceStore {

    private $catalog;
    private $register;

    public function __construct() {
        $this->catalog = new ProductCatalog();
        $this->register = new Register($this->catalog);
    }

    public function getRegister() {
        return $this->register;
    }

}
