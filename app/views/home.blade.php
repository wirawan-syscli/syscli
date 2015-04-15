<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/foundation.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<style type="text/css">
    	#location { width: 100%; height: 250px; margin: 0; padding: 0;}
    </style>
  </head>
  <body>
<div id="map-canvas"></div>
</head>
<body>

	<div id="navbar-wrapper">
		<div id="navbar" class="row">
			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
		    		<li class="name">
		      			<h1><a href="#">System Clinic</a></h1>
		    		</li>
		    		 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		    		<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
		  		</ul>

		  		<section class="top-bar-section">
		    		<!-- Right Nav Section -->
		    		<ul class="right">
		      			<li class="active"><a href="#">Right Button Active</a></li>
		      			<li class="has-dropdown">
		        			<a href="#">Right Button Dropdown</a>
		        			<ul class="dropdown">
		          				<li><a href="#">First link in dropdown</a></li>
		          				<li class="active"><a href="#">Active link in dropdown</a></li>
		        			</ul>
		      			</li>
		    		</ul>

		  		</section>
			</nav>
		</div>
	</div>

	<div id="slideshow" class="row">
		<img src="{{ asset('img/cover.jpg') }}" />
	</div>

	<div id="intro" class="row">
		<div class="columns text-center">
			<h1>Lorep Ipsum</h1>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquam lacus rutrum, sollicitudin ligula vitae, interdum arcu. Maecenas ac eleifend mauris. Suspendisse ut est dui. Cras lobortis purus ligula, et placerat nibh lacinia sed. Vestibulum varius diam ac tellus viverra sodales. Etiam sodales mattis accumsan.</p>
		</div>
	</div>

	<div id="service" class="row">
		<div class="columns">
			<h5>Web services</h5>
			<h1>Project 1</h1>
			<div class="row">
				<div class="columns">
					<img src="{{ asset('img/cover.jpg') }}" />
				</div>
			</div>
			<div class="row">
				<div class="small-4 columns"><img src="{{ asset('img/cover.jpg') }}" /></div>
				<div class="small-4 columns"><img src="{{ asset('img/cover.jpg') }}" /></div>
				<div class="small-4 columns"><img src="{{ asset('img/cover.jpg') }}" /></div>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla aliquam lacus rutrum, sollicitudin ligula vitae, interdum arcu. Maecenas ac eleifend mauris. Suspendisse ut est dui.</p>
		</div>
	</div>

	<div id="client" class="row">
		<div class="small-12 columns"><h1>Clients</h1></div>
	</div>
	<div id="client-logo" class="row">
		<div class="small-4 columns"><img src="{{ asset('img/skype.png') }}" /></div>
		<div class="small-4 columns"><img src="{{ asset('img/intel.png') }}" /></div>
		<div class="small-4 columns"><img src="{{ asset('img/dell.png') }}" /></div>
	</div> 

	<div id="contact-wrapper">
		<div class="row">
			<div class="small-12 columns">
				<h3><i class="fa fa-envelope-o"></i>Contact Us</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
	</div>

	<div id="sitemap-wrapper" class="small-12 columns">
		<h3><i class="fa fa-sitemap"></i> sitemap : </h3>
		<form>
			<select>
				<option>home</option>
				<option>contact</option>
			</select>
		</form>
	</div>

	<div id="location-wrapper">
		<div id="location" class="small-12 columns"></div>
	</div>

	<div id="copyright-wrapper" >
		<div id="copyright" class="small-12 columns text-center">
			<p>2015 &copy; System Clinic, Co. Ltd | All right reserved.</p>
		</div>
	</div>

	<!-- Javascript -->
	{{ HTML::script("js/vendor/modernizr.js") }}
	{{ HTML::script("js/vendor/jquery.js") }}
	{{ HTML::script("js/foundation.min.js") }}
	<script>
		$(document).foundation();
	</script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2w819SxK1myz6aj8amJv_z2HdQi35D9w"></script>
    <script type="text/javascript">


  	  var MY_MAPTYPE_ID = 'custom_style';

      function initialize() {
  		var myLatlng = new google.maps.LatLng(34.682556,135.179760);

  		var featureOpts = [
		    {
		      stylers: [
		        { hue: '#2F4869' },
		        { visibility: 'simplified' },
		        { gamma: 0.5},
		        { weight: 0.1 }
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
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>
