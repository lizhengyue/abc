<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PortalArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '新闻列表');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portal-article-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   <!-- <p>
        <?= Html::a(Yii::t('app', 'Create Portal Article'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'aid',
            'title',
            'author',
            'uid',
           // 'url:url',
            // 'pic',
            // 'desc',
            // 'created_at',
            // 'update_at',
            // 'content:ntext',
            // 'status',
            // 'attr',
            // 'username',
            // 'cid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
