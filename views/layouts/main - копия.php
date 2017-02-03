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

<div class = "global_bl">
        <div class = "left_col">
            <img href="images/spacer.png">            
            <a href="/" class = "menu" id = "about"><div class="mText">Главная</div></a>
            <a href="/works" class = "menu"><div class="mText">Работы</div></a>
            <a href="/arts" class = "menu"><div class="mText">Arts</div></a>
            <a href="/blog" class = "menu"><div class="mText">Блог</div></a>
            <div class = "menua"><img href="images/spacer.png"></div>                        
        </div>
            <div class = "content_col">        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?> 
        </div>      
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
