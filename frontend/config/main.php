<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-practical-a-frontend',
    'language' => 'es-MX',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                //INFORME PREVENTIVO
                'informe-preventivo' => '/informe-preventivo/informe-preventivo/index',
                'informe-preventivo/create' => 'informe-preventivo/informe-preventivo/create',
                'informe-preventivo/view/<id:\d+>' => 'informe-preventivo/informe-preventivo/view',
                'informe-preventivo/update/<id:\d+>' => 'informe-preventivo/informe-preventivo/update',

            ],

        ],


    ],
    'modules' => [
      'informe-preventivo' => [
          'class' => 'frontend\modules\informePreventivo\InformePreventivo',
      ],
    ],
    'params' => $params,
];
