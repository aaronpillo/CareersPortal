@extends('layout.opportunities')

{{--  fixed Navbar for Desktop  --}}
    @section('navContent')
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="\gallery">Gallery</a></li>
            <li><a href="https://podio.com/webforms/20067029/1363163">Apply Now</a></li>
        </ul>    
    @endsection
{{-- end of fixed Navbar for Desktop  --}}

    {{--  Background Photo Mobile View  --}}
        @section('bgphoto')
            <img src=<?php echo asset("img/mini_careers.jpg")?>>
        @endsection
    {{-- End of Background Photo Mobile View  --}}

{{--  Opportunities Content  --}}
    @section('content')    
        {{--  This is a loop to display all jobs titles of a department  --}}
            <div class="section white container"> 
                @foreach($headers as $entity) 
                    {{--  Collapsible Popout of Job Title --}}                      
                        <ul class="collapsible popout" data-collapsible="accordion">
                            <li>
                                <div class="collapsible-header active">
                                    <i class="material-icons">filter_drama</i>{{$entity->job_title}}
                                    <?php if (($entity->isUrgent) == 1){echo"<span class=\"badge red\">Urgent</span>";}?>{{--Condition for badge Urgent  --}}
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
                    {{--End of Collapsible Popout  --}}
                @endforeach
            </div>
        {{--End loop of job titles of a department--}}

            {{--  CORRESPONDING MODAL FOR THE JOB  --}}
                @foreach($headers as $entity)
                    <?php echo("
                        <div id=\"modal_".$entity->job_id."\" class=\"modal modal-fixed-footer\">
                    "); ?>
                        {{--  Modal Content  --}}
                            <div class="modal-content">
                                
                                <h4>{{$entity->job_title}}</h4>
                                <hr style="color:#101755;">
                                
                                    
                                    {{--Responsibilities Area--}}
                                        @if($entity['responsibilities'] != "")
                                            <h5>Responsibilities</h5>
                                            {!!$entity->responsibilities!!}
                                        @endif
                                    {{--End of Responsibilities Area--}}
                                    
                                    {{--Requirements Area--}}
                                        @if($entity['requirements'] != "")
                                            <br>
                                            <h5>Requirements</h5>
                                            {!!$entity->requirements!!}
                                        @endif
                                    {{--End of Requirements Area--}}
                                    
                                    {{--Advantages Area--}}
                                        @if($entity['advantages'] != "")
                                            <br>
                                            <h5>Advantages</h5>
                                            {!!$entity->advantages!!}
                                        @endif
                                    {{--End of Advantages Area--}}

                                    {{--Genereal Qualification Area--}}   
                                        @if($entity['general_qualifications'] != "")
                                            <br>
                                            <h5>General Qualifications</h5>
                                            {!!$entity->general_qualifications!!}
                                        @endif
                                    {{--End of Genereal Qualification Area--}}
                            </div>
                        {{--  End of Modal Content  --}} 

                            {{-- Modal Footer --}}
                                <div class="modal-footer">
                                    <a href="https://podio.com/webforms/20067029/1363163" class=" waves-effect waves-green btn teal darken-3">Apply Now</a>
                                    <a href="#!" class="modal-action modal-close waves-effect red btn">Close</a>
                                </div>
                        {{-- End of Modal Footer --}}
                    </div>
                @endforeach
            {{--  CORRESPONDING MODAL FOR THE JOB  --}} 
    @endsection
{{--  End of Opportunities Content  --}}
