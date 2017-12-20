<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        {{--  This form is for emergency only!  --}}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--  Bootstrap CDN  --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        {{--  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^  --}}
        {{--  Custom CSS for Loading  --}}
        <link rel="stylesheet" href="<?php echo asset('css/loader.css')?>" type="text/css"> 
         <link rel="stylesheet" href="<?php echo asset('css/adminonly/bstrapaddedit.css')?>" type="text/css"> 
        {{--  FONT of the Website  --}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">     
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
                    <h4 class="modal-title">Notice:</h4>
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
             <br>
             <div class="container">
                {!! Form::open(['class'=>'col s12 m12 l12','action'=>'JobsController@store', 'method'=>'POST']) !!}
                    <br>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="sel1">Select Department (select one):</label>
                            {{Form::select('cbo_dept_name', 
                                [
                                    'Finance and Accounting' => 'Finance and Accounting', 
                                    'Legal Support Service' => 'Legal Support Service',
                                    'IT and IT-Enabled Services' => 'IT and IT Enabled-Services',
                                    'Sales and Marketing Admin' => 'Sales and Marketing Admin',
                                ], null, ['id'=>'sel1', 'class'=>'browser-default form-control', 'placeholder' => 'Choose a Department'])
                            }}
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="JT">Job Title:</label>
                                {{Form::text('txt_job_title','',['id'=>'JT', 'class'=>'form-control validate'])}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="jdesc">Job Description:</label>
                                {{Form::textarea('txt_job_description','',['id'=>'jobdesc', 'class'=>'form-control','rows' => '5'])}}
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="jadv">Advantages:</label>
                                {{Form::textarea('txt_advantages', '',['class'=>'form-control','id'=>'jAdv', 'rows'=>'5'])}}
                            </div>
                        </div>    
                    </div>


                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="respo">Responsibilities:</label>
                                {{Form::textarea('txt_responsibilities', '', ['id'=>'Respon','class'=> 'form-control', 'rows'=>'5'])}}
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="GenQ">General Qualifications:</label>
                                {{Form::textarea('txt_general_qualifications', '', ['id'=>'genQ', 'class'=> 'form-control', 'rows'=>'5' ])}}
                            </div>
                        </div>    
                    </div>

                    

                     <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="req">Requirements:</label>
                            {{Form::textarea('txt_requirements', '', ['class'=> 'form-control', 'id'=>'requi', 'rows'=>'5'])}}
                        </div>
                    </div>
                    <br><br>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            {{Form::submit('Add Job',['class'=>'btn btn-primary', 'value'=>'Yes'])}}
                            <a href="/admin"><button type="button" class="btn btn-default">Return Home</button></a>
                        </div>
                    </div>

                </div>
                {!! Form::close() !!}


             </div> {{--  class container  --}}
             
        </div>
        <script type="text/javascript" src="<?php echo asset('js/adminonly/btsrpadd.js')?>"></script>
        
        {{--  SCRIPT for CK-Editor  --}}
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'jobdesc' );
            CKEDITOR.replace( 'jAdv' );
            CKEDITOR.replace( 'Respon' );
            CKEDITOR.replace( 'genQ' );
            CKEDITOR.replace( 'requi' );
        </script>
    </body>
</html>
