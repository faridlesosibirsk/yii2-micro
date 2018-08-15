<?php

use PHPUnit\Framework\TestCase;
use app\models\my\ProductCatalog;
use app\models\my\ProductDescription;

final class ProductCatalogTest extends TestCase {

    private $desc1;
    private $desc2;

    public function testProductCatalog() {
        $id1 = 100;
        $id2 = 200;
        $price = 3;
        $this->desc1 = new ProductDescription();
        $this->desc1->ProductDescription($id1, $price, 'товар 1');
        $this->assertNotNull($this->desc1);
        $this->desc2 = new ProductCatalog();
        $this->desc2->productCatalog();
        $this->assertNotNull($this->desc2->getProductDescription($id1));
        $this->assertNotEquals($this->desc1, $this->desc2->getProductDescription($id2));
        $this->assertEquals($this->desc1, $this->desc2->getProductDescription($id1));
    }

}
