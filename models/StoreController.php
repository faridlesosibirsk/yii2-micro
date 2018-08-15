<?php

namespace app\models;

use Yii;
use app\models\core\Store;

class StoreController {

    public function model() {
        $session = Yii::$app->session;
        
        if ($session->isActive) {
            $store = $session->get('store');
        } else {
            $session->open();
            $store = new Store();
            $session->set('store', $store);
        }
         
        /*
        try {
            $store = $session->get('store');
        } catch (Exception $ex) {
            $session->open();
            $store = new Store();
            $session->set('store', $store);
        }*/
        $session->set('store', $store);
        return $store;
    }

}
