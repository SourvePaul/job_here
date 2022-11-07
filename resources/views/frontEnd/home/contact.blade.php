@extends('frontEnd.master')
@section('title')
    Contact
@endsection
@section('content')
    <!--Breadcrumb Banner Area Start-->
    <div class="breadcrumb-banner-area pt-94 pb-85 bg-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-text">
                        <h2 class="text-center">Contact Us</h2>
                        <div class="breadcrumb-bar">
                            <ul class="breadcrumb text-center m-0">
                                <li><a href="{{route('/')}}">Home</a></li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Breadcrumb Banner Area-->
    <!--Start of Google Map-->
    <div class="map-conact-form-area fix ptb-130 ptb-sm-60">
        <div class="container">
            <div class="google-map-area">
                <!--  Map Section -->
                <div id="contacts" class="map-area">
                    <div id="googleMap" style="width:100%;height:485px;"></div>
                </div>
            </div>
        </div>
        <!--Start of Contact Form And info-->
        <div class="container">
            <div class="gray-bg">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="contact-info-wrapper d-flex justify-content-center flex-column light-gray-bg">
                            <div class="contact-info-box">
                                <div class="contact-info text-center">
                                    <div class="single-contact-info">
                                        <div class="single-contact-icon">
                                            <i class="zmdi zmdi-email"></i>
                                        </div>
                                        <div class="single-contact-text">
                                            <span class="block">info@example.com</span>
                                            <span class="block">info@example.com</span>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="single-contact-icon">
                                            <i class="zmdi zmdi-phone"></i>
                                        </div>
                                        <div class="single-contact-text">
                                            <span class="block">+012 345 678 102 </span>
                                            <span class="block">+013 345 628 112 </span>
                                        </div>
                                    </div>
                                    <div class="single-contact-info">
                                        <div class="single-contact-icon">
                                            <i class="zmdi zmdi-pin"></i>
                                        </div>
                                        <div class="single-contact-text">
                                            <span class="block">House 09, Road 32, Mohammadpur,</span>
                                            <span class="block">Dhaka-1200, UK</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="followus">
                                    <h4>Follow Us</h4>
                                    <div class="social-links">
                                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="contact-form">
                            <div class="contact-form-wrapper">
                                <h4>Get In Touch</h4>
                                <form id="contact-form" action="https://htmldemo.net/jobhere/jobhere-v1/mail.php" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="text" name="name" id="name" class="pl-20" placeholder="Name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" name="email" id="email" class="pl-20" placeholder="Email">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="text" id="sub" class="pl-20" placeholder="Subject">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="mb-10"></textarea>
                                        </div>
                                        <p class="form-messege"></p>
                                        <div class="col-12">
                                            <button type="submit" class="button submit-btn">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Google Map-->
    <!--End of Contact Form ANd info-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM"></script>

    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.761226, 90.420766), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#26ae61"
                    }]
                },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#dde6e8"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [{
                            "saturation": -100
                        },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [{
                            "color": "#26ae61"
                        },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "lightness": "-12"
                        },
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#26ae61"
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googleMap');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.761226, 90.420766),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
@endsection
