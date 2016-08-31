<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\informePreventivo\InformePreventivoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="informe-preventivo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fecha_solicitud') ?>

    <?= $form->field($model, 'nombre_solicitante') ?>

    <?= $form->field($model, 'rfc') ?>

    <?= $form->field($model, 'actividad_principal') ?>

    <?php // echo $form->field($model, 'nombre_proyecto') ?>

    <?php // echo $form->field($model, 'inicio_actividad') ?>

    <?php // echo $form->field($model, 'delegacion') ?>

    <?php // echo $form->field($model, 'colonia') ?>

    <?php // echo $form->field($model, 'calle') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'codigo_postal') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'actividad_norte') ?>

    <?php // echo $form->field($model, 'actividad_sur') ?>

    <?php // echo $form->field($model, 'actividad_este') ?>

    <?php // echo $form->field($model, 'actividad_oeste') ?>

    <?php // echo $form->field($model, 'vocacion_id') ?>

    <?php // echo $form->field($model, 'energia_id') ?>

    <?php // echo $form->field($model, 'combustible_id') ?>

    <?php // echo $form->field($model, 'anexo_1') ?>

    <?php // echo $form->field($model, 'anexo_2') ?>

    <?php // echo $form->field($model, 'anexo_3') ?>

    <?php // echo $form->field($model, 'anexo_4') ?>

    <?php // echo $form->field($model, 'anexo_5') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
