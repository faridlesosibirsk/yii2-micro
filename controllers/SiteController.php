<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller {

    public function actionIndex() {
        $this->layout = '@app/views/layouts/home';
        return $this->render('home'); /**/
    }

}
