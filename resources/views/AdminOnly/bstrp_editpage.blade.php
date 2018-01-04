<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('inc.job_links'){{--  Links bootstrap in inc folder  --}}
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
                    {{--  Modal content  --}}
                </div>
            </div>
        {{--  End of Modal  --}}        

        @include('inc.loadingScreen'){{--  This is the loading animation  --}}

        <div id="contents">{{-- This div is for wrapping up the whole content for loading screen   --}}
             <br>
             <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label for="sel1">Select Field (select one):</label>
                        <select class="form-control" id="sel1" disabled>
                            <option>Finance and Accounting</option>
                            <option>Legal Support Service</option>
                            <option>IT and IT Enabled Services</option>
                            <option>Sales and Marketing Support Services</option>
                        </select>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="JT">Job Title:</label>
                            <input type="text" class="form-control" id="jt" disabled>
                        </div>
                    </div>
                </div> {{--  class row  --}}

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
                </div> {{--  class row  --}}

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
                </div> {{--  class row  --}}

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="req">Requirements:</label>
                            <textarea class="form-control" rows="5" id="requi"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="JR">Job Rank:</label>
                            <input type="number" class="form-control" id="jr">
                        </div>
                    </div>    
                    
                    <br><br>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            <button data-toggle="modal" data-target="#myModal" id="buttonact" type="button" class="btn btn-default">Activate Job</button>
                            <button type="button" class="btn btn-default">Return Home</button>
                        </div>
                    </div>
                </div> {{--  class row  --}}

             </div>{{--  class container  --}}  
        </div> {{--  id contents  --}}

        {{--  JScripts  --}}
        <script type="text/javascript" src="<?php echo asset('js/adminonly/btsrpadd.js')?>"></script>
    </body>
</html>
