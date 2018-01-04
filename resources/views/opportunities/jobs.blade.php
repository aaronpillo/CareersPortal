@extends('layout.opportunities')
@extends('layout.navbar')
    
    @section('navContent')
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="\gallery">Gallery</a></li>
            <li><a href="https://podio.com/webforms/20067029/1363163">Apply Now</a></li>
        </ul>    
    @endsection



    @section('content')    
        <div class="section white container"> 
            @foreach($headers as $entity)                       
                <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active">
                            <i class="material-icons"><?php 
                                
                            if (($entity->dept_name) == 'Finance and Accounting')
                                echo("filter_drama");

                            else if (($entity->dept_name) == 'Legal Support Service')
                                echo("business_center");

                            else if (($entity->dept_name) == 'IT and IT-Enabled Services')
                                echo("desktop_windows");

                                else if (($entity->dept_name) == 'Sales and Marketing')
                                echo("record_voice_over");
                                
                            ?></i>{{$entity->job_title}}
                        <?php
                            if(($entity->isUrgent) == 1)
                            echo("<span id=\"urgentTag\" class=\"badge red\">Urgent!</span>");
                        ?>
                        </div>
                        <div class="collapsible-body">
                            <span>
                                {!! $entity->job_description !!}
                            </span>   
                            <br><br>
                            
                        <?php echo("
                            <a href=\"#modal_".$entity->job_id."\" class=\"waves-effect waves-light btn indigo darken-4 btn modal-trigger\">
                        "); ?>
                                Explore
                            </a>
                            <a href="https://podio.com/webforms/20067029/1363163" class="waves-effect waves-light btn teal darken-3 btn modal-trigger">
                                Apply Now
                            </a>
                        </div>
                    </li> 
                </ul>
            @endforeach
        </div>

            {{--  CORRESPONDING MODAL FOR THE JOB  --}}
        @foreach($headers as $entity)
        <?php echo("
            <div id=\"modal_".$entity->job_id."\" class=\"modal modal-fixed-footer\">
        "); ?>
                <div class="modal-content">
                    
                    <h4>{{$entity->job_title}}</h4>
                    <hr style="color:#101755;">
                    
                     
                    @if($entity['responsibilities'] != "")
                        <h5>Responsibilities</h5>
                        {!!$entity->responsibilities!!}
                    @endif
                    
                    
                    @if($entity['requirements'] != "")
                        <br>
                        <h5>Requirements</h5>
                        {!!$entity->requirements!!}
                    @endif

                    
                    @if($entity['advantages'] != "")
                        <br>
                        <h5>Advantages</h5>
                        {!!$entity->advantages!!}
                    @endif
                    
                    @if($entity['general_qualifications'] != "")
                        <br>
                        <h5>General Qualifications</h5>
                        {!!$entity->general_qualifications!!}
                    @endif

                </div>
                <div class="modal-footer">
                <a href="https://podio.com/webforms/20067029/1363163" class=" waves-effect waves-green btn teal darken-3">Apply Now</a>
                <a href="#!" class="modal-action modal-close waves-effect red btn">Close</a>
                </div>
            </div>
        @endforeach
    @endsection
