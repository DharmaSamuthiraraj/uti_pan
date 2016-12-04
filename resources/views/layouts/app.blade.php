<!DOCTYPE html>
<html>
<head>
	<title>Welcome to UTI Pan Center</title>
    <meta name="description" content="PANcard Apply Online" />
	<meta name="keywords" content="PANcard Apply Online" />
	<meta charset="utf-8">
	<meta name="revisit-after" content="2 days"/>
	<meta name="googlebot" content="ALL"/>
	<meta name="robots" content="index,follow"/>
	<meta name="rating" content="General"/>
	<meta name="language" content="English">
	<meta name="refresh" content="3">
	<meta http-equiv="Pragma" content="no-cache"> 
	<META http-equiv="Expires" content="-1">
	<meta name="author" content="Vinoth Kumar"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link href="/css/animate.css" rel="stylesheet"/>
	<link href="/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="/css/font-awesome.min.css" rel="stylesheet"/>
	<link href="/css/fonts.css" rel="stylesheet"/>
	<link href="/css/custom.css" rel="stylesheet"/>
	<link href="/css/owl.carousel.css" rel="stylesheet"/>
	<link href="/css/revealmodal.css" rel="stylesheet"/>
	<link href="/css/bootstrap-responsive.css" rel="stylesheet"/>
</head>
<body onload="ClearForm()">
<div id="wrapper">

    @include('includes.header')
 
     <div class="page-wrapper m-b-none">
      @yield('content')
    </div>
    @include('includes.footer')
</div>
</body>
</html>`