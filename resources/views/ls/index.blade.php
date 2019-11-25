  @extends('layouts.app')
  @section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('img/lawyer1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Potential Client Links</h3>
            <p>We connect you to a network of many clients registered on our site.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/lawyer2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Case Management</h3>
            <p>We help you keep a track of your cases regardless of whether it was in the past or not.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/lawyer3.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Links to fellow advocates</h3>
            <p>Here you can share with  team of fellow professionals in the field.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome Lawyer Referral</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Get Access to Clients</h4>
          <div class="card-body">
            <p class="card-text">We have many registered clients waiting for your services.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Share with your colleagues</h4>
          <div class="card-body">
            <p class="card-text">You get to share with your peers on pressing issues at any time you chose.There are active participants on our site to take you through the journey</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Manage your cases</h4>
          <div class="card-body">
            <p class="card-text">We help you manage your cases without many challenges.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->


    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Lawyer Referral features</h2>
        <p>The Lawyer  Referral Company feautures includes:</p>
        <ul>

          <li>24/7 support service</li>
          <li>Privacy of your communication with clients</li>
          <li>Working closely with you in every step</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="img/bg.jpg" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>There are so many benefits for working with us and no drawbacks whatsoever.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">JOIN US</a>
      </div>
    </div>

  </div>
  <!-- /.container -->
@endsection
