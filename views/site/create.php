<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Crear Articulo</h1>
<h3><?= $msg ?></h3>
<?php $form = ActiveForm::begin([
    "method" => "post",
 'enableClientValidation' => true,
]);
?>
<div class="form-group">
 <?= $form->field($model, "Nombre Articulo")->input("text") ?>   
</div>
<div class="form-group">
 <?= $form->field($model, "Cantidad")->input("text") ?>   
</div>
<div class="form-group">
 <?= $form->field($model, "Precio")->input("text") ?>   
</div> 
<?= Html::submitButton("Crear", ["class" => "btn btn-primary"]) ?>

<?php $form->end() ?>