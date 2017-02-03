<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
</head>
<body>
<?php $this->beginBody() ?>
<div class="admincont">
    <div class="row"><?= Html::a("Выход", ['/site/logout'], [
    'data' => ['method' => 'post'],
    'class' => 'white text-center',
]);?></div>
    <div class="row">
        <div class="col-lg-1">
            <nav class="navbar navbar-light bg-faded">
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/oncadmin">Меню <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/oncadmin/maintext">Приветствие</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/oncadmin/works">Работы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/oncadmin/arts">ARTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/oncadmin/blog">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">На сайт</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-11"><?= $content ?></div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>