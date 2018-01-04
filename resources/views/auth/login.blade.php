<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
      @include('inc.links') {{--CSS Links in folder inc--}}
      {{--  Custom CSS designed especially for Home Layout  --}}
      <link rel="stylesheet" href="<?php echo asset('css/adminonly/customlogin.css')?>" type="text/css">
        
      <title>{{config('app.name','PBO Global')}}</title>
  </head>

  <body>

    {{-- Login CONTENT - start --}}
      <main>  
          <div class="container">
            <div class="row ">

              <div class="section"></div> 
                <center>
                  <div class="section"></div>
                  <div class="section"></div>

                    <div class="row col s2 l3"></div>
                    <div class="z-depth-1 white lighten-1 row col s8 l6" style="display: inline-block; padding: 32px 50px 0px 50px; border: 1px solid #EEE;">
                    
                      {{--  Form Login  --}}
                      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }} {{--security token--}}
                        
                        <div class='left-align row' > {{-- PBO Logo  --}}
                          <div><img src="/img/pbobig.png" width="68px" height="66px" ></div>
                        </div> 

                        <div class='left-align row'> 
                          <div><h5 class="indigo-text text-darken-4 "><b>Sign in,</b></h5></div>
                          <div ><b class="indigo-text text-darken-4">to Continue to Admin Page</b></div>
                        </div>
                        
                        {{--  Input Email Address  --}}
                          <div class='left-align row'>
                            <div class='input-field col s12 l12'>
                              <label>E-mail Address</label>
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                {{--validation for email address--}}
                                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  @endif
                                {{--end of validation for email address--}}
                            </div>
                          </div> 
                        {{-- End of Input Email Address  --}}
                            
                        {{--Input Password --}}
                          <div class='left-align row'>
                            <div class='input-field col s12 l12'>
                              <label>Password</label>
                              <input id="password" type="password" class="form-control" name="password" required>
                                {{--validation for password--}}  
                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif 
                                {{--End of validation for password--}}
                            </div> 
                          </div>
                        {{--  End of Input Password  --}}
                        <br/>
                        
                        {{--  Login Button  --}}
                          <center>
                            <div class='row'>
                              <button type="submit" class="btn btn-primary btn waves-effect waves-light" id="btnlogin"  >
                                  Login
                              </button>
                            </div>
                          </center>
                        {{-- End of Login Button  --}}

                      </form>
                      {{--End of Form Login  --}}
                    </div>  
                </center>
              <div class="section"></div>
            </div>
          </div>
      </main>
    {{--  CONTENT - end  --}}

    {{--JScripts --}}
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    {{--  End of JScripts  --}}
    
  </body>
</hmtl>
