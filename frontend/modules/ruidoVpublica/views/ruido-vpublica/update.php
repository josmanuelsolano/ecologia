<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ruidoVpublica\RuidoVpublica */

$this->title = 'Update Ruido Vpublica: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ruido Vpublicas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ruido-vpublica-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
