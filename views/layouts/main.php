<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php

    NavBar::begin([
    'brandLabel' => 'ONCdev.ru',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
    'class' => 'navbar-default'
    ]
    ]);
    echo Nav::widget([
    'options' => [
    'class' => 'navbar-nav navbar-right'
    ],
    'items' => [
    [
    'label' => 'Home',
    'url' => [
        Yii::$app->homeUrl
    ]
    ],
    [
    'label' => 'Works',
    'url' => [
    '/works'
    ]
    ],
    [
    'label' => 'Arts',
    'url' => [
    '/arts'
    ]
    ],
        [
            'label' => 'Blog',
            'url' => [
                '/blog'
            ]
        ],

    ]
    ]);
    NavBar::end();
?>

   <div class="container">


                <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
   </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
