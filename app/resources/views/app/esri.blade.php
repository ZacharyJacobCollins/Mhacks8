<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
  <title>Get started with popups - 4.1</title>

  <style>
    html,
    body,
    #viewDiv {
      padding: 0;
      margin: 0;
      height: 100%;
      width: 100%;
    }

    #instruction {
      z-index: 99;
      position: absolute;
      top: 15px;
      left: 50%;
      padding: 5px;
      margin-left: -175px;
      height: 20px;
      width: 350px;
      background: rgba(25, 25, 25, 0.8);
      color: white;
    }
  </style>

  <link rel="stylesheet" href="https://js.arcgis.com/4.1/esri/css/main.css">
  <script src="https://js.arcgis.com/4.1/"></script>

  <script>
    require([
      "esri/tasks/Locator",
      "esri/Map",
      "esri/views/MapView",
      "esri/widgets/Track",
      "dojo/domReady!"
    ], function(
      Locator,
      Map,
      MapView,
      Track
    ) {

      // Set up a locator task using the world geocoding service
      var locatorTask = new Locator({
        url: "https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer"
      });

      // Create the Map
      var map = new Map({
        basemap: "streets-navigation-vector"
      });

      // Create the MapView
      var view = new MapView({
        container: "viewDiv",
        map: map,
        center: [-116.3031, 43.6088],
        zoom: 12
      });

      var track = new Track({
        view: view
      });
      view.ui.add(track, "top-left");

      // The sample will start tracking your location
      // once the view becomes ready
      view.then(function() {
        track.start();
      });

      /*******************************************************************
       * This click event sets generic content on the popup not tied to
       * a layer, graphic, or popupTemplate. The location of the point is
       * used as input to a reverse geocode method and the resulting
       * address is printed to the popup content.
       *******************************************************************/
      view.on("click", function(event) {
        // Get the coordinates of the click on the view
        var lat = Math.round(event.mapPoint.latitude * 1000) / 1000;
        var lon = Math.round(event.mapPoint.longitude * 1000) / 1000;

        view.popup.open({
          // Set the popup's title to the coordinates of the location
          title: "Reverse geocode: [" + lon + ", " + lat + "]",
          location: event.mapPoint // Set the location of the popup to the clicked location
        });

        // Display the popup
        // Execute a reverse geocode using the clicked location
        locatorTask.locationToAddress(event.mapPoint).then(function(
          response) {
          // If an address is successfully found, print it to the popup's content
          var address = response.address.Match_addr;
          view.popup.content = address;
        }).otherwise(function(err) {
          // If the promise fails and no result is found, print a generic message
          // to the popup's content
          view.popup.content =
            "No address was found for this location";
        });
      });
    });
  </script>
</head>

<body>
  <div id="viewDiv"></div>
  <div id="instruction">Click any location on the map to see its street address</div>
</body>

</html>
