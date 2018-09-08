<?php

namespace app\models\core;

interface InterfaceProductDescription {

    public function __construct(int $id, int $price, string $description);

    public function getId();

    public function getPrice();

    public function getDescription();
}

final class ProductDescription implements InterfaceProductDescription {

    private $id;
    private $price;
    private $description;

    public function __construct(int $id, int $price, string $description) {
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
