<?php

namespace app\models\core;

class Payment {

    private $amount;

    public function Payment($cashTendered) {

        $this->amount = $cashTendered;
    }

    public function getAmount() {
        return $this->amount;
    }

}
