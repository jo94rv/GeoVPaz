<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">     
        <title>GeoVPaz</title>
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="styles/style.css">
        <script src="js/bootstrap.min.js"></script>
        <link rel="icon" type="image/png" href="imagenes/favicon.png" />
	    <style>
	       #map {
	           height: 400px;
       		   width: 100%;
       		    margin-top: 15px;
	       }
	    </style>
        
    </head>

    <body>    
        <?php require 'header.php' ?>
        <section>
			<div id="map"></div>
			    <script>
			      function initMap() {
			        var trujillo = {lat: 9.3651215, lng: -70.4360807};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 17,
			          center: trujillo
			        });
			        var image = 'imagenes/pin.png';
			        var beachMarker = new google.maps.Marker({
			          position: trujillo,
			          map: map,
			          icon: image
			        });
			      }
			    </script>
			    <script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFIvtvGwyEuDPb12HliKoNInm0vnT6KJI&callback=initMap">
			    </script>
        </section>

        <section>
            <?php require 'footer.php' ?>
        </section>
    </body>
</html>