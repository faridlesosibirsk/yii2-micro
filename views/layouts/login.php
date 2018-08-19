<?php

use yii\helpers\Html;

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

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="w3-bar w3-black">
            <a href="http://127.0.0.1/web/" class="w3-bar-item w3-button w3-hover-red">Home</a>
            <a href="http://127.0.0.1/web/index.php?r=site/store" class="w3-bar-item w3-button w3-hover-red">Store</a>
        </div> 
        <!-- Header with image -->
        <header>
        </header>
        <?= $content ?>
        <footer>
        </footer>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>