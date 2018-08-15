<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\top;

class PageController extends Controller {

    public function actionIndex() {
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
        $this->layout = '@app/views/layouts/my';
        return $this->render('index', [
                    'model' => $model,
        ]);
    }

}
