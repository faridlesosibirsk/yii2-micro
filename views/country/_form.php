<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Country */
/* @var $form yii\widgets\ActiveForm */
?>

<?php
$form = ActiveForm::begin([
            'options' => ['class' => 'w3-container w3-margin'],
        ]);
?>
<p>
<label class="w3-text-blue"><b>code</b></label>
<?= $form->field($model, 'code')->textInput(['class' => 'w3-input w3-border']) ?></p><p>
<label class="w3-text-blue"><b>name</b></label>
        <?= $form->field($model, 'name')->textInput(['class' => 'w3-input w3-border']) ?></p><p>
<label class="w3-text-blue"><b>population</b></label>
<?= $form->field($model, 'population')->textInput(['class' => 'w3-input w3-border']) ?></p>

<p>
    <?= Html::submitButton('Save', ['class' => 'w3-btn w3-blue']) ?>
</p>

<?php ActiveForm::end(); ?>

