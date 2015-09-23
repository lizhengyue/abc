<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <!--<p>Please fill out the following fields to login:</p>
    <div class="row">
        <div class="col-lg-3">
           <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                <div class="form-group">
                    <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>**/
        </div>
    </div>
</div>-->




<div id="main" class="container">
    <div class="row">
        <div id="content" class="col-md-8 col-md-offset-2">
            <div class="box">
                <div class="cell">
                    <div class="row">
                        <div class="col-md-6 auth-page">
                            <h3 class="title">
                                <span class="glyphicon glyphicon-user"></span> 登录
                            </h3>
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                                <input type="hidden" name="_xsrf" value="RbtidwGT2MAd9MFgz9bVQ1lSH0P1hhOC"/><input type="hidden" name="_once" value="SyvdnbWdEg">
                                <div class="form-group">
                                    <?= $form->field($model, 'username') ?>

                                </div>
                              <div class="form-group">
                                  <?= $form->field($model, 'password')->passwordInput() ?>
                          </div>
                               <div class="form-group">
                                   <?= $form->field($model, 'rememberMe')->checkbox() ?>
                                </div>
                            <div class="form-group">
                            <?= Html::submitButton('登录', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                           </div>
                                <a href="#" class="pull-right"><span class="glyphicon glyphicon-question-sign"></span> 忘记密码</a>
                            </form>
                        </div>

                        <div class="col-md-6 auth-page">
                            <div class="auth-page">
                                <h3 class="title">
                                    <span class="glyphicon glyphicon-question-sign"></span> 帮助
                                </h3>
                                <p class="well">
                                    如果您还没有注册帐户的话，请先注册。
                                </p>
                                <p>
                                    <a href="index.php?r=site%2Fsign-up" class="btn btn-default">立即注册&nbsp;&nbsp;<i class="icon-chevron-sign-right"></i></a>
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
