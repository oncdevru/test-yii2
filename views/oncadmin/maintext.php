<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'text')->textarea(['rows'=>7, 'cols'=>20,'value'=>$query->text]); ?>
<?= $form->field($model, 'quote')->textarea(['rows'=>7, 'cols'=>20,'value'=>$query->quote]); ?>
<?= $form->field($model, 'author')->textInput(['value'=>$query->author]); ?>
<?= Html::submitButton(('Submit'), ['class'=>'btn btn-success']); ?>
<?php $form = ActiveForm::end(); ?>