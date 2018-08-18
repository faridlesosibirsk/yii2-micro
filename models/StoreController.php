<?php

namespace app\models;

use Yii; //$session = Yii::$app->session;
use yii\base\Model;
use app\models\core\Store;

class StoreController extends Model {

    private $store;
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
        $this->total = $this->store->getRegister()->getTotalSale();
    }

}
