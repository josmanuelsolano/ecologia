<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
  <?php
  echo yii\bootstrap\Carousel::widget([
  'items' => [
      [
          'content' => '<img src="/ecologia/frontend/web/img/img1.jpg" height="600px" width="1200px"/>',
          'caption' => '<h3 class="text-left">Feria de servicios, Cañón Buena Vista</h3><p class="text-left">El pasado 3 de febrero se realizo el evento de feria de servicios...</p>',
          'options' => [
            'style' => [
              'width: 1200px; height: 600px;'
            ],
          ],
      ],
      [
          'content' => '<img src="/ecologia/frontend/web/img/img2.jpg" height="600px" width="1200px"/>',
          'caption' => '<h3 class="text-left">Jornada "Por mi comunidad"</h3><p class="text-left">El día 13 de enero del presente año se impartió un taller...</p>',
          'options' => [
            'style' => [
              'width: 1200px; height: 600px;'
            ],
          ],
      ],
      [
          'content' => '<img src="/ecologia/frontend/web/img/img3.jpg" height="600px" width="1200px"/>',
          'caption' => '<h3 class="text-left">Firma del convenio con CANIRAC y Negocio ECO Responsable</h3><p class="text-left">El pasado 5 de noviembre del 2015 , se llevo a cabo la firma del convenio..,</p>',
          'options' => [
            'style' => [
              'width: 1200px; height: 600px;'
            ],
          ],
      ],
      [
          'content' => '<img src="/ecologia/frontend/web/img/img4.jpg" height="600px" width="1200px"/>',
          'caption' => '<h3 class="text-left">“El Cielo”, primer Negocio Eco Responsable.</h3><p class="text-left">El día 30 de agosto se llevo a cabo la firma del primer certificado...</p>',
          'options' => [
            'style' => [
              'width: 1200px; height: 600px;'
            ],
          ],
      ],
      [
          'content' => '<img src="/ecologia/frontend/web/img/img5.jpg" height="600px" width="1200px"/>',
          'caption' => '<h3 class="text-left">Reforestación y entrega de contenedores de basura</h3><p class="text-left">Con apoyo de CEMEX S.A.B. de C.V. de Ensenada, se instaló una rampa de acceso...</p>',
          'options' => [
            'style' => [
              'width: 1200px; height: 600px;'
            ],
          ],
      ],
  ]
]);
   ?>
</div>
