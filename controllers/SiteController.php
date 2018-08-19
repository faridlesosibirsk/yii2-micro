<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\StoreController;

class SiteController extends Controller {

    private $storeController;

    public function actionIndex() {
        $this->layout = '@app/views/layouts/home';
        return $this->render('home'); /**/
    }

    public function actionStore() {
        $this->storeController = new StoreController();
        $model = $this->storeController;
        $this->layout = '@app/views/layouts/store';
        if ($model->load(Yii::$app->request->post())) {
            $this->storeController->store($model['id'], $model['quantity']);
            return $this->render('store', ['model' => $model]);
        }
        return $this->render('store', ['model' => $this->storeController,]);
    }

    public function actionLogin() {
        $this->layout = '@app/views/layouts/login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        $model->password = '';
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    public function actionLogout() {
        Yii::$app->user->logout();
        return $this->goHome();
    }

}
