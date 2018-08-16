<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\StoreController;

class SiteController extends Controller {

    public function actionIndex() {
        /*$storeController = new StoreController();
        $store = $storeController->model();*/
        $this->layout = '@app/views/layouts/home';
        return $this->render('home');
    }

    public function actionStore() {
        $storeController = new StoreController();
        $store = $storeController->model();
        $this->layout = '@app/views/layouts/store';
        return $this->render('store', [
                    'store' => $store,
        ]);
    }

}
