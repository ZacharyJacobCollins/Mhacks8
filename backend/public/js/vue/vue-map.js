var map = new Vue({
    el: 'body',
    data: {
        pos: '', //your coordinates in format  { lat, lng }
        nodes: [],
    },
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

                    console.log('Your position detected');
                    console.log(pos);

                    //Set the data pos
                    this.pos = pos;

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
         *  Web worker polling and checking to see if any new updates within the area 
         * @return adds a new node to the array of nodes
        */
        poll: function() {

        }

    },

});