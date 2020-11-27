<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
ようこそ<b>[{{$loginUser->code}}] {{$loginUser->name}}</b>さん
<div id="app">
  <example-component></example-component>
</div>
<script src=" {{ mix('js/app.js') }} "></script>
</body>
<body>