<?php

namespace app\models\core;

interface InterfacePayment {

    public function __construct(int $cashTendered);

    public function getAmount();
}

final class Payment implements InterfacePayment {

    private $amount;

    public function __construct(int $cashTendered) {
        $this->amount = $cashTendered;
    }

    public function getAmount() {
        return $this->amount;
    }

}
