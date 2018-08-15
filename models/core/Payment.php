<?php

namespace app\models\my;

class Payment {

    private $amount;

    public function Payment($cashTendered) {

        $this->amount = $cashTendered;
    }

    public function getAmount() {
        return $this->amount;
    }

}
