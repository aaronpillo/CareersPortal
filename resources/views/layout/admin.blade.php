<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('inc.links') {{--CSS Links in folder inc--}}
        {{--  Custom CSS designed especially for Admin Page Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('/css/adminonly/adminpage.css')?>" type="text/css">
      
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
                            {{--End of Desktop view navbar right part  --}} 

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
                            {{--  End of mobvile vew narbar  --}}

                            {{--  Desktop view navbar  --}}
                                <div class="nav-content hide-on-small-only">
                                    <ul class="tabs tabs-transparent">
                                        <li class="tab col s3"><a href="#Finance">Finance & Accounting</a></li>
                                        <li class="tab col s3"><a href="#Legal">Legal Support Service</a></li>
                                        <li class="tab col s3"><a href="#IT">IT and IT-enabled Services</a></li>
                                        <li class="tab col s3"><a href="#Sales">Sales and Marketing Support Services</a></li>
                                    </ul>
                                </div>  {{--  nav-content hide-on-small-only  --}}  
                            {{--  End of Desktop view navbar  --}}

                    </div> {{--  nav-wrapper  --}}
                </nav>
            </div> {{--  navbar-fixed  --}}

                    <br>
                        <div class="container"> 
                            <div id="Finance" class="col s12">
                                @yield('Finance'){{--  Finance Content in adminpage.blade  --}}
                            </div>
                            <div id="Legal" class="col s12">
                                @yield('Legal'){{--  Legal Content  in adminblade.blade--}}
                            </div>
                            <div id="IT" class="col s12">
                                @yield('IT'){{--  IT Content in adminapage.blade  --}}
                            </div>
                            <div id="Sales" class="col s12">
                                @yield('Sales'){{--  Sales Content in adminpage.blade  --}}
                            </div>
                        </div> {{--  container  --}}

                        @include('inc.footer'){{--  Footer  --}}

        </div> {{--  contents  --}}

        @include('inc.scripts'){{--  JScripts  --}}
        <script type="text/javascript" src="<?php echo asset('/js/adminonly/adminpage.js')?>"></script>
        
    </body>
</html>
