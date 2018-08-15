<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\StoreController;

class SiteController extends Controller {

    public function actionIndex() {
        $storeController = new StoreController();
        $store = $storeController->model();
        $this->layout = '@app/views/layouts/system';
        return $this->render('index', [
                    'store' => $store,
        ]);
    }

}
