<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '注册';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div id="content" class="col-md-8 col-md-offset-2">
        <div class="box">
            <div class="cell last slim">
                <div class="row">
                    <div class="col-md-6 auth-page">
                        <h3 class="title">
                            <span class="glyphicon glyphicon-user"></span>
                            <?= Html::encode($this->title) ?>
                        </h3>
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            <input type="hidden" name="_xsrf" value="RbtidwGT2MAd9MFgz9bVQ1lSH0P1hhOC"/><input type="hidden" name="_once" value="SyvdnbWdEg">
                            <div class="form-group">
                                <?= $form->field($model, 'username') ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'email') ?>
                            </div>

                            <div class="form-group">
                                <?= $form->field($model, 'password')->passwordInput() ?>
                          </div>
                           <div class="form-group">
                               <?= $form->field($model, 'confirmPassword')->passwordInput() ?>
                            </div>
                           <div class="form-group">
                                   <?= Html::submitButton('注册', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>

                    <div class="col-md-6 auth-page">
                        <div class="auth-page">
                            <h3 class="title">
                                <span class="glyphicon glyphicon-question-sign"></span> 帮助
                            </h3>
                            <p class="well">
                                已经注册帐户的用户，请直接登录。
                            </p>
                            <p>
                                <a href="index.php?r=site%2Flogin" class="btn btn-default">现在登录&nbsp;&nbsp;<span class="glyphicon glyphicon-circle-arrow-right"></span></a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
