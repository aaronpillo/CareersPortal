{{--  
    DASHBOARD PAGE:
        *This is the landing page after logging in
        *This is the main page of the admin
        *This is where you view the job openings'
         basic information, status, and ranking     
--}}

@extends('layout.admin')

{{--  Sections inside <head> tag  --}}
    @section('title')
        {{--  PAGE TITLE  --}}
        <title>{{config('app.name','PBO Global Careers')}} ADMIN - Dashboard</title>
    @endsection    

{{--  Sections in <body> tag  --}}
    @section('bgphoto')         {{--  loaded from inc.navbar  --}}
        {{--  Mobile-view menu image  --}}

    @endsection

    @section('navbarButtons')
        {{--  Buttons found on the NavBar  --}}
        <li>
            <a href="/admin/job_opportunities/create" id="addjob" class="waves-effect waves-light btn indigo darken-3">ADD JOB</a>
        </li>
    @endsection
    
    {{--  PAGE HEADER  --}}
    @section('header')
        <ul class="side-nav" id="mobile-demo">
            <li>
                <div class="user-view">
                    <div class="background" style="opacity: 0.7;">
                        <img src=<?php echo asset("img/mini_pbo.jpg")?>>
                    </div>
                    <a href="#!"><img class="circle" src=<?php echo asset("img/PBOLogo.png")?>></a>
                    <a href="#!"><span class="white-text name">PBO Global</span></a>
                    <a href="#!" ><span class="white-text email">careers@pboglobal.com.au</span></a>
                </div> {{-- user-view --}}
            </li>
            <div class="nav-content show-on-small">
                @foreach ($departments as $department)
                    <li><a href= "#<?php echo($department['dept_abbrev']); ?>" ><?php echo($department['dept_name'])?></a></li>
                @endforeach
            </div>    {{-- nav-content show-on-small   --}}

            <li class="red darken-2"><a href="#">Log Out</a></li>
        </ul>

        <div class="nav-content hide-on-small-only">
            <ul class="tabs tabs-transparent">
                {{--  FROM DB  --}}
                @foreach ($departments as $department)
                    <li class="tab col s3"><a href= "#<?php echo($department['dept_abbrev']); ?>" ><?php echo($department['dept_name'])?></a></li>
                @endforeach
                {{-- FROM DB  --}} 
            </ul>
        </div>  {{--  nav-content hide-on-small-only  --}}  
    @endsection('header')

    {{--  PAGE BODY  --}}
    @section('content')
        @foreach($departments as $department)
    
    <?php echo("
            <div id=\"".$department->dept_abbrev."\" class=\"col s12\">
    "); ?>
                
                <h4>{{$department->dept_name}}</h4>
                
                <ul class="collapsible popout" data-collapsible="accordion">
                    @foreach($jobs->where('dept_name', $department->dept_name)->sortBy('rank') as $job)
                        <li>
                            <div class="collapsible-header active">
                                <i class="material-icons">filter_drama</i>
                            <?php
                                echo("#".$job->rank." ");
                            ?>
                                {{$job->job_title}}
                            
                                <?php
                                    if(($job->isHiring) == 0)
                                        echo("<span id=\"urgentTag\" class=\"badge black\">DEACTIVATED</span>");        
                                ?>
                                <?php
                                    if(($job->isUrgent) == 1)
                                        echo("<span id=\"urgentTag\" class=\"badge red\">Urgent!</span>");        
                                ?>
                            </div>
                            <div class="collapsible-body">
                                <span>
                                    
                                    {!!$job->job_description!!}
                                </span>   
                                <br><br>
                            
                            <?php echo("
                                <a href=\"/admin/job_opportunities/".$job['job_id']."\" class=\"waves-effect waves-light btn indigo darken-4 btn\">
                            "); ?>
                                    View Details
                                </a>
                            <?php
                            echo("
                                <a href=\"/admin/job_opportunities/".$job['job_id']."/edit\" class=\"waves-effect waves-light btn indigo darken-4 btn\">     
                            ");
                            ?>
                                    Edit
                                </a>
                            <?php 
        
                            if (($job->isHiring) == 1)
                            {    
                                echo("
                                <a href=\"/admin/job_opportunities/".$job['job_id']."/deactivate\" class=\"waves-effect waves-light btn red\">
                                    Deactivate Job
                                </a>"); 
                            }
                            else
                            {
                                echo("
                                <a href=\"/admin/job_opportunities/".$job['job_id']."/activate\" class=\"waves-effect waves-light btn green darken-4\">
                                    Activate Job
                                </a>"); 
                            }
        
                            if (($job->isUrgent) == 1)
                            {    
                                echo("
                                <a href=\"/admin/job_opportunities/".$job['job_id']."/unmarkUrgent\" class=\"waves-effect waves-light btn green darken-4\">
                                    Unmark as Urgent
                                </a>"); 
                            }
                            else
                            {
                                echo("
                                <a href=\"/admin/job_opportunities/".$job['job_id']."/markUrgent\" class=\"waves-effect waves-light btn red\">
                                    Mark as Urgent
                                </a>"); 
                            }
                            ?>
                                
                            </div>
                        </li>   
                    @endforeach
                </ul>
            </div>         
        @endforeach
    @endsection

    {{--  PAGE FOOTER  --}}
    @section('footer')
        @include('inc.footer')
    @endsection
    

{{--  Custom Page Scripts  --}}
    @section('customScripts')
       <!--  Custom Scripts for Admin Page  -->
       <script type="text/javascript" src="<?php echo asset('/js/adminonly/adminpage.js')?>"></script>
    @endsection
