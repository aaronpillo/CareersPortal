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
        <link rel="stylesheet" href="<?php echo asset('css/adminonly/adminpage.css')?>" type="text/css">
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
        <script type="text/javascript" src="<?php echo asset('js/adminonly/adminpage.js')?>"></script>
        
        {{--  This is the loading animation  --}}
        <div id="load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>

    <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
            <div class="navbar-fixed">
                <nav id="uphere">
                    <div class="nav-wrapper">
                        <a href="index.php" class="brand-logo"><img src="/img/PBOLogo.png"></a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                             <li>
                                <a href="/admin" id="addjob" class="waves-effect waves-light btn indigo darken-3">BACK</a>
                             </li>
                             <li>
                                @yield('editButton')
                             </li>
                             <li>
                                <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                                Log Out
                                <i class="material-icons right">exit_to_app</i>
                                </a>
                            </li>
                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li>
                                <div class="user-view">
                                    <div class="background" style="opacity: 0.7;">
                                        <img src=<?php echo asset("img/mini_pbo.jpg")?>>
                                    </div>
                                    <a href="#!"><img class="circle" src=<?php echo asset("img/PBOLogo.png")?>></a>
                                    <a href="#!"><span class="white-text name">PBO Global</span></a>
                                    <a href="#!s" ><span class="white-text email">careers@pboglobal.com.au</span></a>
                                </div>
                            </li>
                            
                            <li class="red darken-2"><a href="#">Log Out</a></li>
                        </ul>

                        
                    </div>
                </nav>
            </div>

                    <br>
                    <div class="container"> 
                        @yield('content')
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
    </body>
</html>
