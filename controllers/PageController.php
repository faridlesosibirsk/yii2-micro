<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\top;

class PageController extends Controller {

    public function actionIndex() {
        $model = new top();
        $this->layout = '@app/views/layouts/top';
        return $this->render('index', [
                    'model' => $model,
        ]);
    }

}
