<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\informePreventivo\InformePreventivo */

$this->title = 'Solicitud de Informe Preventivo';
//$this->params['breadcrumbs'][] = ['label' => 'Informe Preventivos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="informe-preventivo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
