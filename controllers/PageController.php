<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Adapter;

class PageController extends Controller {
    
    public function actionIndex() {
        
        $adapter = new adapter();
        $model = $adapter->model();
        $this->layout = '@app/views/layouts/my';
        return $this->render('index', [
                    'model' => $model,
        ]);
    }
        //return 'page';
        //$this->layout = '@app/views/layouts/my';
        //return $this->render('index');
    

}
