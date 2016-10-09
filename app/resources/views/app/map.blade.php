<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="/css/mapstyle.css">

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <title>TBD</title>
</head>

<body>
      <!-- The Gogle Map -->
      <div id="map"></div>

</body>

<footercomponent>

    <!-- Jquery -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <!-- Vue js -->
    <script src="/js/vue/vue.min.js"></script>
    <!-- Google Maps -->
    <script src="/js/vue/vue-app.js"></script>
    <!-- callback, LAST google maps script -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmDjLF1JlR93gIzz4vfVw7JCNYHY0HuTk&callback=app.init"></script>
    
</footercomponent>

</html>
