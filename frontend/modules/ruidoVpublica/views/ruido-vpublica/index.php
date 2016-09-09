<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ruidoVpublica\RuidoVpublicaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ruido Vpublicas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruido-vpublica-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ruido Vpublica', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'fecha_solicitud',
            'nombre_solicitante',
            'delegacion',
            'colonia',
            // 'calle',
            // 'numero',
            // 'codigo_postal',
            // 'telefono_solicitante',
            // 'inicio_actividades',
            // 'fin_actividades',
            // 'horas_solicitadas',
            // 'actividad_norte',
            // 'actividad_sur',
            // 'actividad_este',
            // 'actvidad_oeste',
            // 'vocacion_id',
            // 'vialidad_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
