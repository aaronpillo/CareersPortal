<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
        {{--  Custom CSS designed especially for Home Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/customhome/home.css')?>" type="text/css">
        {{--  Custom CSS for Loading  --}}
        <link rel="stylesheet" href="<?php echo asset('css/loader.css')?>" type="text/css"> 
        {{--  FONT of the Website  --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        {{--  Font Awesome for Icons  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
        <title>{{config('app.name','PBO Global')}}</title>
    </head>
    <body>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo asset('js/customhome.js')?>"></script>
        
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpFIMwuKFSuEr-HQYMvEUqOCzCJt9CCu8&callback=initMap">
            // API Key for Google Map :)
        </script>

        {{--  This is the loading animation  --}}
        <div id="load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>

            <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
                <div id="fadeeffect" class="preload">

                    <div class="parallax-container hide-on-small-only">
                        <div class="parallax">
                            <h3>Local Talent, Global Appeal</h3>
                            <img style="z-index: -1;" src=<?php echo asset("img/PBO.jpg")?>>
                        
                        </div>
                    </div>

                    <div class="section white">                        
                        @yield('content')
                        @yield('MapArea')
                        
                    </div>
                    <!-- Footer -->
                    <footer class="page-footer">
                        <div class="footer-copyright">
                            <div class="container">
                                <center>
                                    <p>PBO Global © 2017 All Rights Reserved</p>
                                    <a href="#" class="fa fa-facebook  tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook"></a>
                                    <a href="#" class="fa fa-twitter  tooltipped" data-position="top" data-delay="50" data-tooltip="Twitter"></a>
                                    <a href="#" class="fa fa-linkedin  tooltipped" data-position="top" data-delay="50" data-tooltip="LinkedIn"></a>
                                </center> 
                            </div>
                        </div>       
                    </footer>
            </div>
        </div>
    </body>
</html>
