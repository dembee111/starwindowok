       <!-- google map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
        <script>
            function initialize() {
                var mapOptions = {
                    zoom: 15,
                    scrollwheel: false,
                    center: new google.maps.LatLng(47.897279, 106.870987),
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#222222"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#222222"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#222222"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#222222"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#222222"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#222222"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":17}]}]
                };

                var map = new google.maps.Map(document.getElementById('googleMap'),
                    mapOptions);


                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation: google.maps.Animation.BOUNCE,
                    icon: '{{ asset('assets2/images/map.png')}}',
                    map: map
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>