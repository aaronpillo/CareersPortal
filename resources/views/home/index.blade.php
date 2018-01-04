@extends('layout.home')

{{--  fixed Navbar for Desktop  --}}
    @section('navContent')   
        <ul class="right hide-on-med-and-down"> 
            <li><a href="index.php">Home</a></li>
            <li><a id="ScrolltoOp" href="#OpportScroll">Opportunities</a></li>
            <li><a href="\gallery">Gallery</a></li>
            <li><a id="ScrolltoCont" href="#ContScroll">Contact</a></li>
            <li><a href="https://podio.com/webforms/20067029/1363163">Apply Now</a></li>
        </ul>
    @endsection
{{-- end of fixed Navbar for Desktop  --}}

{{--  Background Photo Mobile View  --}}
    @section('bgphoto')
        <img src=<?php echo asset("img/mini_pbo.jpg")?>>
    @endsection
{{-- End of Background Photo Mobile View  --}}

{{--  Homepage Content   --}}
    @section('content')
        {{--  "Why Join Us" Section  --}}
            <div class="container">
                <div class="row">
                    <div class="col s12 m4 l12" id="scrollhere" style="color: #101766;">
                        <h4>WHY JOIN US?</h4>
                    </div>
                    
                    <div class="col s12 hide-on-med-and-up">
                        <img class="responsive-img materialboxed" src=<?php echo asset("img/Pbo1.jpg")?>>
                    </div>

                    <div class="col s12">
                        <p>
                            Join our fast growing and dynamic team of professionals in Clark, Pampanga. 
                            Curve your own career path as you become one of the major partners in our newly
                            established but promising Business and Knowledge Process Outsourcing company
                            in the Philippines.
                            <br><br>
                            Professional Business Outsourcing Global Ltd. Inc. (PBO Global), 
                            is an outsourcing company located in Clark Freeport Zone,
                            catering to Australian-based market.
                            With an affirmative vision to become the "partner of choice" by top notch
                            firms in the region seeking utmost professional offshore services.
                            We take pride in our core competencies in the functional areas of:         
                        </p>  
                    </div>

                    <div id="OpportScroll" class="col s12" style="color: #101766;" id="scrollOp">
                        <h4>Opportunities</h4>                    
                    </div>
                </div>
            </div>
        {{-- End of "Why Join Us?" Section  --}}

        {{--  Opportunities Area   --}}
            <div class="row" id="Opportunities">
                <div class="col s6 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="img/Accountant.jpg">
                            <a id="pbuttons" class="btn-floating halfway-fab waves-effect waves-light indigo darken-4 pulse" href="\financeaccounting"><i class="material-icons">search</i></a>
                        </div>
                        <div class="card-content">
                            <center><p>Finance & Accounting</p></center>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="img/Lawyer.jpg">
                            <a id="pbuttons" class="btn-floating halfway-fab waves-effect waves-light indigo darken-4 pulse" href="\legalsupport"><i class="material-icons">search</i></a>
                        </div>
                        <div class="card-content">
                            <p><center>Legal Support Service</center></p>
                        </div>
                    </div>
                </div>

                <div class="col s6 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="img/Coding.jpg">         
                            <a id="pbuttons" class="btn-floating halfway-fab waves-effect waves-light indigo darken-4 pulse" href="\itservices"><i class="material-icons">search</i></a>
                        </div>
                        <div class="card-content">
                            <center><p>IT and IT-enabled Services</p></center> 
                        </div>
                    </div>
                </div>

                <div class="col s6 m3">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="img/Marketing.jpg">
                            <a id="pbuttons" class="btn-floating halfway-fab waves-effect waves-light indigo darken-4 pulse" href="\salesmarketing"><i class="material-icons">search</i></a>
                        </div>
                        <div class="card-content">
                            <center><p>Sales and Marketing Support Services</p></center> 
                        </div>
                    </div>
                </div>
            </div>
        {{-- End of Opportunities Area   --}}

        {{--  "Get In Touch" Section  --}}
            <div class ="container">
                <div class="row">
                    <div id="ContScroll" class="col s12" style="color:#101766;">
                        <h4>Get In Touch</h4>             
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s12 m6">
                        <i class="material-icons indigo-text text-darken-4">location_on</i>
                        Address
                        <p style="padding-left: 6%;">
                        Unit B, Fifth Floor, Clark Centre 07, Jose Abad Santos Avenue,
                        Clark Freeport Zone PHILIPPINES 2023
                        </p>
                    </div>

                    <div class="col s12 m6">
                        <i class="material-icons indigo-text text-darken-4">email</i>
                        <strong>Email us</strong>  
                        <p style="padding-left: 6%;">
                        careers@pboglobal.com.au
                        </p>
                    </div>
                </div>
            </div>
        {{-- End of "Get In Touch" Section  --}}
    @endsection
{{-- End of Homepage Content   --}}
    
{{--  PboGlobal Map  --}}
    @section('MapArea')
        <div class="container">
            <div class="row">
                <div class="col s12 m12">
                    <section id="contact" class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7701.313396633245!2d120.52967126778405!3d15.17718687295971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396ed55400228ef%3A0x6f9864cbd58f0466!2sPBO+GLOBAL!5e0!3m2!1sen!2sph!4v1490242904337"
                        width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </section>
                </div>
            </div>
        </div>
    @endsection
{{-- End of PboGlobal Map  --}}

