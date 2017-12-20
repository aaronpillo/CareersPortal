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
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Notice</h4>
                </div>
                <div id="mcontent" class="modal-body">
                    <p>Are you sure you want to add this Job?</p>
                </div>
                <div class="modal-footer">
                    <button  onclick="disact()"  type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
                </div>

            </div>
        </div>
        {{--  This is the loading animation  --}}
        <div id="load">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>

        <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
            {!! Form::open(['class'=>'col s12 m12 l12','action'=>'JobsController@store', 'method'=>'POST']) !!}
              <form>
                <div class="row">
                        <br>
                        <div class="input-field col s12 m6 l6">
                            <select>
                                <option value="" disabled selected>Choose your option</option>
                                <option value="1">Finance and Accounting</option>
                                <option value="2">Legal Support Service</option>
                                <option value="3">IT and IT Enabled Services</option>
                            </select>
                            
                        </div>
                        <div class="input-field col s12 m6 l6">
                            
                            {{Form::text('txt_job_title','',['class'=>'form-control validate', 'id'=>'jobtitle'])}}
                            {{Form::label('lbl_job_title','Job Title',['for'=>'JobTitle'])}}

                        </div>

                        <div class="input-field col s12 m6 l6">
                             {{Form::label('lbl_job_description','Job Description',['for'=>'JobDesc'])}}
                             {{Form::textarea('txt_job_description','',['class'=>'materialize-textarea','id'=>'jobdesc'])}}
                        </div>

                        <div class="input-field col s12 m6 l6">
                            {{Form::textarea('txt_advantages', '',['class'=>'materialize-textarea','id'=>'Adv'])}}
                            {{Form::label('lbl_advantages','Advantages',['for'=>'Advantages'])}}

                        </div>

                        <div class="input-field col s12 m6 l6">
                            {{Form::label('lbl_responsibilities', 'Responsibilities',['class'=>'Responsibilities'])}}
                            {{Form::textarea('txt_responsibilities', '', ['class'=> 'materialize-textarea', 'for'=>'Responsibilities'])}}
                        </div>

                        <div class="input-field col s12 m6 l6">
                            {{Form::label('lbl_general_qualifications', 'General Qualifications',['for'=>'GenQ'])}}
                            {{Form::textarea('txt_general_qualifications', '', ['class'=> 'materialize-textarea', 'id'=>'genQ'])}}
                        </div>

                        <div class="input-field col s12 m6 l6">
                            {{Form::label('lbl_requirements', 'Requirements',['for'=>'Requirements'])}}
                            {{Form::textarea('txt_requirements', '', ['class'=> 'materialize-textarea', 'id'=>'Req'])}}
                        </div>

                        <div class="col s12 m4 l4">  
                            <a id="buttonact" data-target="modal1" class="btn modal-trigger" class="waves-effect waves-light btn">Add Job</a>
                            <br><br>
                            <a id="buttonact2"class="waves-effect waves-light btn">CLEAR ALL</a>
                        </div>

                         {{--  Modal for Confirmation for saving the job --}}
                        <div id="modal1" class="modal">
                            <div id="mcontent" class="modal-content"> 
                                {{--  <h4>Notice:</h4>  --}}
                                <p>Do you want to submit this job?</p>
                            </div>
                            <div class="modal-footer">
                                {{Form::submit('Submit',['class'=>'btn btn-primary', 'value'=>'Yes'])}}
                                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">No</a>
                            </div>
                        </div>

                 </form>   
                </div>
            {!! Form::close() !!}
        </div>

        <div class="fixed-action-btn">
            <a href="\admin"class="btn-floating btn-large indigo darken-3">
            <i class="large material-icons">home</i>
            </a>
        </div>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo asset('js/adminonly/adminpage.js')?>"></script>
    </body>
</html>
