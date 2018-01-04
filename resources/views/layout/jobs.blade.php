<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
         @include('inc.links'){{--CSS Links in folder inc--}}
        {{--  Custom CSS designed especially for Admin page Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/adminonly/adminpage.css')?>" type="text/css">
         
        <title>{{config('app.name','PBO Global')}}</title>
    </head>
    <body>
        
        @include('inc.loadingScreen'){{--  This is the loading animation  --}}

    <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
            <div class="navbar-fixed">
                <nav id="uphere">
                    <div class="nav-wrapper">
                        <a href="index.php" class="brand-logo"><img src="/img/PBOLogo.png"></a>{{-- pbo Logo  --}}
                        <a href="#" data-activates="mobile-demo" class="button-collapse">{{--  Menu button on mobile view  --}}
                            <i class="material-icons">menu</i>
                        </a>
                        {{--  Desktop view navbar right part  --}}
                            <ul class="right hide-on-med-and-down">
                                <li>
                                    <a href="/admin" id="addjob" class="waves-effect waves-light btn indigo darken-3">BACK</a>
                                </li>
                                <li>
                                    @yield('editButton') {{--  content from jobs.show  --}}
                                </li>
                                <li>
                                    <a class="dropdown-trigger" href="#!" data-target="dropdown1">
                                    Log Out
                                    <i class="material-icons right">exit_to_app</i>
                                    </a>
                                </li>
                            </ul>
                        {{--  End of Desktop view navbar  --}}

                        {{--  Mobile view side navbar  --}}   
                            <ul class="side-nav" id="mobile-demo">
                                <li>
                                    <div class="user-view">
                                        <div class="background" style="opacity: 0.7;">
                                            <img src=<?php echo asset("img/mini_pbo.jpg")?>>
                                        </div>
                                        <a href="#!"><img class="circle" src=<?php echo asset("img/PBOLogo.png")?>></a>
                                        <a href="#!"><span class="white-text name">PBO Global</span></a>
                                        <a href="#!s" ><span class="white-text email">careers@pboglobal.com.au</span></a>
                                    </div>{{--  user-view  --}}
                                </li>
                                <li class="red darken-2"><a href="#">Log Out</a></li>
                            </ul>
                        {{--  Mobile view side navbar  --}}
                    </div>
                </nav>
            </div>{{--  navbar-fixed  --}}

                    <br>
                    <div class="container"> 
                        @yield('content'){{--  content in jobs.show  --}}
                    </div>
        
                   @include('inc.footer'){{--  Footer  --}}
            
    </div>{{--  contents  --}}

        @include('inc.scripts') {{--  JScripts  --}}
        <script type="text/javascript" src="<?php echo asset('js/adminonly/adminpage.js')?>"></script>
    </body>
</html>
