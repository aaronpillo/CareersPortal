@extends('layout.jobs')

    {{--editButton section with job_id --}}
        @section('editButton')
            <?php
                echo("
                <a href=\"/admin/job_opportunities/".$entity->job_id."/edit\" class=\"waves-effect waves-green btn teal darken-3\">Edit</a>
                ");
            ?>
        @endsection
    {{--  End of editButton section  --}}

            {{-- Job Description Content of a job_title  --}}
                @section('content')
                    <h4>{{$entity->job_title}}</h4>
                    <hr style="color:#101755;">
                    
                    <br>
                    <h5>Job Description</h5>
                    {!!$entity->job_description!!}

                    @if($entity['responsibilities'] != "")
                        <br>
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
                @endsection
            {{--  End of Job Description Content  --}}
