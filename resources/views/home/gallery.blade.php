@extends('layout.gal')
@extends('layout.navbar')


    @section('navContent')
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>           
            <li><a href="\gallery">Gallery</a></li>
            <li><a href="#">Apply Now</a></li>
        </ul>
    @endsection

    @section('bgphoto')
        <img src=<?php echo asset("img/mini_family.jpg")?>>
    @endsection

    @section('content')
        <div class="col s12 m12">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" src="img/Gallery/Team1.jpg">
            </div>
            <div class="card-content">
              <center><p>PBO Global Team</p></center>
            </div>
          </div>
        </div>

         <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" src="img/Gallery/Team.jpg">
            </div>
            <div class="card-content">
              <center><p>PBO Global Team</p></center>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" src="img/Gallery/Team2.jpg">
            </div>
            <div class="card-content">
              <center><p>PBO Global Team</p></center>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" src="img/Gallery/Team3.jpg">
            </div>
            <div class="card-content">
              <center><p>PBO Global Team</p></center>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" src="img/Pbo2.jpg">
            </div>
            <div class="card-content">
              <p>PBO Global Female</p>
            </div>
          </div>
        </div>

         <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img class="materialboxed" src="img/Pbo3.jpg">
            </div>
            <div class="card-content">
              <p>PBO Global Male</p>
            </div>
          </div>
        </div>

        <div class="col s12 m12">
            <h4>Accounting Department</h4>
        </div>

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img class="materialboxed" src="img/Gallery/Team4.jpg">
                </div>
                
          </div>
        </div>

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img class="materialboxed" src="img/Gallery/Team5.jpg">
                </div>
                
          </div>
        </div>

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img class="materialboxed" src="img/Gallery/Team6.jpg">
                </div>
                
          </div>
        </div>

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img class="materialboxed" src="img/Gallery/Team7.jpg">
                </div>
                
          </div>
        </div>

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img class="materialboxed" src="img/Gallery/Team9.jpg">
                </div>
                
          </div>
        </div>

        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img class="materialboxed" src="img/Gallery/Team10.jpg">
                </div>
                
          </div>
        </div>

        <div class="col s12 m12">
            <h4>IT Department</h4>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                <img class="materialboxed" src="img/Gallery/Team8.jpg">
                </div>
                
          </div>
        </div>

         <div class="col s12 m6">
            <div class="card">
                <div class="card-image">
                <img class="materialboxed" src="img/Gallery/Team11.jpg">
                </div>
                
          </div>
        </div>

    @endsection