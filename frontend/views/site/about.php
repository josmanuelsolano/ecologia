<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
?>
<br>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCna3_Qer57d2B1FFuESTyis_V_h6j8eo0&callback=initMap">
</script>
<script>
var myCenter=new google.maps.LatLng(31.8080885,-116.5977342);
var marker;

function initMap()
{
  var mapProp = {
    center: {lat: 31.808016802157262, lng: -116.59575998783112},
    zoom:16,
    mapTypeId:google.maps.MapTypeId.HYBRID
  };

  var map=new google.maps.Map(document.getElementById("map"),mapProp);

  var marker=new google.maps.Marker({
    position:{lat: 31.808016802157262, lng: -116.59575998783112},
    animation:google.maps.Animation.BOUNCE
  });

  marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="site-about">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
        <div class="panel-heading">Localización geográfica</div>
        <div id="map" class="panel-body" style="height:380px;">

        </div>
      </div>
    </div>

      <div class="col-md-4">
        <div class="panel panel-info">
          <div class="panel-heading">Misión</div>
          <div class="panel-body">
             Mejorar la calidad del medio ambiente para los habitantes del Municipio
             de Ensenada, Baja California,logrando un desarrollo  sustentable con el
             compromiso compartido de las demás áreas.
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-warning">
          <div class="panel-heading">Visión</div>
          <div class="panel-body">
            Establecer normas políticas y acciones para lograr un equilibrio ecológico
            ,ademas definir propuestas  de educación ambiental,conservación y
            desarrollo  sustentable, vinculando este enfoque con las demás áreas
            afines  del ayuntamiento.
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-danger">
          <div class="panel-heading">Objetivo</div>
          <div class="panel-body">
            Regular, prevenir, controlar ,mitigar cualquier afectación al medio
            ambiente  dentro de la  jurisdicción  Municipal  de conformidad  con el
            reglamento para el control de la calidad ambiental y la ley general
            de equilibrio ecológico  y de protección al ambiente, mediante
            inspecciones, educación ambiental, ademas de la evaluación y emisión
            de licencias  ambientales.
          </div>
        </div>
      </div>
  </div>
</div>
