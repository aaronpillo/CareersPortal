<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo asset('css/materialize.min.css')?>" type="text/css">
         {{--  Custom CSS designed especially for Add Page Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/adminonly/addeditpage.css')?>" type="text/css">
        {{--  Custom CSS for Loading  --}}
        <link rel="stylesheet" href="<?php echo asset('css/loader.css')?>" type="text/css"> 
        {{--  FONT of the Website  --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        {{--  Font Awesome for Icons  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
        <title>{{config('app.name','PBO Global')}}</title>
    </head>
    <body>  
        {{--  This is the loading animation  --}}
        <div id="load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>

        {{--  Modal for Confirmation for saving the job --}}
        <div id="modal" class="modal">
            <div id="mcontent" class="modal-content"> 
                {{--  <h4>Notice:</h4>  --}}
                <p>Do you want to save changes?</p>
            </div>
            <div class="modal-footer">
                <a href="#!" onclick="" id="agree" class="modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
            </div>
        </div>

        {{--  Modal for Confirmation for Activating the Job   --}}
        <div id="modal1" class="modal">
            <div id="mcontent" class="modal-content"> 
                {{--  <h4>Notice:</h4>  --}}
                <p>Are you sure you want to activate this Job?</p>
            </div>
            <div class="modal-footer">
                <a href="#!" onclick="disact()" id="agree" class="modal-action modal-close waves-effect waves-green btn-flat">Yes</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
            </div>
        </div>

        <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
            {!! Form::open(['action'=>'JobsController@store', 'method'=>'POST']) !!}
                <div class="row">
                    <form class="col s12 m12 l12">
                        <br>
                        <div class="input-field col s12 m6 l6">
                            {{Form::select('cbo_dept_name', 
                                [
                                    'Finance and Accounting' => 'Finance and Accounting', 
                                    'Legal Support Service' => 'Legal Support Service',
                                    'IT and IT Enabled Services' => 'IT and IT Enabled Services',
                                    'Sales and Marketing Admin' => 'Sales and Marketing Admin',
                                ], null, ['placeholder' => 'Choose a Department'])
                            }}
                        </div>

                        <div class="input-field col s12 m6 l6">
                            <input disabled id="jobtitle" type="text" class="validate">
                            <label for="JobTitle">Job Title</label>
                        </div>

                        <div class="input-field col s12 m8 l8">
                            <textarea id="jobdesc" class="materialize-textarea"></textarea>
                            <label for="JobDesc">Job Description</label>
                        </div>

                        <div class="input-field col s12 m4 l4">
                            <textarea id="adv" class="materialize-textarea"></textarea>
                            <label for="Advantages">Advantages</label>
                        </div>

                        <div class="input-field col s12 m8 l8">
                            <textarea id="respon" class="materialize-textarea"></textarea>
                            <label for="Responsibilities">Responsibilities</label>
                        </div>

                        <div class="input-field col s12 m4 l4">
                            <textarea id="genQ" class="materialize-textarea"></textarea>
                            <label for="GenQ">General Qualifications</label>
                        </div>

                        <div class="input-field col s12 m8 l8">
                            <textarea id="req" class="materialize-textarea"></textarea>
                            <label for="Requirements">Requirements</label>
                        </div>

                        <div class="col s12 m4 l4">  
                            <a id="buttonact1" data-target="modal" class="btn modal-trigger"  class="waves-effect waves-light btn">Update Job</a>
                            <br><br>
                            <a id="buttonact" data-target="modal1" class="btn modal-trigger" class="waves-effect waves-light btn">Activate Job</a>
                            <br><br>
                            <a href="\admin"id="buttonact" class="waves-effect waves-light indigo darken-3 btn">Return</a>
                            
                        </div>

                    </form>
                </div>
            {!! Form::close() !!}
        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo asset('js/adminonly/adminpage.js')?>"></script>
    </body>
</html>
