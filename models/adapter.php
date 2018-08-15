<?php

namespace app\models;

use Yii;
use app\models\top;

class adapter {

    public function model() {
        $session = Yii::$app->session;
        try {
            $model = $session->get('model');
        } catch (Exception $ex) {
            $session->open();
            $model = new top();
            set('model', $model);
        }
        $model->count = $model->count + 1;
        $session->set('model', $model);
        return $model;
    }

}
