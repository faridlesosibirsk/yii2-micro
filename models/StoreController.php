<?php

namespace app\models;

use Yii; //$session = Yii::$app->session;
use yii\base\Model;
use app\models\core\Store;

class StoreController extends Model {

    private $store;
    private $cansel;
    private $enter;
    private $get;
    public $id;
    public $quantity;
    public $total;

    public function rules() {
        return [
            [['id', 'quantity'], 'required']
        ];
    }

    public function __construct() {
        parent::__construct();
        $this->store = new Store();
    }

    public function store($id, $quantity) {
        $this->store->getRegister()->makeNewSale();
        $this->store->getRegister()->enterItem($id, $quantity);
        //return $this->store->getRegister()->getTotalSale();
        $this->total = $this->store->getRegister()->getTotalSale();
    }

    public function getTotal() {/*
        if (assert($this->store)) {
            return 0;
        } else {
            return $this->store->getRegister()->getTotalSale();
        }
        */
    }

    public function cansel() {
        return $this->cansel;
    }

    public function enter() {
        return $this->enter;
    }

    public function get() {
        return $this->get;
    }

}
