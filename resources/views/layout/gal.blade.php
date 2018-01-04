<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
         @include('inc.links')  {{--CSS Links in folder inc--}}
        {{--  Custom CSS designed especially for Home Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/customhome/home.css')?>" type="text/css">
        
        <title>{{config('app.name','PBO Global')}}</title>
    </head>
    <body>
        
        @include('inc.loadingScreen'){{--  This is the loading animation  --}}
        @include('inc.navbar')  {{--Navbar--}}

        <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
                
            <!--Fixed Action Scroll up button -->
                <div class="fixed-action-btn"> 
                    <a href="#scroll" id="upbutton" class="btn-floating btn-large indigo darken-4">
                    <i class="large material-icons">arrow_upward</i>
                    </a>
                </div>
            <!-- End of Fixed Action Scroll up button-->

            <!-- Tap Target Structure -->
                <div style="z-index: -1;" class="tap-target indigo lighten-4" data-activates="upbutton">
                    <div class="tap-target-content">
                    <h5>Toggle Me</h5>
                    <p>If you want to auto scroll up </p>
                    </div>
                </div>
            <!-- End of Tap Target Structure -->

            <div id="fadeeffect" class="preload">
                {{--  Header Image of Gallery Page --}}
                    <div class="parallax-container hide-on-small-only">
                        <div class="parallax">
                            <h3 id="scroll">Gallery</h3>
                            <img style="z-index: -1;" src=<?php echo asset("img/Pbo1.jpg")?>>
                        </div>
                    </div>
                {{-- End of Header Image of Gallery Page  --}}

                    <div class="section white">
                        <div class="row container">
                            @yield('content')<!-- Content of Gallery -->
                        </div>
                    </div>

                    <div class="parallax-container hide-on-small-only">
                        <div class="parallax"><img style="z-index: -1;" src=<?php echo asset("img/PBO.jpg")?>></div>
                        <h3>BE A REAL PRO! BE ONE OF US!</h3>
                    </div>

                     @include('inc.footer') {{--Footer--}}
            </div>
        </div> {{--End of div class='contents'--}}

        @include('inc.scripts') {{--JScripts--}}
        <script type="text/javascript" src="<?php echo asset('js/customgal.js')?>"></script>
        
    </body>
</html>
