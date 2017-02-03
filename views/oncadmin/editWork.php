<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'title')->textInput(['value'=>$nquery->title]); ?>
<?= $form->field($model, 'text')->textarea(['rows'=>7, 'cols'=>20,'value'=>$nquery->text]); ?>
<?= $form->field($model, 'tag')->textInput(['value'=>$nquery->tag]); ?>
<?= $form->field($model, 'picture')->textInput(['value'=>$nquery->picture]); ?>
<?= $form->field($model, 'slug')->textInput(['value'=>$nquery->slug]); ?>
<?= Html::submitButton(('Submit'), ['class'=>'btn btn-success']); ?>
<?php $form = ActiveForm::end(); ?>

<?php
    if ($success){
        echo "<div class=\"alert alert-success\">";
            echo "<strong>Ура! </strong> Запись успешно изменена!!!!";
        echo "</div>";
    }
?>