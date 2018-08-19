<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="w3-container">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Country', ['create'], ['class' => 'w3-button w3-green']) ?>
    </p>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'code',
            'name',
            'population',
            ['class' => 'yii\grid\ActionColumn',
                'header' => 'Действия',
                'headerOptions' => ['width' => '120'],
                'template' => '{view} {update} {delete} {link}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        return Html::a(
                            '<span class="w3-badge w3-green">u</span>', $url);
                    },
                    'view' => function ($url, $model) {
                        return Html::a(
                            '<span class="w3-badge w3-green">r</span>', $url);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a(
                            '<span class="w3-badge w3-green">d</span>', $url);
                    },         
                ],
            ],
        ],
        'tableOptions' => [
            'class' => 'w3-table-all w3-hoverable'
        ],
    ]);
    ?>
</div>
