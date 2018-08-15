<?php

namespace app\models;

use Yii;
use app\models\top;

class adapter {

    public function model() {
        $session = Yii::$app->session;
        /*
        if ($session->isActive) {
            $model = $session->get('model');
        } else {
            $session->open();
            $model = new top();
            $session->set('model', $model);
        }
         */
        
        try {
            $model = $session->get('model');
        } catch (Exception $ex) {
            $session->open();
            $model = new top();
            $session->set('model', $model);
        }
        $model->count = $model->count + 1;
        $session->set('model', $model);
        return $model;
    }

}
