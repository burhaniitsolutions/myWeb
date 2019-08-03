<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8"/>
    <meta name="author" content="Abdul Quadir Dewaswala">
    <meta name="application-name" content="Abdul_Quadir_Dewaswala_Official_Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="robots" content="all=index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="Copyright" content="{{ date('Y') }} copyright" />
    <meta name="distribution" content="Global" />
    <meta http-equiv="X-UA-Compatible" content="IE=8,IE=9,ie=edge" >
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Canonical AND Short Links -->
    <link rel="canonical" href="http://www.abdulquadir.in" />
    <link rel='shortlink' href='http://www.abdulquadir.in' />
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('img/ico/ab_logo_48.ico')}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{asset('img/ico/ab_logo_48.ico')}}" type="image/vnd.microsoft.icon"/>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/ico/ab_logo_48.ico')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/ico/ab_logo_64.ico')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/ico/ab_logo_128.ico')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/ico/ab_logo_192.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/ico/ab_logo_256.ico')}}" />
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Title -->
    <title>Abdul Quadir </title>
  </head>
  <body>
    @yield('mainbody')
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
