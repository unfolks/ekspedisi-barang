<x-admin-layout>
    <div class="google-map-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="google-map-single">
                        <div id="map2"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="google-map-single sm-res-mg-t-30">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="google-map-single mg-t-30">
                        <div id="map86"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="google-map-single mg-t-30">
                        <div id="map7"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('jsdashboard')
        <script src="{{ asset('js/google.maps/google.maps2-active.js') }}"></script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVOIQ3qXUCmKVVV7DVexPzlgBcj5mQJmQ&callback=initMap"></script>
    @endpush
</x-admin-layout>


