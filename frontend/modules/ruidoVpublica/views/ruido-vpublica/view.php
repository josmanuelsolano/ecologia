<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ruidoVpublica\RuidoVpublica */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ruido Vpublicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruido-vpublica-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fecha_solicitud',
            'nombre_solicitante',
            'delegacion',
            'colonia',
            'calle',
            'numero',
            'codigo_postal',
            'telefono_solicitante',
            'inicio_actividades',
            'fin_actividades',
            'horas_solicitadas',
            'actividad_norte',
            'actividad_sur',
            'actividad_este',
            'actvidad_oeste',
            'vocacion_id',
            'vialidad_id',
        ],
    ]) ?>

</div>
