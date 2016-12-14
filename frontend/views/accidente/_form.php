<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Accidente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accidente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_reg')->textInput() ?>

    <?= $form->field($model, 'fecha_acc')->textInput() ?>

    <?= $form->field($model, 'clima')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'factor_riesgo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'severidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitud')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seguro')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
