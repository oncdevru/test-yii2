<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Maintext */

$this->title = 'Create Maintext';
$this->params['breadcrumbs'][] = ['label' => 'Maintexts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maintext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
