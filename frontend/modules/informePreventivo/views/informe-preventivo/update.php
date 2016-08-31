<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\informePreventivo\InformePreventivo */

$this->title = 'Actualizar Informe Preventivo: ' . $model->id;
?>
<div class="informe-preventivo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
