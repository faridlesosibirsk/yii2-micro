<?php

namespace app\models\core;

use app\models\core\SalesLineItem;
use app\models\core\Payment;

//use app\models\core\ProductDescription;
//require_once '../models/my/Payment.php';

interface InterfaceSale {

    public function __construct();

    public function getBalance();

    public function becomeComplete();

    public function isComplete();

    public function makeLineItem(InterfaceProductDescription $desc, int $quantity);

    public function getTotal();

    public function makePayment(int $cashTendered);
}

final class Sale implements InterfaceSale {

    private $lineItems; //TODO return sale
    //private $date;
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

    public function makeLineItem(InterfaceProductDescription $desc, int $quantity) { //TODO return sale
        $saleLineItem = new SalesLineItem($desc, $quantity);
        //$saleLineItem->SaleLineItem($desc, $quantity);
        $this->lineItems = $this->lineItems + array($saleLineItem);
    }

    public function getTotal() {
        $total = 0;
        $subTotal = 0;
        for ($i = 0; $i <= count($this->lineItems) - 1; $i++) {
            $subTotal = $this->lineItems[$i]->getSubTotal();
            $total = $total + $subTotal;
        }
        return $total;
    }

    public function makePayment(int $cashTendered) {
        $this->payment = new Payment($cashTendered);
    }

}
