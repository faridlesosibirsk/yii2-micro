<?php

namespace app\models\core;

use app\models\core\ProductDescription;

// TODO //use yii\db\ActiveRecord;

interface InterfaceProductCatalog {

    public function __construct();

    public function productCatalog();

    public function getProductDescription(int $id);
}

final class ProductCatalog implements InterfaceProductCatalog {// TODO //extends ActiveRecord

    private $descriptions;

    public function __construct() {
        $this->descriptions = array();
        $this->productCatalog();
    }

    public function productCatalog() {
        $id1 = 100;
        $id2 = 200;
        $price = 3;
        //$desc1 = new ProductDescription();
        $desc1 = new ProductDescription($id1, $price, 'товар 1');
        $this->descriptions = array($id1 => $desc1);
        //$desc2 = new ProductDescription();
        $desc2 = new ProductDescription($id2, $price, 'товар 2');
        $this->descriptions = $this->descriptions + array($id2 => $desc2);
    }

    public function getProductDescription(int $id) {
        return $this->descriptions[$id];
    }

}
