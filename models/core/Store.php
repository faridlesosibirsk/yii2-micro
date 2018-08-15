<?php

namespace app\models\core;

use app\models\core\Register;
use app\models\core\ProductCatalog;

class Store {

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
