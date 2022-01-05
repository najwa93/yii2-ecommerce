<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'Login';
?>
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            <?php $form = ActiveForm::begin(['id' => 'login-form','options' => ['class' => 'user']]); ?>
                <div class="form-group">
                    <?= $form->field($model, 'username',
                        ['inputOptions' => ['class' => 'form-control form-control-user','placeholder' => 'Enter you username']])
                        ->textInput(['autofocus' => true]) ?>

                </div>
                <div class="form-group">
                    <?= $form->field($model, 'password',
                        ['inputOptions' =>['class' => 'form-control form-control-user','placeholder' => 'Enter you password']])
                        ->passwordInput() ?>
                </div>
                <div class="form-group">
                    <?= $form->field($model, 'rememberMe',
                        ['inputOptions' => ['class' => 'form-controlcustom-control-input']])
                        ->checkbox() ?>
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-user', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            <hr>
            <div class="text-center">
                <a class="small" href="<?= Url::to(['site/forgot-password']) ?>">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>