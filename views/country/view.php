<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Countries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="w3-container">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->code], ['class' => 'w3-button w3-blue']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->code], [
            'class' => 'w3-button w3-red',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'options' => ['class' => 'w3-table-all w3-hoverable'],
        'attributes' => [
            //'code',
            [
                'label' => 'code',
                'attribute' => 'code',
            ],
            //'name',
            [
                'label' => 'name',
                'attribute' => 'name',
            ],
            //'population',
            [
                'label' => 'population',
                'attribute' => 'population',
            ],
        ],
    ])
    ?>

</div>
