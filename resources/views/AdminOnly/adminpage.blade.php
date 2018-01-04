@extends('layout.admin')
    
{{--    Finance Content  --}}
    @section('Finance')
        <br>
        <h4>Finance & Accounting</h4>
            <ul class="collapsible popout" data-collapsible="accordion">
                @foreach($jobs_finance as $finance) {{--  $jobs_finance = all info in the database Finance and Accounting per job_title stored in $finance --}}
                    <li>
                        <div class="collapsible-header active">
                            <i class="material-icons">filter_drama</i>
                            {{$finance->job_title}} {{-- Collapsible header job_title from $finance--}}
                        </div>

                        {{--  Collapsible-body  --}}
                            <div class="collapsible-body">
                                <span>
                                    {!!$finance->job_description!!}{{--  Collapsible body job_description from $finance --}}
                                </span>   
                                <br><br>
                                
                                {{-- View Details Button of each job_opportunities with corresponding job_id of $finance --}}
                                    <?php echo("
                                        <a href=\"/admin/job_opportunities/".$finance['job_id']."\" class=\"waves-effect waves-light btn indigo darken-4 btn\">
                                        "); 
                                    ?> View Details </a>
                                {{--  End View Details Button  --}}

                                {{-- Edit Button of each job_opportunities with corresponding job_id of $finance --}}
                                    <?php
                                        echo("
                                        <a href=\"/admin/job_opportunities/".$finance['job_id']."/edit\" class=\"waves-effect waves-light btn indigo darken-4 btn\">     
                                        ");
                                    ?> Edit </a>
                                {{--  End Edit Button  --}}

                                {{--  Checking if $finance isHiring --}}
                                    <?php 
                                        if (($finance->isHiring) == 1)
                                            {    
                                            //  Deactivate job button is displayed when isHiring of $finance in the database is equal to 1  
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$finance['job_id']."/deactivate\" class=\"waves-effect waves-light btn red\">
                                                    Deactivate Job
                                                </a>"); 
                                            }
                                        else
                                            {
                                                //Activate Job button is displayed when isHiring of $finance in the database is not equal to 1
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$finance['job_id']."/activate\" class=\"waves-effect waves-light btn green darken-4\">
                                                    Activate Job
                                                </a>"); 
                                            }
                                    ?>
                                {{--  End of Checking  --}}

                                {{--  Checking if $finance isUrgent --}}
                                    <?php 
                                        if (($finance->isUrgent) == 1)
                                            {    
                                                // Unmark as urgent button is displayed when isUrgent of $finance in the database is equal to 1  
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$finance['job_id']."/unmarkUrgent\" class=\"waves-effect waves-light btn green darken-4\">
                                                    Unmark as Urgent
                                                </a>"); 
                                            }
                                        else
                                            {
                                                //Mark as Urgent button is displayed when isUrgent of $finance in the database is not equal to 1
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$finance['job_id']."/markUrgent\" class=\"waves-effect waves-light btn red\">
                                                    Mark as Urgent
                                                </a>");  
                                            }
                                     ?>
                                {{--  End of Checking  --}}
                            </div>
                        {{--  End of Collapsible body  --}}
                    </li>   
                @endforeach
            </ul>
    @endsection
{{--  End of Finance Content  --}}       

{{-- Legal Content   --}}
    @section('Legal')
        <br>
        <h4>Legal Support Service</h4>
            <ul class="collapsible popout" data-collapsible="accordion">
                @foreach($jobs_law as $law){{--  $jobs_law = all info in the database Legal Support Service per job_title stored in $law --}}
                    <li>
                        <div class="collapsible-header active">
                            <i class="material-icons">business_center</i>
                            {{$law->job_title}}{{-- Collapsible header job_title from $law  --}}
                        </div>
                        {{--  Collapsible-body  --}}
                            <div class="collapsible-body">
                                <span>
                                    {!!$law->job_description!!}{{--  Collapsible body job_description from $law --}}
                                </span>   
                                <br><br>
                                
                                {{-- View Details Button of each job_opportunities with corresponding job_id of $law --}}
                                    <?php echo("
                                        <a href=\"/admin/job_opportunities/".$law['job_id']."\" class=\"waves-effect waves-light btn indigo darken-4 btn\">
                                        ");
                                    ?> View Details </a>
                                {{--  End View Details Button  --}} 
                                
                                {{-- Edit Button of each job_opportunities with corresponding job_id of $law --}}
                                    <?php
                                        echo("
                                        <a href=\"/admin/job_opportunities/".$law['job_id']."/edit\" class=\"waves-effect waves-light btn indigo darken-4 btn\">     
                                        ");
                                    ?>  Edit  </a>
                                {{--  End oF Edit Button  --}}

                                {{--  Checking if $law isHiring--}}        
                                    <?php 
                                        if (($law->isHiring) == 1)
                                            {    
                                                //  Deactivate job button is displayed when isHiring of $law in the database is equal to 1  
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$law['job_id']."/deactivate\" class=\"waves-effect waves-light btn red\">
                                                    Deactivate Job
                                                </a>"); 
                                            }
                                        else
                                            {
                                                //Activate Job button is displayed when isHiring of $law in the database is not equal to 1
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$law['job_id']."/activate\" class=\"waves-effect waves-light btn green darken-4\">
                                                    Activate Job
                                                </a>"); 
                                            }
                                    ?>
                                {{--  End of Checking  --}}

                                 {{--  Checking if $law isUrgent --}}
                                 <?php 
                                 if (($law->isUrgent) == 1)
                                     {    
                                     // Unmark urgent button is displayed when isUrgent of $law in the database is equal to 1  
                                        echo("
                                        <a href=\"/admin/job_opportunities/".$law['job_id']."/unmarkUrgent\" class=\"waves-effect waves-light btn green darken-4\">
                                            Unmark as Urgent
                                        </a>"); 
                                     }
                                 else
                                     {
                                         //Mark as Urgent button is displayed when isUrgent of $law in the database is not equal to 1
                                        echo("
                                        <a href=\"/admin/job_opportunities/".$law['job_id']."/markUrgent\" class=\"waves-effect waves-light btn red\">
                                            Mark as Urgent
                                        </a>");  
                                     }
                              ?>
                         {{--  End of Checking  --}}
                            </div>
                        {{--  End of Collapsible body  --}}
                    </li>   
                @endforeach
            </ul>
    @endsection
{{-- End of Legal Content  --}}

{{--  IT Content  --}}
    @section('IT')
        <br>
        <h4>IT and IT-Enabled Services</h4>
            <ul class="collapsible popout" data-collapsible="accordion">
                @foreach($jobs_it as $IT){{--  $jobs_it = all info in the database IT and IT-Enabled Services per job_title store in $IT--}}
                    <li>
                        <div class="collapsible-header active">
                            <i class="material-icons">desktop_windows</i>
                            {{$IT->job_title}}{{-- Collapsible header job_title from $IT  --}}
                        </div>

                        {{--  Collapsible-body  --}}
                            <div class="collapsible-body">
                                <span>
                                    {!!$IT->job_description!!}{{--  Collapsible body job_description from $IT --}}
                                </span>   
                                <br><br>

                                {{-- View Details Button of each job_opportunities with corresponding job_id of $IT--}}    
                                    <?php echo("
                                        <a href=\"/admin/job_opportunities/".$IT['job_id']."\" class=\"waves-effect waves-light btn indigo darken-4 btn\">
                                        ");
                                    ?>  View Details  </a>
                                {{--  End of View Details Button  --}}

                                {{-- Edit Button of each job_opportunities with corresponding job_id of $IT --}}
                                <?php
                                    echo("
                                    <a href=\"/admin/job_opportunities/".$IT['job_id']."/edit\" class=\"waves-effect waves-light btn indigo darken-4 btn\">     
                                    ");
                                ?>   Edit </a>
                                {{--  End of Edit Button  --}}

                                {{--  <a href="#!" class="waves-effect waves-light btn red">  --}}
                                
                                {{--  Checking if $IT isHiring --}}   
                                    <?php 
                                        if (($IT->isHiring) == 1)
                                            {    
                                                //  Deactivate job button is displayed when isHiring of $IT in the database is equal to 1
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$IT['job_id']."/deactivate\" class=\"waves-effect waves-light btn red\">
                                                    Deactivate Job
                                                </a>"); 
                                            }
                                        else
                                            {
                                                //Activate Job button is displayed when isHiring of $IT in the database is not equal to 1
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$IT['job_id']."/activate\" class=\"waves-effect waves-light btn green darken-4\">
                                                    Activate Job
                                                </a>"); 
                                            }
                                    ?>
                                {{-- End of Checking --}}   

                                {{--  Checking if $IT isUrgent --}}
                                    <?php 
                                        if (($IT->isUrgent) == 1)
                                            {    
                                            // Unmark as urgent button is displayed when isUrgent of $IT in the database is equal to 1  
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$IT['job_id']."/unmarkUrgent\" class=\"waves-effect waves-light btn green darken-4\">
                                                    Unmark as Urgent
                                                </a>"); 
                                            }
                                        else
                                            {
                                                //Mark as Urgent button is displayed when isUrgent of $IT in the database is not equal to 1
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$IT['job_id']."/markUrgent\" class=\"waves-effect waves-light btn red\">
                                                    Mark as Urgent
                                                </a>"); 
                                            }
                                    ?>
                                {{--  End of Checking  --}}                

                            </div>
                        {{--  End of Collapsible-body  --}}            
                    </li>   
                @endforeach
            </ul>
    @endsection
{{--  End IT Content  --}}

{{--  Sales Content  --}}
    @section('Sales')
        <br>
        <h4>Sales and Marketing Support Services</h4>
            <ul class="collapsible popout" data-collapsible="accordion">
                @foreach($jobs_market as $market){{--  $jobs_market = all info in the database Sales and Marketing Support Services per job_title stored in $market--}}
                    <li>
                        <div class="collapsible-header active">
                            <i class="material-icons">record_voice_over</i>
                            {{$market->job_title}}{{-- Collapsible header job_title from $market --}}
                        </div>
                        {{-- Collapsible-body  --}}
                            <div class="collapsible-body">
                                <span>
                                    {!!$market->job_description!!}{{-- job_description from $market--}}
                                </span>   
                                <br><br>
                            
                                {{-- View Details Button of each job_opportunities with corresponding job_id of $market--}}    
                                    <?php echo("
                                        <a href=\"/admin/job_opportunities/".$market['job_id']."\" class=\"waves-effect waves-light btn indigo darken-4 btn\">
                                        "); 
                                    ?> View Details </a>
                                {{--  End of View Details Button  --}}
                                
                                {{-- Edit Button of each job_opportunities with corresponding job_id of $market --}}
                                    <?php
                                        echo("
                                        <a href=\"/admin/job_opportunities/".$market['job_id']."/edit\" class=\"waves-effect waves-light btn indigo darken-4 btn\">     
                                        ");
                                    ?> Edit </a>
                                {{--  End of Edit Button   --}}

                                    {{--  <a href="#!" class="waves-effect waves-light btn red">  --}}

                                {{--  Checking if $market isHiring--}}   
                                    <?php 
                                        if (($market->isHiring) == 1)
                                            {    
                                                //  Deactivate job button is displayed when isHiring of $market in the database is equal to 1
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$market['job_id']."/deactivate\" class=\"waves-effect waves-light btn red\">
                                                    Deactivate Job
                                                </a>"); 
                                            }
                                        else
                                            {
                                                //Activate Job button is displayed when isHiring of $market in the database is not equal to 1
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$market['job_id']."/activate\" class=\"waves-effect waves-light btn green darken-4\">
                                                    Activate Job
                                                </a>"); 
                                            }
                                    ?>
                                {{--  End of Checking  --}}

                                {{--  Checking if $market isUrgent --}}
                                    <?php 
                                        if (($market->isUrgent) == 1)
                                            {    
                                            // Unmark as urgent button is displayed when isUrgent of $market in the database is equal to 1  
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$market['job_id']."/unmarkUrgent\" class=\"waves-effect waves-light btn green darken-4\">
                                                    Unmark as Urgent
                                                </a>"); 
                                            }
                                        else
                                            {
                                                //Mark as Urgent button is displayed when isUrgent of $market in the database is not equal to 1
                                                echo("
                                                <a href=\"/admin/job_opportunities/".$market['job_id']."/markUrgent\" class=\"waves-effect waves-light btn red\">
                                                    Mark as Urgent
                                                </a>"); 
                                            }
                                    ?>
                                {{--  End of Checking  --}}
                            </div>
                        {{--  End of Collapsible-body  --}}
                    </li>   
                @endforeach
            </ul>
    @endsection
{{--  End of Sales  --}}





    
