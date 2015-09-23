<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PortalArticle */

$this->title = Yii::t('app', 'Create Portal Article');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Portal Articles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portal-article-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
