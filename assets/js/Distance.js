var location1;
	var location2;
	
	var address1;
	var address2;

	var latlng;
	var geocoder;
	var map;
	
	var distance;


	// finds the coordinates for the two locations and calls the showMap() function
	function initialize(clicked_id)
	{
		
		geocoder = new google.maps.Geocoder(); // creating a new geocode object
		
		
		
		// getting the two address values
		address1 = document.getElementById("address1").value;
		address2 = document.getElementById("address2").value;
		
		address1_check = address1.toLowerCase();
		address2_check = address2.toLowerCase();
	
	if((address1!="" && address2!=""))
	{
		if((address1_check.includes("bangalore") || address1_check.includes("bengaluru")) && (address2_check.includes("bangalore") || address2_check.includes("bengaluru")))
		{
			// finding out the coordinates
			
			document.getElementById('address12').style.display = "block";
			document.getElementById('map-container1').style.display = "block";
			
			if (geocoder) 
			{
				geocoder.geocode( { 'address': address1}, function(results, status) 
				{
					if (status == google.maps.GeocoderStatus.OK) 
					{
						//location of first address (latitude + longitude)
						location1 = results[0].geometry.location;
					} else 
					{
						alert("Geocode was not successful for the following reason: " + status);
					}
				});
				geocoder.geocode( { 'address': address2}, function(results, status) 
				{
					if (status == google.maps.GeocoderStatus.OK) 
					{
						//location of second address (latitude + longitude)
						location2 = results[0].geometry.location;
						// calling the showMap() function to create and show the map 
						showMap(clicked_id);
					} else 
					{
						alert("Geocode was not successful for the following reason: " + status);
					}
				});
			}
		}

		else
		{
			document.getElementById("deliverycharge").innerHTML = "<br><div class=\"alert alert-danger\">Goods will be delivered only in Bangalore.</div>";
			document.getElementById('address12').style.display = "none";
			document.getElementById('map-container1').style.display = "none";
		}
	}
	}
		
	// creates and shows the map
	function showMap(clicked_id)
	{
		// center of the map (compute the mean value between the two locations)
		latlng = new google.maps.LatLng((location1.lat()+location2.lat())/2,(location1.lng()+location2.lng())/2);

		var weight;
        weight = document.getElementById("weight").value;

		// set map options
			// set zoom level
			// set center
			// map type
		var mapOptions = 
		{
			types: ['(Bangalore)'],
			componentRestrictions: {country: "in"},
			zoom: 1,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.DRIVING
		};
		
		// create a new map object
			// set the div id where it will be shown
			// set the map options
			map = new google.maps.Map(document.getElementById("map-container1"), mapOptions);
		
		// show route between the points
		directionsService = new google.maps.DirectionsService();
		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsDisplay.setMap(map);
		var request = {
			origin:location1, 
			destination:location2,
			travelMode: google.maps.DirectionsTravelMode.DRIVING
		};
		directionsService.route(request, function(response, status) 
		{
			if (status == google.maps.DirectionsStatus.OK) 
			{
				directionsDisplay.setDirections(response);

              if (weight < 5) {
              weight_ceil = 5;
              } else {
              weight_ceil = weight;
              }

               distance_string = response.routes[0].legs[0].distance.text;
               str_length = distance_string.length;
               left_size = str_length - 5;
               distance_substring = distance_string.substring(0,left_size);
               distance_num = parseInt(distance_substring);

               if (distance_num < 5) {
              distance_ceil = 5;
              } else if (distance_num < 10) {
              distance_ceil = 10;
              } else if (distance_num < 15) {
              distance_ceil = 15;
             } else if (distance_num < 20) {
              distance_ceil = 20;
              } else if (distance_num < 25) {
              distance_ceil = 25;
             } else if (distance_num < 30) {
               distance_ceil = 30;    
            } else {
            distance_ceil = 0;
             }

            if(clicked_id==="booknow")
			{
				delivery_charge1= 1.5*weight_ceil*distance_ceil;
				delivery_charge2 = 2.5*weight_ceil*distance_ceil;
				
				if((delivery_charge1%10)>0){
				delivery_charge1 = delivery_charge1 + (10 - (delivery_charge1%10));
				}
				
				if((delivery_charge2%10)>0){
				delivery_charge2 = delivery_charge2 + (10 - (delivery_charge2%10));
				}
				
				document.getElementById("deliverycharge").innerHTML = "<br><div class=\"alert alert-info\"><br>Signature: <font color=\"red\">Rs. "+delivery_charge1+"</font>.&nbsp;&nbsp;&nbsp;&nbsp;Express: <font color=\"red\">Rs. "+delivery_charge2+"</font>.<br>This is an estimated delivery charge. The actual charges may vary based on any special delivery requirements specified. We will confirm the final amount before pickup.<br><font color=\"red\">Signature deliveries are accepted only till 2 PM.</font><br><font color=\"green\">Signature</font>: The package will be delivered before 8pm on the same business day. Any acknowledgments, cash,etc will be delivered back the next day.<br><font color=\"green\">Express</font>: The package will delivered within 2 hours of pickup. Any acknowledgments, cash, etc will be delivered immediately after the delivery.<br></div>";
			}
			
			if(distance_ceil==0)
			{
				if(clicked_id==="booknow")
			{
				document.getElementById('address12').style.display = "none";
				document.getElementById('map-container1').style.display = "none";
			}
			}
			}
		});
		
	}

// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

/*var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};*/

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  var options = {
  componentRestrictions: {country: "in"}
 };
  
	autocomplete1 = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('address1')),
      options);

	autocomplete2 = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('address2')),
      {types: ['geocode']});
  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete1.addListener('place_changed', fillInAddress);
  autocomplete2.addListener('place_changed', fillInAddress);
}

// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
// [END region_geolocation]

$(document).ready(function() {
    $('#validation')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                number1: {
                    validators: {
                        phone: {
                            country: 'IN',
                            message: 'The value is not valid %s phone number'
                        }
                    }
                }
            }
        })
});


 goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 938495377;
    w.google_conversion_label = "RI-lCJ-_02IQkZvBvwM";
    w.google_conversion_value = 40.00;
    w.google_conversion_currency = "INR";
    w.google_remarketing_only = false;
  }
  
  
function validateForm() {
    var x = document.forms["myForm"]["email1"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}


function setValue(){
    document.myForm.address1.value = address1;
	document.myForm.address2.value = address2;
	document.myForm.weight_ceil.value = weight_ceil;
	var cost = $("input[name=mode1]:checked").val();
	
	if(cost==="Signature")
	document.myForm.delivery_charge.value = delivery_charge1;

	else if(cost==="Express")
	document.myForm.delivery_charge.value = delivery_charge2;
	
    goog_snippet_vars();
    window.google_conversion_format = "3";
    window.google_is_call = true;
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }

	
    //document.getElementById("myForm").submit();
}

            addEventListener('load', prettyPrint, false);
            $(document).ready(function(){
            $('pre').addClass('prettyprint linenums');
                  });
