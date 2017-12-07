<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
 <meta charset="utf-8"/>
<meta http-equiv="x-ua-compatible" content="ie=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>@yield('title')</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="{{URL::asset('dist/css/foundation.min.css')}}"/>
<link rel="stylesheet" href="{{URL::asset('dist/css/app.css')}}"/>
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
</head>
<body>
@include('inc.navbar')
@yield('body')
@include('inc.footer')
<script src="{{URL::asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{URL::asset('dist/js/app.js')}}"></script>
</body>
</html>