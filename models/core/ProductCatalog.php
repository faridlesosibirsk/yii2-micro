<?php

namespace app\models\my;

use app\models\my\ProductDescription;

// TODO //use yii\db\ActiveRecord;

class ProductCatalog {// TODO //extends ActiveRecord

    private $descriptions;

    public function __construct() {
        $this->descriptions = array();
        $this->productCatalog();
    }

    public function productCatalog() {
        $id1 = 100;
        $id2 = 200;
        $price = 3;
        $desc1 = new ProductDescription();
        $desc1->ProductDescription($id1, $price, 'товар 1');
        $this->descriptions = array($id1 => $desc1);
        $desc2 = new ProductDescription();
        $desc2->ProductDescription($id2, $price, 'товар 2');
        $this->descriptions = $this->descriptions + array($id2 => $desc2);
    }

    public function getProductDescription($id) {
        return $this->descriptions[$id];
    }

}
