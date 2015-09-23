<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="http://golanghome.com/static/img/favicon.png" />
    <script>/* Beego Compress Powered */</script>
    <link rel="stylesheet" href="http://golanghome.com/static/css/lib.min.css?ver=1438609274" />
</head>
<body>

<?php $this->beginBody() ?>
<!--自己的头部开始-->
<div class="wrap">
    <nav id="navbar" class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        <!--    <form id="navbar-search" class="navbar-form navbar-left" role="search" action="#" method="GET">
                <div class="form-group">
                    <input class="form-control search-box" type="text" placeholder="搜索" name="q" id="st-search-input">
                </div>
            </form>-->

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php?r=article/index ">查看新闻列表</a></li>
                    <li><a href="index.php?r=article/create">发布新闻</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">新闻分类 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" target="_blank">科技</a></li>
                            <li><a href="#" target="_blank">购物</a></li>
                            <li><a href="#" target="_blank">lol</a></li>
                        </ul>
                    </li>
                </ul>
               <div class="nav navbar-nav navbar-right">

                    <?php

                    $menuItems = [
                        ['label' => '注册', 'url' => ['/site/sign-up']],
                    ];
                    if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
                    } else {
                        $menuItems[] = [
                            'label' => '退出 (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ];
                    }
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav  btn-info '],
                        'items' => $menuItems,
                    ]);

                     ?>

                  <!--  <a class="btn btn-sm btn-primary navbar-btn" style="margin-right:10px;" href="index.php">
                        <?php
                        if (Yii::$app->user->isGuest){
                            echo "登录";
                        }else{
                            echo Yii::$app->user->identity->username;
                        }
                        ?>
                        </a>-->
                </div>
            </div>
        </div>
    </nav>
<!--自己的头部结束-->

<!--    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>-->

    <div class="container">
        <!--<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?= Alert::widget(); ?>-->

        <?= $content ?>
    </div>
</div>

<!--<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>-->
<!--自己的尾部-->
 <footer id="footer">
    <div class="container">
        <table class="basic-info">
            <tbody>
            <tr>
                <td align="left">
                    &copy;&nbsp;Go友团 | <a href="/about">关于</a> | <a href="/faq">FAQ</a>
                </td>
                <td align="right"><a href="http://www.miitbeian.gov.cn/" style="color:#aaa;text-decoration:none;">沪ICP备13014075号-2</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
