<?php

use PHPUnit\Framework\TestCase;
use app\models\my\ProductDescription;

final class ProductDescriptionTest extends TestCase {

    public function testProductDescription() {

        $productDesccription = new ProductDescription();
        $id = 100;
        $price = 3;
        $description = 'товар 1';
        $productDesccription->ProductDescription($id, $price, $description);
        $this->assertEquals($id, $productDesccription->getId());
        $this->assertEquals($price, $productDesccription->getPrice());
        $this->assertEquals($description, $productDesccription->getDescription());
    }

}
