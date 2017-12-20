<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo asset('/css/materialize.min.css')?>" type="text/css">
        {{--  Custom CSS designed especially for Home Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('/css/adminonly/adminpage.css')?>" type="text/css">
        {{--  Custom CSS for Loading  --}}
        <link rel="stylesheet" href="<?php echo asset('/css/loader.css')?>" type="text/css"> 
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
        <script type="text/javascript" src="<?php echo asset('/js/adminonly/adminpage.js')?>"></script>
        
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
                                <a href="/admin/job_opportunities/create" id="addjob" class="waves-effect waves-light btn indigo darken-3">ADD JOB</a>
                             </li>
                             <li>
                                <a href="{{ route('logout') }}"
                                    class="dropdown-trigger"
                                    data-target="dropdown1"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                    <i class="material-icons right">exit_to_app</i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                
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
                                </div> {{-- user-view --}}
                            </li>
                            <div class="nav-content show-on-small">
                                    <li><a href="#Finance">Finance & Accounting</a></li>
                                    <li><a href="#Legal">Legal Support Service</a></li>
                                    <li><a href="#IT">IT and IT-enabled Services</a></li>
                                    <li><a href="#Sales">Sales and Marketing Support</a></li>
                            </div>    {{-- nav-content show-on-small   --}}

                            <li class="red darken-2"><a href="#">Log Out</a></li>
                        </ul>

                        <div class="nav-content hide-on-small-only">
                            <ul class="tabs tabs-transparent">
                                <li class="tab col s3"><a href="#Finance">Finance & Accounting</a></li>
                                <li class="tab col s3"><a href="#Legal">Legal Support Service</a></li>
                                <li class="tab col s3"><a href="#IT">IT and IT-enabled Services</a></li>
                                <li class="tab col s3"><a href="#Sales">Sales and Marketing Support Services</a></li>
                            </ul>
                        </div>  {{--  nav-content hide-on-small-only  --}}  
                    </div> {{--  nav-wrapper  --}}
                </nav>
            </div> {{--  navbar-fixed  --}}

            <br>
            <div class="container"> 
                <div id="Finance" class="col s12">
                    @yield('Finance')
                </div>
                <div id="Legal" class="col s12">
                    @yield('Legal')
                </div>
                <div id="IT" class="col s12">
                    @yield('IT')
                </div>
                <div id="Sales" class="col s12">
                    @yield('Sales')
                </div>
            </div> {{--  container  --}}

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
                    </div> {{--  container  --}}
                </div> {{--  footer-copyright  --}}       
            </footer>

        </div> {{--  contents  --}}
    </body>
</html>
