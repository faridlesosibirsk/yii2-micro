<?php

namespace app\models\my;

use app\models\my\Register;
use app\models\my\ProductCatalog;

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
