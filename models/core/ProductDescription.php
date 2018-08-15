<?php

namespace app\models\my;

class ProductDescription {

    private $id;
    private $price;
    private $description;

    public function ProductDescription($id, $price, $description) {
        $this->id = $id;
        $this->price = $price;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

}
