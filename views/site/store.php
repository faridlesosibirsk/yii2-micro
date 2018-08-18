<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\StoreController */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Store';
?>
<div class="w3-row">
    <div class="w3-half w3-padding"><div class="w3-border w3-container">
            <h2 class="w3-text-blue">Register</h2>
            <table class="w3-table w3-bordered">
                <tr>
                    <th>Total Sale</th>
                    <th style="text-align:right"><?= $model['total']; ?></th></tr>
            </table>
            <p>&nbsp;</p></div></div>
    <div class="w3-half w3-padding"><div class="w3-card w3-container">
            <h2 class="w3-text-blue">Catalog</h2>
            <p>Use any ID 100 or 200 .</p>
            <?php $form = ActiveForm::begin(['id' => 'store-controller', 'options' => ['class' => 'form-horizontal'],]) ?>
            <?= $form->field($model, 'id', ['template' => '<div>{label}</div><div>{input}</div><div>{error}</div>', 'inputOptions' => ['class' => 'w3-input w3-border'], 'labelOptions' => ['class' => 'w3-text-blue']]) ?>
            <?= $form->field($model, 'quantity', ['template' => '<div>{label}</div><div>{input}</div><div>{error}</div>', 'inputOptions' => ['class' => 'w3-input w3-border'], 'labelOptions' => ['class' => 'w3-text-blue']]) ?>
            <div>
                <?= Html::submitButton('enter Item', ['class' => 'w3-button w3-hover-red w3-blue']) ?></div>
            <p></p>
            <?php ActiveForm::end() ?></div></div></div>
