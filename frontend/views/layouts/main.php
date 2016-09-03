<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Dirección de Ecología',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Inicio', 'url' => ['/site/index']];
        $menuItems[] = [
          'label' => 'Departamentos',
          'items' => [
            ['label' => 'Educación Ambiental', 'url' => ['/']],
            ['label' => 'Inspecciones y Denuncias', 'url' => ['/site/denuncias']],
            ['label' => 'Planeación y Gestión Ambiental', 'url' => ['#']],
          ],
        ];
        $menuItems[] = [
          'label' => 'Trámites',
          'items' =>[
            ['label' => 'Informe Preventivo', 'url' => ['/informe-preventivo/create']],
            ['label' => 'Emisión de ruido en la vía pública', 'url' => ['/']],
            ['label' => 'Antenas de telecomunicación', 'url' => ['/']],
            ['label' => 'Comercios y Servicios', 'url' => ['/']],
            ['label' => 'Demolición', 'url' => ['/']],
            ['label' => 'Estaciones de carburación', 'url' => ['/']],
            ['label' => 'Movimiento de tierra', 'url' => ['/']],
            ['label' => 'Obra civil para casa habitación', 'url' => ['/']],
            ['label' => 'Remoción o poda de árboles', 'url' => ['/']],
            ['label' => 'Transporte agua residual', 'url' => ['/']],
          ],
        ];
        $menuItems[] = ['label' => 'Reglamento', 'url' => ['/site/rules']];
        $menuItems[] = ['label' => 'Quienes somos', 'url' => ['/site/about']];
        //$menuItems[] = ['label' => 'Contáctenos', 'url' => ['/site/contact']];
        $menuItems[] = ['label' => 'Registrarse', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Iniciar sesión', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Inicio', 'url' => ['/site/index']];
        $menuItems[] = ['label' => 'Departamentos', 'url' => ['#']];
        $menuItems[] = [
          'label' => 'Trámites',
          'items' =>[
            ['label' => 'Informe Preventivo', 'url' => ['/informe-preventivo']],
            ['label' => 'Emisión de ruido en la vía pública', 'url' => ['#']],
            ['label' => 'Antenas de telecomunicación', 'url' => ['#']],
            ['label' => 'Comercios y Servicios', 'url' => ['#']],
            ['label' => 'Demolición', 'url' => ['#']],
            ['label' => 'Estaciones de carburación', 'url' => ['#']],
            ['label' => 'Movimiento de tierra', 'url' => ['#']],
            ['label' => 'Obra civil para casa habitación', 'url' => ['#']],
            ['label' => 'Remoción o poda de árboles', 'url' => ['#']],
            ['label' => 'Transporte agua residual', 'url' => ['#']],
          ],
        ];
        $menuItems[] = ['label' => 'Reglamento', 'url' => ['#']];
        $menuItems[] = ['label' => 'Quienes somos', 'url' => ['/site/about']];
        //$menuItems[] = ['label' => 'Contáctenos', 'url' => ['/site/contact']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Cerrar sesión (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">Carretera Transpeninsular. #6500 A, Ex Ejido Chapultepec C.P. 22785.<br />XXI Ayuntamiento Ensenada – Algunos derechos reservados &copy; 2016</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
