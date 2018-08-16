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
        <style>
            body, html {
                height: 100%;
                font-family: "Inconsolata", sans-serif;
            }
            .bgimg {
                background-position: center;
                background-size: cover;
                background-image: url("image/coffeehouse.jpg");
                min-height: 75%;
            }
            .menu {
                display: none;
            }
        </style>
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="w3-bar w3-black">
            <div href="" class="w3-bar-item w3-red">Home</div>
            <a href="http://127.0.0.1/web/index.php?r=site/store" class="w3-bar-item w3-button w3-hover-red">Store</a>
        </div> 
        <!-- Header with image -->
        <header class="bgimg w3-display-container w3-grayscale-min" id="home">
            <div class="w3-display-middle w3-center">
                <span class="w3-text-white" style="font-size:90px">
                    POSNextGen
                </span>
            </div>
        </header>
        <?= $content ?>
        <footer>
        </footer>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>