<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="w3-container">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php
    $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    'labelOptions' => ['class' => 'w3-container'],
                ],
    ]);
    ?>

    <?=
    $form->field($model, 'username', [
        'template' => '<div>{label}</div><div>{input}</div><div>{error}</div>',
        'inputOptions' => ['class' => 'w3-input w3-border'],
        'labelOptions' => ['class' => 'w3-text-blue']])->textInput(['autofocus' => true])
    ?>

    <?=
    $form->field($model, 'password', [
        'template' => '<div>{label}</div><div>{input}</div><div>{error}</div>',
        'inputOptions' => ['class' => 'w3-input w3-border'],
        'labelOptions' => ['class' => 'w3-text-blue']])->passwordInput()
    ?>

    <?=
    $form->field($model, 'rememberMe')->checkbox([
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'class' => 'w3-check',
        ])
    ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'w3-btn w3-blue', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>