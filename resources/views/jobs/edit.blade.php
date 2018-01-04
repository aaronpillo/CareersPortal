<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('inc.job_links')  {{-- CSS Links in inc folder  --}}
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
                            <p>Are you sure you want to activate this Job?</p>
                        </div>
                        <div class="modal-footer">
                            <button  onclick="disact()"  type="button" class="btn btn-default" data-dismiss="modal">Yes</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>
                    {{--  End of Modal content  --}}  
                </div>
            </div>
        {{--End of Modal  --}}

        @include('inc.loadingScreen'){{--  This is the loading animation  --}}

        <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
            <br>
            <div class="container">
                {!! Form::open(['action'=>['JobsController@update', $job->job_id], 'method'=>'POST']) !!}
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
                                ], $job->dept_name, ['id'=>'sel1', 'class'=>'browser-default form-control', 'placeholder' => 'Choose a Department'])
                            }}
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="JT">Job Title:</label>
                                {{Form::text('txt_job_title',$job->job_title,['id'=>'JT', 'class'=>'form-control validate'])}}
                            </div>
                        </div>
                    </div>{{--  row  --}}

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="jdesc">Job Description:</label>
                                {{Form::textarea('txt_job_description',$job->job_description,['id'=>'jobdesc', 'class'=>'form-control','rows' => '5'])}}
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="jadv">Advantages:</label>
                                {{Form::textarea('txt_advantages', $job->advantages,['class'=>'form-control','id'=>'jAdv', 'rows'=>'5'])}}
                            </div>
                        </div>    
                    </div> {{--  row  --}}


                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="respo">Responsibilities:</label>
                                {{Form::textarea('txt_responsibilities', $job->responsibilities, ['id'=>'Respon','class'=> 'form-control', 'rows'=>'5'])}}
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="GenQ">General Qualifications:</label>
                                {{Form::textarea('txt_general_qualifications', $job->general_qualifications, ['id'=>'genQ', 'class'=> 'form-control', 'rows'=>'5' ])}}
                            </div>
                        </div>    
                    </div> {{--  row  --}}

                    

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="req">Requirements:</label>
                                {{Form::textarea('txt_requirements', $job->requirements, ['class'=> 'form-control', 'id'=>'requi', 'rows'=>'5'])}}
                            </div>
                        </div>
                        <br><br>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="JR">Job Rank:</label>
                                {{Form::number('number_job_rank',$job->rank,['id'=>'JR', 'class'=>'form-control validate'])}}
                            </div>
                        </div>     

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::submit('Save Changes',['class'=>'btn btn-primary', 'value'=>'Yes'])}}
                            <?php
                            echo("
                                <a href=\"/admin/job_opportunities/".$job->job_id."\"><button type=\"button\" class=\"btn btn-default\">Cancel Changes</button></a>
                            ");
                            ?>
                            </div>
                        </div>
                    </div>{{--  row  --}}
                {!! Form::close() !!}
            </div> {{-- class container  --}}
        </div>{{-- contents --}}
        
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
