<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ruidoVpublica\RuidoVpublicaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ruido-vpublica-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fecha_solicitud') ?>

    <?= $form->field($model, 'nombre_solicitante') ?>

    <?= $form->field($model, 'delegacion') ?>

    <?= $form->field($model, 'colonia') ?>

    <?php // echo $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'codigo_postal') ?>

    <?php // echo $form->field($model, 'telefono_solicitante') ?>

    <?php // echo $form->field($model, 'inicio_actividades') ?>

    <?php // echo $form->field($model, 'fin_actividades') ?>

    <?php // echo $form->field($model, 'horas_solicitadas') ?>

    <?php // echo $form->field($model, 'actividad_norte') ?>

    <?php // echo $form->field($model, 'actividad_sur') ?>

    <?php // echo $form->field($model, 'actividad_este') ?>

    <?php // echo $form->field($model, 'actvidad_oeste') ?>

    <?php // echo $form->field($model, 'vocacion_id') ?>

    <?php // echo $form->field($model, 'vialidad_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
