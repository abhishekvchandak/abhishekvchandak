 function init_map() {
		var myLocation = new google.maps.LatLng(13.04352,77.55261);
		  
        var mapOptions = {
          center: myLocation,
          zoom: 14
        };
		
		var marker = new google.maps.Marker({
			position: myLocation,
			title:"Simply Delivered"});
			
        var map = new google.maps.Map(document.getElementById("map-container"),
            mapOptions);
		
		marker.setMap(map);	

      }
	  
     google.maps.event.addDomListener(window, 'load', init_map);