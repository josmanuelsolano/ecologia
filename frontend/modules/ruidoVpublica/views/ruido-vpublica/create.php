<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ruidoVpublica\RuidoVpublica */

$this->title = 'Solicitud de emisión de ruido en vía pública';
?>
<div class="ruido-vpublica-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
