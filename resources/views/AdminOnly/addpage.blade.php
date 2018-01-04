<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('inc.links')
         {{--  Custom CSS designed especially for Add Page Layout  --}}
        <link rel="stylesheet" href="<?php echo asset('css/adminonly/addeditpage.css')?>" type="text/css">
   
        <title>{{config('app.name','PBO Global')}}</title>
    </head>
    <body>
        {{--  Modal  --}}
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    {{--  Modal Content  --}}
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Notice</h4>
                            </div> {{--  modal-header  --}}
                            
                            <div id="mcontent" class="modal-body">
                                <p>Are you sure you want to add this Job?</p>
                            </div>{{--  modal-body  --}}

                            <div class="modal-footer">
                                <button  onclick="disact()"  type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>{{--  modal-footer  --}}
                        </div>
                    {{--  End of Modal Content  --}}
                </div>
            </div>
        {{--End of Modal  --}}

        @include('inc.loadingScreen'){{--  This is the loading animation  --}}

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

                        <div class="input-field col s12 m6 l6"> 
                            {{Form::text('txt_job_rank','',['class'=>'form-control validate', 'id'=>'jobrank'])}}
                            {{Form::label('lbl_job_rank','Job Rank',['for'=>'JobRank'])}}
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
                        {{--  End of Modal for Confirmation for saving the job --}}    
                    </div>{{--  row  --}}
                </form> 
            {!! Form::close() !!}
        </div>{{--  contents  --}}

        <div class="fixed-action-btn">
            <a href="\admin"class="btn-floating btn-large indigo darken-3">
            <i class="large material-icons">home</i>
            </a>
        </div>{{--  fixed-action-btn  --}}

       @include('inc.scripts'){{--  JScripts  --}}
        <script type="text/javascript" src="<?php echo asset('js/adminonly/adminpage.js')?>"></script>
    </body>
</html>
