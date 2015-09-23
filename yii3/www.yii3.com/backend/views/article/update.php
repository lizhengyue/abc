<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PortalArticle */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Portal Article',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Portal Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->aid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="portal-article-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
