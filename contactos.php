<!DOCTYPE html>
<html lang="en">
<!-- contact230:43-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>:: CONTACTOS ::</title>
<meta name="description" content="Welcome to Striking Interior Design Template">
<meta name="keywords" content="interior, design, services, expert, analysis, structure, luxury, home, kitchen, berdroom, living room, bathroom, kid, office, infrastructure">
<meta name="author" content="Saptarang">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&amp;subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&amp;subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/prettyPhoto.css">
<link rel="stylesheet" href="css/jquery.datetimepicker.css">
<link rel="stylesheet" href="css/bxslider.css">
<link rel="stylesheet" href="css/color.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/modernizr.custom.js"></script>

<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="shortcut icon" href="images/icons/favicon.ico">
<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">
<style>
    #map {
    height:400px; }
</style>
</head>
<body id="top" onLoad="initialize()" class="inner">
<div id="preloader">
<img src="images/Preloader.gif" alt="Preloader" />
</div>

<?php require("public-header.php");?>


<section class="breadcrumbs breadcrumbs2 contact wow fadeInDown" data-wow-duration="0.25s" data-wow-delay="0.45s">
<div class="boxedeb">
<div class="container page-block-small">
<div class="col-md-12 col-sm-12 col-xs-12">
<h2>Contactos</h2>
<span class="line"></span>
<div class="rightText">
<a href="index.php" title="Home">Inicio</a> / Contactos
</div>
</div>
</div>
</div>
</section>


<section id="contact" class="opt">
<div id="map" class="wow fadeInDown" data-wow-duration="0.50s" data-wow-delay="0.50s"></div>
<div class="contact-info BGprime page-block">
<div class="container wow fadeInUp" data-wow-duration="0.50s" data-wow-delay="0.50s">
<div class="office">
<h2 class="white text-center">PÓNGASE EN CONTACTO CON NOSOTROS</h2>
<hr class="light">
<div class="col-md-4 col-sm-12 col-xs-12">
<span><i class="fa fa-map-marker squareSmall BGsec"></i>Ciudad de La Paz, Calle Potosí Edificio<br>
Max Salzman, Piso 4.</span>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<span><i class="fa fa-phone squareSmall BGsec"></i>(+591) 75237123</span>
</div>
<div class="col-md-4 col-sm-12 col-xs-12">
<span><i class="fa fa-envelope squareSmall BGsec"></i>informaciones@tesisbol.com</span>
</div>
<div class="clear"></div>
</div>
</div>
</div>
<div class="container page-block text-center wow fadeInUp" data-wow-duration="0.50s" data-wow-delay="0.50s">
<h3 class="prime">Formulario</h3>
<span class="line"></span>
<p class="text-center">Llene el siguiente formulario para que nuestros <strong>Expertos</strong>  se contacten contigo y resolver todas tus dudas.<small> Todos los campos son obligatorios.</small></p>
<form id="contact_form" method="post" action="http://www.saptarang.org/premium/html/striking/01/01/form/contact.php">
<div class="col-md-6">
<input type="text" class="form-control" id="name" name="name" placeholder="Nombre(s) y Apellidos" />
</div>
<div class="col-md-6">
<input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefono" />
</div>
<div class="col-md-6">
<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" />
</div>
<div class="col-md-6">
<div class="col-md-12">
<textarea cols="60" rows="3" id="comment" name="comment" class="form-control" placeholder="Escribe tu comentario aqui..."></textarea>
</div>
<div class="col-md-12">
<input type="text" id="security" name="security" class="form-control hide" value="" />
<input type="submit" value="Enviar &#xf138;" class="btn btn-primary btn-lg" id="submit" name="submit" />
</div>
</form>
</div>
</section>


<?php require("public-footer.php");?>
<a href="#top" class="top"><i class="fa fa-angle-up fa-lg"></i></a>

<script>
 
    var map = L.map('map').
    setView([-16.49756, -68.132723], 
    15);
     
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(map);
    
    L.control.scale().addTo(map);
    var marker = L.marker([-16.49756, -68.132723], {draggable: true}).addTo(map);
    marker.bindPopup("<b>TESISBOL</b>").openPopup();
	 </script>
	 
<script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.ui.touch-punch.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.datetimepicker.js"></script>
<script src="js/placeholders.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/master.js"></script>
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>

<script>

// Google Map for single location
	  
	function initialize() {
	  var myLatlng = new google.maps.LatLng(42.879489,-78.876206); // Add your coordinates here
	  var mapOptions = {
		zoom: 17,
		scrollwheel:false,
		center: myLatlng,
		disableAutoPan: true
	  }
	  var map = new google.maps.Map(document.getElementById('map_canvas1'), mapOptions);
	  
	  var contentString = '<div class="info_content">' +
        '<h5>Striking<small>Los Angeles</small></h5>'; // name and city here

	  var infowindow = new google.maps.InfoWindow({
			  content: contentString
		  });
	
		  var marker = new google.maps.Marker({
			  position: myLatlng,
			  map: map
		  });
		   
		  google.maps.event.addListener(marker, 'click', function() {
			 infowindow.open(map,marker);
		  });
		  infowindow.open(map,marker);
	}
	google.maps.event.addDomListener(window, 'load', initialize);

</script>
</body>

<!-- contact230:43-->
</html>