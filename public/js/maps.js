	var key = "AIzaSyD2W_PF0teXZd-kXMs2qkJ8sfTHBpLY11g";
	var originLat,originLng,OriginUrl,DestinationUrl;
	var destinationLat,destinationLng;

	function getOrigin() {
		origin = document.getElementById("origin").value;
		OriginUrl = "https://maps.googleapis.com/maps/api/geocode/json?address="+origin+"&key="+key;
		$.getJSON(OriginUrl,function(data){
        	originLat = data["results"][0]["geometry"]["location"]["lat"];
        	originLng = data["results"][0]["geometry"]["location"]["lng"];
    	})
	}

	function getDestination() {
		destination = document.getElementById("destination").value
		DestinationUrl = "https://maps.googleapis.com/maps/api/geocode/json?address="+destination+"&key="+key;
		$.getJSON(DestinationUrl,function(data){
        	destinationLat = data["results"][0]["geometry"]["location"]["lat"];
        	destinationLng = data["results"][0]["geometry"]["location"]["lng"];
    	})
	}

	

	
	