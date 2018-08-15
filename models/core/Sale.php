<?php

namespace app\models\core;

use app\models\core\SalesLineItem;
use app\models\core\Payment;
use app\models\core\ProductDescription;

//require_once '../models/my/Payment.php';

class Sale {

    private $lineItems;
    private $date;
    private $complete;
    private $payment;

    public function __construct() {
        $this->lineItems = array();
        $this->complete = false;
        //$this->payment = new Payment();
    }

    public function getBalance() {
        return $this->payment->getAmount() - $this->getTotal();
    }

    public function becomeComplete() {
        $this->complete = true;
    }

    public function isComplete() {
        return $this->complete;
    }

    public function makeLineItem($desc, $quantity) {
        $saleLineItem = new SalesLineItem();
        $saleLineItem->SaleLineItem($desc, $quantity);
        $this->lineItems = $this->lineItems + array($saleLineItem);
    }

    public function getTotal() { 
        $total = 0;
        $subTotal = 0;
        for ($i = 0; $i <= count($this->lineItems)-1; $i++) {
            $subTotal = $this->lineItems[$i]->getSubTotal();
            $total = $total + $subTotal;
        }
        return $total;
    }

    public function makePayment($cashTendered) {
        $this->payment = new Payment();
        $this->payment->Payment($cashTendered);
    }

}
