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
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="sel1">Select Field (select one):</label>
                        <select class="form-control" id="sel1">
                            <option>Finance and Accounting</option>
                            <option>Legal Support Service</option>
                            <option>IT and IT Enabled Services</option>
                            <option>Sales and Marketing Support Services</option>
                        </select>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="JT">Job Title:</label>
                            <input type="text" class="form-control" id="jt">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="jdesc">Job Description:</label>
                            <textarea class="form-control" rows="5" id="jobdesc"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="jadv">Advantages:</label>
                            <textarea class="form-control" rows="5" id="Jadv"></textarea>
                        </div>
                    </div>    
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="respo">Responsibilities:</label>
                            <textarea class="form-control" rows="5" id="Respon"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="GenQ">General Qualifications:</label>
                            <textarea class="form-control" rows="5" id="genQ"></textarea>
                        </div>
                    </div>    
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="req">Requirements:</label>
                            <textarea class="form-control" rows="5" id="requi"></textarea>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Job</button>
                            <button type="button" class="btn btn-default">Return Home</button>
                        </div>
                    </div>

                </div>

             </div>
             
        </div>
        <script type="text/javascript" src="<?php echo asset('js/adminonly/btsrpadd.js')?>"></script>
    </body>
</html>
