<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\informePreventivo\InformePreventivoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Informe Preventivos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informe-preventivo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'fecha_solicitud',
            'nombre_solicitante',
            'rfc',
            'actividad_principal',
            // 'nombre_proyecto',
            // 'inicio_actividad',
            // 'delegacion',
            // 'colonia',
            // 'calle',
            // 'numero',
            // 'codigo_postal',
            // 'telefono',
            // 'actividad_norte',
            // 'actividad_sur',
            // 'actividad_este',
            // 'actividad_oeste',
            // 'vocacion_id',
            // 'energia_id',
            // 'combustible_id',
            // 'anexo_1',
            // 'anexo_2',
            // 'anexo_3',
            // 'anexo_4',
            // 'anexo_5',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <p>
        <!--<?= Html::a('Create Informe Preventivo', ['create'], ['class' => 'btn btn-success']) ?>-->
    </p>
</div>
