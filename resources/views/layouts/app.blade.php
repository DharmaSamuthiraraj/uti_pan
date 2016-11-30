<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body onload="ClearForm() ">
<div id="wrapper">

        @include('includes.header')
 
     <div class="page-wrapper m-b-none">
      @yield('content')
    </div>
    @include('includes.footer')
</div>
</body>
</html>