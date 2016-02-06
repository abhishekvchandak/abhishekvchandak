<?php

     


?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	 <meta name="description" content="On demand local deliveries in Bangalore. Same day pickup and delivery in Bangalore. Book in 3 steps. Why pay for an auto when you have to deliver only a box?">

	<meta name="author" content="">

	<title>Simply Delivered | On demand deliveries in Bangalore.</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<style>
.panel > .panel-heading {
    background-image: none;
    background-color: ;
    color: white;
}
#map-container{ height: 360px}

</style>
<script>

var source, destination;
    var distance_ceil;
    var delivery_charge=10;
    var directionsDisplay;
    //var directionsService = new google.maps.DirectionsService();
	
	var address1 = 'RT Nagar, Bengaluru, Karnataka, India';
	var address2 = 'Malleshwaram, Bengaluru, Karnataka, India';
	var hello11,hello22,hello33,hello44;
	
	
	/*
    google.maps.event.addDomListener(window, 'load', function () 
    {
        new google.maps.LatLng('RT Nagar, Bengaluru, Karnataka, India');
        new google.maps.LatLng(13.00306,77.56429);
        directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
    });
*/
GetRoute();

 function GetRoute(callback)
 {
	 geocoder = new google.maps.Geocoder();
	 /*
 var mumbai = new google.maps.LatLng(18.9750, 72.8258);
            var mapOptions = {
                types: ['(Bangalore)'],
                componentRestrictions: {country: "in"},
                zoom: 1,
                center: mumbai
            };
            map = new google.maps.Map(document.getElementById('map-container'), mapOptions);

            var address_ver1 = address1; 
            var address_ver2 = address2;

            address_ver1 = address_ver1.toLowerCase();
            address_ver2 = address_ver2.toLowerCase();

            if(address_ver1!="" && address_ver2!="")
            {  
              if( ( address_ver1.includes("bengaluru") ||  address_ver1.includes("bangalore") ) && (address_ver2.includes("bengaluru") ||  address_ver2.includes("bangalore")))
              {

                          directionsDisplay.setMap(map);
                         // directionsDisplay.setPanel(document.getElementById('dvPanel'));

                          //*********DIRECTIONS AND ROUTE**********************/
       
						/*
						source = address1;
                          destination = address2;


                          var request = {
                              origin: source,
                              destination: destination,
                              travelMode: google.maps.TravelMode.DRIVING
                          };
                          directionsService.route(request, function (response, status) {
                              if (status == google.maps.DirectionsStatus.OK) {
                                  directionsDisplay.setDirections(response);
                              }
                          });

                          //*********DISTANCE AND DURATION**********************/
						  /*
                          var service = new google.maps.DistanceMatrixService();
                          service.getDistanceMatrix({
                              origins: [source],
                              destinations: [destination],
                              travelMode: google.maps.TravelMode.DRIVING,
                              unitSystem: google.maps.UnitSystem.METRIC,
                              avoidHighways: false,
                              avoidTolls: false
                          }, function (response, status) {
                              if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                                  var distance = response.rows[0].elements[0].distance.text;
                                  var duration = response.rows[0].elements[0].duration.text;
							  }
                                  else {
                                  alert("Unable to find the distance via road.");
                              }
                          });

                           
            }

                else
                {
                  document.getElementById("deliverycharge").innerHTML="<br><div class=\"alert alert-danger\">Goods are delivered only in Bangalore</div>";
                }
            }
			
			*/
			
			/*
			var start = new google.maps.LatLng(13.01957,77.59681);
			var end = new google.maps.LatLng(13.00306,77.56429);

			var directionsDisplay = new google.maps.DirectionsRenderer();// also, constructor can get "DirectionsRendererOptions" object
			directionsDisplay.setMap(map); // map should be already initialized.

			var request = {
				origin : start,
				destination : end,
				travelMode : google.maps.TravelMode.DRIVING
			};
			var directionsService = new google.maps.DirectionsService(); 
			directionsService.route(request, function(response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
					directionsDisplay.setDirections(response);
				}
			});
			
			*/
			
			

			geocoder.geocode( { 'address': address1}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK) {
				//In this case it creates a marker, but you can get the lat and lng from the location.LatLng
				//map.setCenter(results[0].geometry.location);
				
				var hello=results[0].geometry.location;

				hello = String(hello);
				hello = hello.substring(1,hello.length-2);
				hello11 = parseFloat(hello.substring(0,8));
				hello22 = parseFloat(hello.substring(hello.indexOf(",")+1, hello.indexOf(",")+9 ));
				//setVariable(hello1,hello2);
				
				geocoder.geocode( { 'address': address2}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK) {
				//In this case it creates a marker, but you can get the lat and lng from the location.LatLng
				//map.setCenter(results[0].geometry.location);
				
				var hello9=results[0].geometry.location;

				hello9 = String(hello9);
				hello9 = hello9.substring(1,hello9.length-2);
				var hello33 = parseFloat(hello9.substring(0,8));
				var hello44 = parseFloat(hello9.substring(hello9.indexOf(",")+1, hello9.indexOf(",")+9 ));
				//setVariable1(hello1,hello2);
				
				findDirection(hello11,hello22,hello33,hello44);
				
			  }
				});
				
			  } else {
				alert("Geocode was not successful for the following reason: " + status);
			  }
			});
			
			 
			
			//window.alert(hello11);
			callback();
			
			
 }		
 
 function setVariable(hello1,hello2)
 {
	hello11 = hello1;
	hello22 = hello2;
 }
 
 function setVariable1(hello1,hello2)
 {
	hello33 = hello1;
	hello44 = hello2;
 }
	
function findDirection(hello1,hello2,hello3,hello4)
	{
			//window.alert(hello1 + " " + hello2);
			var pointA = new google.maps.LatLng(hello1,hello2),
			pointB = new google.maps.LatLng(hello3,hello4),
    myOptions = {
      zoom: 1,
      center: pointA
    },
    map = new google.maps.Map(document.getElementById('map-container'), myOptions),
    // Instantiate a directions service.
    directionsService = new google.maps.DirectionsService,
    directionsDisplay = new google.maps.DirectionsRenderer({
      map: map
    }),
    markerA = new google.maps.Marker({
      position: pointA,
      title: "point A",
      label: "A",
      map: map
    }),
    markerB = new google.maps.Marker({
      position: pointB,
      title: "point B",
      label: "B",
      map: map
    });

  // get route from A to B
  calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
  directionsService.route({
    origin: pointA,
    destination: pointB,
    travelMode: google.maps.TravelMode.DRIVING
  }, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}


</script>

<body>
<div class="container">
  <div class="row">

     <h2>Panel Group</h2>
  <p>The panel-group class clears the bottom-margin. Try to remove the class and see what happens.</p>
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">SIMPLY DELIVERED 
        <span class="pull-right">January  26th, 2016<span>
      </div>
	</div>
	<div class="panel panel-primary">
      <div class="panel-body">     
          <div class="col-md-12">
              <div class="col-md-6">
                  <div class="panel panel-primary">
                  <div class="panel-body">
					<div id="map-container"></div>
					</div>
				  </div>
                  </div>
             
   
              <div class="col-md-6">
                  <div class="panel panel-primary">
                  <div class="panel-body"></div>
                  </div>
              </div>
          </div>    
         </div>
      </div>
	</div>
	
	
  </div>
</div>
  <!-- Javascript files -->

  
     
</body>
</html>
