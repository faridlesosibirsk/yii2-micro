<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\StoreController;

class SiteController extends Controller {

    private $storeController;
    private $store;
    private $cansel;
    private $enter;
    private $get;

    public function actionIndex() {
        /* $storeController = new StoreController();
          $store = $storeController->model(); */
        $this->layout = '@app/views/layouts/home';
        return $this->render('home'); /**/
    }

    public function actionStore() {
        $this->storeController = new StoreController();
        //$this->model = new StoreController();
        $model = $this->storeController;
        $this->layout = '@app/views/layouts/store';
        if ($model->load(Yii::$app->request->post())) {
            //var_dump($model['id']);
            $e=$this->storeController->store($model['id'], $model['quantity']);
            var_dump($e);
            return $this->render('store', ['model' => $model,]);
        }
        return $this->render('store', [
                    'model' => $this->storeController,
                        //'model' => $this->model,
        ]);
    }

    public function actionCansel() {
        $this->storeController = new StoreController();
        $this->layout = '@app/views/layouts/store';
        $this->cansel = $this->storeController->cansel();
        return $this->render('store', [
                    'model' => $this->cansel,
        ]);
    }

    public function actionEnter() {
        $this->storeController = new StoreController();
        $this->enter = $this->storeController->enter();
        $this->layout = '@app/views/layouts/store';
        return $this->render('store', [
                    'model' => $this->enter,
        ]);
    }

    public function actionGet() {
        /*$this->storeController = new StoreController();
        $this->get = $this->storeController->get();
        $this->layout = '@app/views/layouts/store';
        return $this->render('store', [
                    'model' => $this->get,
        ]);*/
     return $this->actionStore();
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        $this->layout = '@app/views/layouts/store';
        $model = new StoreController();
        if ($model->load(Yii::$app->request->post())) {
            //return $this->goBack();
            var_dump($model['id']);
            return $this->render('store', ['model' => $model,]);
        }
        /*
          return $this->render('store', [
          'model' => $model,
          ]); */
        //return $this->render('store', compact('model'));
        var_dump($model['id']);
        return $this->render('store', ['model' => $model,]);
    }

}
