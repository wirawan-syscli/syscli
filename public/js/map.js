function map_initialize() {
	var MY_MAPTYPE_ID = 'custom_style';
		var myLatlng = new google.maps.LatLng(34.682556,135.179760);

		var featureOpts = [
	    {
	      stylers: [
	        { saturation: -80 },
	        { visibility: 'simplified' }
	      ]
	    },
	    {
	      elementType: 'labels',
	      stylers: [
	        { visibility: 'on' }
	      ]
	    }
	  ];

    var mapOptions = {
          center: myLatlng,
          zoom: 17,
	      mapTypeControlOptions: {
	      	mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
	      },
	   	  mapTypeId: MY_MAPTYPE_ID
		  };

    var map = new google.maps.Map(document.getElementById('location'),
        mapOptions);

    var marker = new google.maps.Marker({
		    position: myLatlng,
		    map: map,
		    title: 'Hello World!'
		});
    
    var styledMapOptions = {
	    name: 'Custom Style'
	  };

	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

  	map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

}

google.maps.event.addDomListener(window, 'load', map_initialize);