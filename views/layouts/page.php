<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <?= Html::cssFile(Url::to('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')) ?>
        <?= Html::jsFile(Url::to('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')) ?>
        <?= Html::jsFile(Url::to('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')) ?>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="container">
        <?= $content ?>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
