<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>株式会社システムクリニック</title>
	<link rel="shortcut icon" href="favicon.png">  
	<link rel="stylesheet" href="{{ asset('css/vendor/normalize.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/vendor/foundation.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/vendor/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/vendor/owlcarousel/owl.carousel.css') }}" />
	<!-- <link rel="stylesheet" href="{{ asset('css/vendor/owlcarousel/owl.theme.default.min.css') }}" /> -->
	<style type="text/css">
    	#location { width: 100%; height: 250px; margin: 0; padding: 0;}
    	.black{background-color: black;}
    </style>
  </head>
<body>

	@if (isset($index))
		@include("templates.navigation.default")
	@else
		@include("templates.navigation.blank")
	@endif