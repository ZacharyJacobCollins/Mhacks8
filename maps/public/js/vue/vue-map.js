var map = new Vue({
    el: 'body',
    ready: function() {
        console.log('map component loaded');
        this.initMap();
    },  
    methods: {
        //Initialize google map
        initMap: function() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 6
            });
            var infoWindow = new google.maps.InfoWindow({ map: map });

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found.');
                    map.setCenter(pos);
                }, function() {
                    this.handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                this.handleLocationError(false, infoWindow, map.getCenter());
            }
        },
        //Initialize google map
        handleLocationError: function(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
        },
        /**
         * 
        */
    },

});