<?php

use PHPUnit\Framework\TestCase;
use app\models\my\Payment;

final class PaymentTest extends TestCase {

    public function testPayment() {

        $payment = new Payment();
        $cashTendered = 10;
        $payment->Payment($cashTendered);
        $this->assertEquals($cashTendered, $payment->getAmount());
    }

}
