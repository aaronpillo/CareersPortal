<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
         @include('inc.links') {{--CSS Links in folder inc--}}
        {{--  Custom CSS designed especially for Home Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/customhome/home.css')?>" type="text/css">
        
        <title>{{config('app.name','PBO Global')}}</title>
    </head>
    <body>
        @include('inc.loadingScreen'){{--  This is the loading animation  --}}
        
        @include('inc.navbar')  {{--Navbar--}}
            <div id="contents"> {{-- This div is for wrapping up the whole content for loading screen   --}}
                <div id="fadeeffect" class="preload">

                    {{--  Header Image of Gallery Page --}}
                        <div class="parallax-container hide-on-small-only">
                            <div class="parallax">
                                <h3>Local Talent, Global Appeal</h3>
                                <img style="z-index: -1;" src=<?php echo asset("img/PBO.jpg")?>>
                            </div>
                        </div>
                    {{-- End of Header Image of Gallery Page  --}}

                    <div class="section white">                        
                        @yield('content') {{--   Content of Index  --}}
                        @yield('MapArea') {{--  PboGlobal Map  --}}
                    </div>

                    @include('inc.footer') {{--Footer--}}
                </div>
            </div>

        @include('inc.scripts') {{--JScript--}}
        <script type="text/javascript" src="<?php echo asset('js/customhome.js')?>"></script>

    </body>
</html>
