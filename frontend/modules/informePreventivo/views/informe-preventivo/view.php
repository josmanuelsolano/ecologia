<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\informePreventivo\InformePreventivo */

$this->title = $model->id;
?>
<div class="informe-preventivo-view">

    <h1>Información capturada</h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fecha_solicitud',
            'nombre_solicitante',
            'rfc',
            'actividad_principal',
            'nombre_proyecto',
            'inicio_actividad',
            'delegacion',
            'colonia',
            'calle',
            'numero',
            'codigo_postal',
            'telefono',
            'actividad_norte',
            'actividad_sur',
            'actividad_este',
            'actividad_oeste',
            'vocacion_id',
            'energia_id',
            'combustible_id',
            'anexo_1',
            'anexo_2',
            'anexo_3',
            'anexo_4',
            'anexo_5',
        ],
    ]) ?>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

    </p>

</div>
