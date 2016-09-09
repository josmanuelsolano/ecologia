<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ruidoVpublica\RuidoVpublica */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ruido-vpublica-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fecha_solicitud')->textInput() ?>

    <?= $form->field($model, 'nombre_solicitante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delegacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colonia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'codigo_postal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono_solicitante')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inicio_actividades')->textInput() ?>

    <?= $form->field($model, 'fin_actividades')->textInput() ?>

    <?= $form->field($model, 'horas_solicitadas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actividad_norte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actividad_sur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actividad_este')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actvidad_oeste')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vocacion_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vialidad_id')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
