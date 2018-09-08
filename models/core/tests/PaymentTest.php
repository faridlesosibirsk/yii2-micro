<?php

use PHPUnit\Framework\TestCase;
use app\models\core\Payment;

final class PaymentTest extends TestCase {

    public function testPayment() {

        $cashTendered = 10;
        $payment = new Payment($cashTendered);
        $this->assertEquals($cashTendered, $payment->getAmount());
    }

}
