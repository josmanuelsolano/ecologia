<style>
    #floating-panel {
    position: absolute;
    top: 10%;
    right: 3.5%;
    z-index: 5;
    background-color: transparent;
    border: transparent;
    text-align: center;
    font-family: 'Roboto','sans-serif';
    line-height: 30px;
    }

    #floating-panel {
      margin-left: -52px;
    }
</style>
<script>

var map;
var allComplaints = [];
var markers = [];
var complaintsGreen = [
  {type: 1, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Escurrimiento de aguas residuales:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="red">Sin atender</font></p>'+
      '</div>'+
      '</div>', lat: 31.808016802157262, lng: -116.59575998783112},
  {type: 1, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Escurrimiento de aguas residuales:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="green">Atendida</font></p>'+
      '</div>'+
      '</div>', lat: 31.8715696243196, lng: -116.61510407924652},
  {type: 1, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Escurrimiento de aguas residuales:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="red">Sin atender</font></p>'+
      '</div>'+
      '</div>', lat: 31.850461069559795, lng: -116.58389657735825}
];

var complaintsRed = [
  {type: 2, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Basureros Clandestinos:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="green">Atendida</font></p>'+
      '</div>'+
      '</div>', lat: 31.81462796954989, lng: -116.59309923648834},
  {type: 2, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Basureros Clandestinos:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="red">Sin atender</font></p>'+
      '</div>'+
      '</div>', lat: 31.871692034684614, lng: -116.60086691379547},
  {type: 2, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Basureros Clandestinos:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="green">Atendida</font></p>'+
      '</div>'+
      '</div>', lat: 31.84735172422542, lng: -116.58767849206924}
];

var complaintsYellow = [
  {type: 3, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Tiraderos de escombro:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="red">Sin atender</font></p>'+
      '</div>'+
      '</div>', lat: 31.866634418394796, lng: -116.65856391191483},
  {type: 3, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Tiraderos de escombro:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="green">Atendida</font></p>'+
      '</div>'+
      '</div>', lat: 31.77082238777463, lng: -116.58106952905655},
  {type: 3, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Tiraderos de escombro:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="red">Sin atender</font></p>'+
      '</div>'+
      '</div>', lat: 31.705407785561075, lng: -116.5550708770752}
];

var complaintsBlue = [
  {type: 4, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Problemas con mascotas:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="green">Atendida</font></p>'+
      '</div>'+
      '</div>', lat: 31.851372909505116, lng: -116.5740555524826},
  {type: 4, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Problemas con mascotas:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="red">Sin atender</font></p>'+
      '</div>'+
      '</div>', lat: 31.830662576557447, lng: -116.59556955099106},
  {type: 4, stringContent:'<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h2 id="firstHeading" class="firstHeading">Denuncia Folio: E/943</h2>'+
      '<div id="bodyContent">'+
      '<p><b>Problemas con mascotas:</b><br>En este espacio estaría la información '+
      'que se requiera mostrar.</p><br>'+
      '<p><b>estado:</b><font color="green">Atendida</font></p>'+
      '</div>'+
      '</div>', lat: 31.73952990373818, lng: -116.56686455011368}
];


function initMap(){

    var myProp = {
    center: {lat: 31.86016864104449, lng: -116.60659074783325},
    zoom: 10,
    streetViewControl: false,
    mapTypeId:google.maps.MapTypeId.HYBRID
    };

    map = new google.maps.Map(document.getElementById("map"), myProp);

    google.maps.event.addListener(window, 'load', initMap);

    dropAll();
}

function dropGreen(typeComplaint) {
  clearMarkers();
  for (var i = 0; i < complaintsGreen.length; i++) {
    addMarkers(complaintsGreen[i], i * 50, i);
  }
}

function dropRed(typeComplaint) {
  clearMarkers();
  for (var i = 0; i < complaintsRed.length; i++) {
    addMarkers(complaintsRed[i], i * 50, i);
  }
}

function dropYellow(typeComplaint) {
  clearMarkers();
  for (var i = 0; i < complaintsYellow.length; i++) {
    addMarkers(complaintsYellow[i], i * 50, i);
  }
}

function dropBlue(typeComplaint) {
  clearMarkers();
  for (var i = 0; i < complaintsBlue.length; i++) {
    addMarkers(complaintsBlue[i], i * 50, i);
  }
}

function dropAll() {
  clearMarkers();
  allComplaints = allComplaints.concat(complaintsGreen);
  allComplaints = allComplaints.concat(complaintsRed);
  allComplaints = allComplaints.concat(complaintsYellow);
  allComplaints = allComplaints.concat(complaintsBlue);
  console.log(allComplaints);
  for (var i = 0; i < allComplaints.length; i++) {
    addMarkers(allComplaints[i], i * 50 ,i);
  }
}

function addMarkers(position, timeout, i) {
  window.setTimeout(function() {
    var color;
    if (position.type == 1) {
      color = 'http://maps.google.com/mapfiles/ms/icons/green-dot.png';
    }else if(position.type == 2) {
      color = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
    }else if(position.type == 3) {
      color = 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png';
    }else {
      color = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
    }
    var marker = new google.maps.Marker({
      position: position,
      map: map,
      icon: color,
      //animation: google.maps.Animation.DROP
    });
    markers.push(marker);
    function info(marker, content){
      var infowindow = new google.maps.InfoWindow({
        content: content,
        maxWidth: 200
      });
      console.log(infowindow);
      google.maps.event.addListener(markers[i], 'click', function() {
      infowindow.open(map,markers[i]);
      });
    }
    info(marker, position.stringContent);
  }, timeout);
}

function clearMarkers() {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
  markers = [];
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCna3_Qer57d2B1FFuESTyis_V_h6j8eo0&callback=initMap">
</script>
<div class="site-denuncias">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-success">
        <div class="panel-heading">
          Denuncias Actuales
          <div id="floating-panel">
            <button type="button" class="btn btn-success" onclick="dropGreen(1)" data-toggle="tooltip" data-placement="bottom" title="Escurrimiento de aguas residuales">Escurrimientos</button>
            <button type="button" class="btn btn-danger" onclick="dropRed(2)" data-toggle="tooltip" data-placement="bottom" title="Basureros clandestinos">Basureros</button>
            <button type="button" class="btn btn-warning" onclick="dropYellow(3)" data-toggle="tooltip" data-placement="bottom" title="Tiraderos de escombro">Tiraderos</button>
            <button type="button" class="btn btn-info" onclick="dropBlue(4)" data-toggle="tooltip" data-placement="bottom" title="Problemas con mascotas">Mascotas</button>
            <button type="button" class="btn btn-default" onclick="dropAll()">Todas</button>
          </div>
        </div>
        <div id="map" class="panel-body" style="height:600px;">
        </div>
      </div>
    </div>
  </div>
</div>
