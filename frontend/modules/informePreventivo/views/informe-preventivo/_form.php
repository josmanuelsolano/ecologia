<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\informePreventivo\InformePreventivo */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
    $date = new DateTime('now', new DateTimeZone('America/Tijuana'));
    date_default_timezone_set('America/Tijuana');
    $fecha=date("M d, Y", $date->format('U'));
 ?>
 <style>

#floating-panel {
  position: absolute;
  top: 10px;
  right: 25px;
  z-index: 5;
  background-color: #fff;
  border: 1px solid #999;
  text-align: center;
  font-family: 'Roboto','sans-serif';
  line-height: 30px;
}

    </style>
 <script async defer
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCna3_Qer57d2B1FFuESTyis_V_h6j8eo0&callback=initMap">
 </script>
 <script>
 var map;
 var markers = [];

function initMap() {
  var ayuntamiento = {lat: 31.808016802157262, lng: -116.59575998783112};

  map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 18,
    center: ayuntamiento,
    mapTypeId: google.maps.MapTypeId.HYBRID
  });

  // This event listener will call addMarker() when the map is clicked.
  map.addListener('click', function(event) {
    addMarker(event.latLng);
  });
}

// Adds a marker to the map and push to the array.
function addMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  markers.push(marker);
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}

 google.maps.event.addDomListener(window, 'load', initMap);
 </script>
<div class="informe-preventivo-form">

    <?php $form = ActiveForm::begin([
      'options'=>['enctype'=>'multipart/form-data'] // important
    ]); ?>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-success">
          <div class="panel-heading"><h3>1. Datos Generales</h3></div>
          <div class="panel-body">
            <div class="row">
              <p>
                <h4>&nbsp;1.1 Nombre o Razón Social de la persona física o moral solicitante</h4>
              </p>
              <div class="col-sm-6">
                <?= $form->field($model, 'nombre_solicitante')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-3">
                <?= $form->field($model, 'rfc')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-3">
                <?= $form->field($model, 'nacionalidad')->dropDownList(
                [
                  '0' => 'Mexicano(a)',
                  '1' => 'Extranjero(a)'
                ],
                [
                  'prompt'=>'Seleccione Nacionalidad'
                ]); ?>
              </div>
            </div>
            <div class="row">
              <p>
                <h4>&nbsp;1.2 Domicilio para oir notificaciones</h4>
              </p>
              <div class="col-sm-6">
                <?= $form->field($model, 'delegacion')->textInput(['maxlength' => true]) ?>
              </div>

              <div class="col-sm-6">
                <?= $form->field($model, 'colonia')->dropDownList(
                [
                  '0' => 'Col. Centro',
                  '1' => 'Popular',
                  '3' => 'Punta Banda',
                  '4' => 'Valle Verde',
                  '5' => 'Lomitas',
                  '6' => 'Indeco',
                  '7' => 'Porticos de mar',
                  '8' => 'Villas 1',
                  '9' => 'Valle Dorado',
                ],
                [
                  'prompt'=>'Seleccione Colonia'
                ]); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-3">
                <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-3">
                <?= $form->field($model, 'codigo_postal')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-3">
                <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
              </div>
            </div>
            <div class="row">
              <p>
                <h4>&nbsp;1.3 Datos del Proyecto</h4>
              </p>
              <div class="col-sm-6">
                <?= $form->field($model, 'nombre_proyecto')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-3">
                <!--<?= $form->field($model,'inicio_actividad')->widget(DatePicker::className(),['clientOptions' => ['defaultDate' => '2014-01-01']]) ?>-->
                <?= $form->field($model, 'inicio_actividad')->textInput(['maxlength' => true, 'value' => $fecha]) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <?= $form->field($model, 'actividad_principal')->textInput(['maxlength' => true]) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-info">
          <div class="panel-heading"><h3>2. Ubicación de la obra o actividad</h3></div>
          <div class="panel-body">
            <div class="row">
              <p>
                <h4>&nbsp;2.1 Ubicación física de la actividad proyectada</h4>
              </p>
              <div class="col-sm-6">
                <?= $form->field($model, 'delegacion')->textInput(['maxlength' => true]) ?>
              </div>

              <div class="col-sm-3">
                <?= $form->field($model, 'colonia')->dropDownList(
                [
                  '0' => 'Col. Centro',
                  '1' => 'Popular',
                  '3' => 'Punta Banda',
                  '4' => 'Valle Verde',
                  '5' => 'Lomitas',
                  '6' => 'Indeco',
                  '7' => 'Porticos de mar',
                  '8' => 'Villas 1',
                  '9' => 'Valle Dorado',
                ],
                [
                  'prompt'=>'Seleccione Colonia'
                ]); ?>
              </div>
              <div class="col-sm-3">
                <?= $form->field($model, 'calle')->textInput(['maxlength' => true]) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <?= $form->field($model, 'numero')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-3">
                <?= $form->field($model, 'codigo_postal')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-3">
                <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-3">
                <?= $form->field($model, 'clave_catastral')->textInput(['maxlength' => true]) ?>
              </div>
            </div>
            <div class="row">
              <p>
                <h4>&nbsp;2.2 Actividades desarrolladas colindantes al predio</h4>
              </p>
              <div class="col-sm-6">
                <?= $form->field($model, 'actividad_norte')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-6">
                <?= $form->field($model, 'actividad_sur')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-6">
                <?= $form->field($model, 'actividad_este')->textInput(['maxlength' => true]) ?>
              </div>
              <div class="col-sm-6">
                <?= $form->field($model, 'actividad_oeste')->textInput(['maxlength' => true]) ?>
              </div>
            </div>
            <div class="row">
              <p>
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;Anexo I.- Ubicación de predio</h4>
              </p>
              <div class="col-sm-12">
                <div id="floating-panel">

                  <input onclick="deleteMarkers()" type=button value="Borrar marcas">
                </div>
                <div id="googleMap" class="panel-body" style="height:380px;">

                </div>

              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-warning">
          <div class="panel-heading"><h3>3. Documentos a Anexar</h3></div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-6">
                <?= $form->field($model, 'anexo_2')->widget(FileInput::classname(), [
                'options'=>['accept'=>'image/*'],
                'pluginOptions'=>['allowedFileExtensions'=>['pdf','docx','doc','xlsx','xls','pptx','ppt']]]); ?>
              </div>
              <div class="col-sm-6">
                <?= $form->field($model, 'anexo_3')->widget(FileInput::classname(), [
                'options'=>['accept'=>'image/*'],
                'pluginOptions'=>['allowedFileExtensions'=>['pdf','docx','doc','xlsx','xls','pptx','ppt']]]); ?>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <?= $form->field($model, 'anexo_4')->widget(FileInput::classname(), [
                'options'=>['accept'=>'image/*'],
                'pluginOptions'=>['allowedFileExtensions'=>['pdf','docx','doc','xlsx','xls','pptx','ppt']]]); ?>
              </div>
              <div class="col-sm-6">
                <?= $form->field($model, 'anexo_5')->widget(FileInput::classname(), [
                'options'=>['accept'=>'image/*'],
                'pluginOptions'=>['allowedFileExtensions'=>['pdf','docx','doc','xlsx','xls','pptx','ppt']]]); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Enviar Solicitud' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
