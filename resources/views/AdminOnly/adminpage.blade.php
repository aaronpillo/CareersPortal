@extends('layout.admin')

    @section('Finance')
    <br>
    <h4>Finance & Accounting</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            @foreach($jobs_finance as $finance)
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">filter_drama</i>
                        {{$finance->job_title}}
                    </div>
                    <div class="collapsible-body">
                        <span>
                            {!!$finance->job_description!!}
                        </span>   
                        <br><br>
                        {{--  <a href="\editpage" class="waves-effect waves-light btn indigo darken-4 btn">  --}}
                    
                    <?php echo("
                        <a href=\"/admin/job_opportunities/".$finance['job_id']."\" class=\"waves-effect waves-light btn indigo darken-4 btn\">
                     "); ?>
                            View Details
                        </a>
                    <?php
                    echo("
                        <a href=\"/admin/job_opportunities/".$finance['job_id']."/edit\" class=\"waves-effect waves-light btn indigo darken-4 btn\">     
                    ");
                    ?>
                            Edit
                        </a>
                    
                        {{--  <a href="#!" class="waves-effect waves-light btn red">  --}}
                    <?php 

                    if (($finance->isHiring) == 1)
                    {    
                        echo("
                        <a href=\"/admin/job_opportunities/".$finance['job_id']."/deactivate\" class=\"waves-effect waves-light btn red\">
                            Deactivate Job
                        </a>"); 
                    }
                    else
                    {
                        echo("
                        <a href=\"/admin/job_opportunities/".$finance['job_id']."/activate\" class=\"waves-effect waves-light btn green darken-4\">
                            Activate Job
                        </a>"); 
                    }
                    ?>
                           
                    </div>
                </li>   
            @endforeach
        </ul>

    @endsection
        
    @section('Legal')
        <br>
        <h4>Legal Support Service</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            @foreach($jobs_law as $law)
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">business_center</i>
                        {{$law->job_title}}
                    </div>
                    <div class="collapsible-body">
                        <span>
                            {!!$law->job_description!!}
                        </span>   
                        <br><br>
                        
                    <?php echo("
                        <a href=\"/admin/job_opportunities/".$law['job_id']."\" class=\"waves-effect waves-light btn indigo darken-4 btn\">
                     "); ?>
                            View Details
                        </a>
                    <?php
                    echo("
                        <a href=\"/admin/job_opportunities/".$law['job_id']."/edit\" class=\"waves-effect waves-light btn indigo darken-4 btn\">     
                    ");
                    ?>
                            Edit
                        </a>
                    
                        {{--  <a href="#!" class="waves-effect waves-light btn red">  --}}
                    <?php 

                    if (($law->isHiring) == 1)
                    {    
                        echo("
                        <a href=\"/admin/job_opportunities/".$law['job_id']."/deactivate\" class=\"waves-effect waves-light btn red\">
                            Deactivate Job
                        </a>"); 
                    }
                    else
                    {
                        echo("
                        <a href=\"/admin/job_opportunities/".$law['job_id']."/activate\" class=\"waves-effect waves-light btn green darken-4\">
                            Activate Job
                        </a>"); 
                    }
                    ?>
                    </div>
                </li>   
            @endforeach
        </ul>
    @endsection

    @section('IT')
        <br>
        <h4>IT and IT-Enabled Services</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            @foreach($jobs_it as $IT)
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">desktop_windows</i>
                        {{$IT->job_title}}
                    </div>
                    <div class="collapsible-body">
                        <span>
                            {!!$IT->job_description!!}
                        </span>   
                        <br><br>
                    <?php echo("
                        <a href=\"/admin/job_opportunities/".$IT['job_id']."\" class=\"waves-effect waves-light btn indigo darken-4 btn\">
                     "); ?>
                            View Details
                        </a>
                    <?php
                    echo("
                        <a href=\"/admin/job_opportunities/".$IT['job_id']."/edit\" class=\"waves-effect waves-light btn indigo darken-4 btn\">     
                    ");
                    ?>
                            Edit
                        </a>
                    
                        {{--  <a href="#!" class="waves-effect waves-light btn red">  --}}
                    <?php 

                    if (($IT->isHiring) == 1)
                    {    
                        echo("
                        <a href=\"/admin/job_opportunities/".$IT['job_id']."/deactivate\" class=\"waves-effect waves-light btn red\">
                            Deactivate Job
                        </a>"); 
                    }
                    else
                    {
                        echo("
                        <a href=\"/admin/job_opportunities/".$IT['job_id']."/activate\" class=\"waves-effect waves-light btn green darken-4\">
                            Activate Job
                        </a>"); 
                    }
                    ?>
                    </div>
                </li>   
            @endforeach
        </ul>
    @endsection

    @section('Sales')
        <br>
        <h4>Sales and Marketing Support Services</h4>
        <ul class="collapsible popout" data-collapsible="accordion">
            @foreach($jobs_market as $market)
                <li>
                    <div class="collapsible-header active">
                        <i class="material-icons">record_voice_over</i>
                        {{$market->job_title}}
                    </div>
                    <div class="collapsible-body">
                        <span>
                            {!!$market->job_description!!}
                        </span>   
                        <br><br>
                        
                    <?php echo("
                        <a href=\"/admin/job_opportunities/".$market['job_id']."\" class=\"waves-effect waves-light btn indigo darken-4 btn\">
                     "); ?>
                            View Details
                        </a>
                    <?php
                    echo("
                        <a href=\"/admin/job_opportunities/".$market['job_id']."/edit\" class=\"waves-effect waves-light btn indigo darken-4 btn\">     
                    ");
                    ?>
                            Edit
                        </a>
                    
                        {{--  <a href="#!" class="waves-effect waves-light btn red">  --}}
                    <?php 

                    if (($market->isHiring) == 1)
                    {    
                        echo("
                        <a href=\"/admin/job_opportunities/".$market['job_id']."/deactivate\" class=\"waves-effect waves-light btn red\">
                            Deactivate Job
                        </a>"); 
                    }
                    else
                    {
                        echo("
                        <a href=\"/admin/job_opportunities/".$market['job_id']."/activate\" class=\"waves-effect waves-light btn green darken-4\">
                            Activate Job
                        </a>"); 
                    }
                    ?>
                    </div>
                </li>   
            @endforeach
        </ul>
    @endsection


    