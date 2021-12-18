<?php require APPROOT . '/views/includes/header.php'; ?>
<section >
        <img  src="<?php echo URLROOT; ?>/images/home1.png"width="100%" >
  </section>
<!--Home--->
<section class="container mb-5">
    <div class="row mt-3">
      <div class="col-lg-6 mt-3 py-5 pl-5">
        <img class="animated zoomIn img-fluid" alt="Pets" src="<?php echo URLROOT; ?>/images/pets.jpg">
      </div>
      <div class="col-lg-6 my-auto">
        <div class="row">
          <div class="home-content offset-lg-1 col-lg-10 overflow-hidden">
            <h1 class="animated slideInLeft delay-1s pb-0 text-success">SQMS provides an automated way to monitor the sleep quality of pets.</h1>
            <p class="animated slideInLeft delay-2s pb-0">It displays pet sleep data from a central database on a dashboard
Provide insights recommendations to improve pet health.
Detects and reports sleep abnormalities to the users 

            </p>
            <button href="<?php echo URLROOT; ?>/users/services" class="btn btn-lg btn-outline-success">Services</button>
            <button href="<?php echo URLROOT; ?>/users/contact" class="btn btn-lg btn-primary">Contact Us</button>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!--Call to action-->

    <section class="container-fluid bg-success py-5">
    <div class="container text-center w-50">
      <h1 class="text-white py-1">Dream Guardian</h1>
      <hr/>
      <h5 class="text-white py-0">At Dream Guardian, we develop web platform application targeted at the screens of the users.
        We make use of the latest technological trends in computing to analyse and proffer practical solutions in an
        ever-changing technological field.</h5>
      <button class="btn btn-lg btn-success">Learn More</button>
    </div>
  </section>

    <!--Services-->
    <section class="services">
    <div class="text-center py-3">
      <h1 class="text-success py-0">What we do</h1>
      <hr/>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center">
        <a class="btn btn-success">
          <i class="fa fa-database fa-5x"></i>
          <h4 class="text-white py-3">Pets Management</h4></a>
          <p class="pb-5">Register your pets today on our platform for free. Keep update about your pets health and worry no more ...<a href="services.php">more</a> </p>
        </div>
        <div class="col-md-4 text-center">
        <a class="btn btn-success">
          <i class="fa fa-pie-chart fa-5x"></i>
          <h4 class="text-white py-3">Pets Analytics</h4></a>
          <p class="pb-5">Stay up to date at your finger tips and at the comfort of your home as we bring you the analytics of ... <a href="services.php">more</a></p>
        </div>
        <div class="col-md-4 text-center">
        <a class="btn btn-success">
          <i class="fa fa-credit-card-alt fa-5x"></i>
          <h4 class="text-white py-3">Subscription</h4></a>
          <p class="pb-5">Subscribe to our paid plan to get more benefit of the features we offered at Dream Guardian and full access to our platform ... <a href="services.php">more</a></p>
        </div>
       
      </div>
    </div>
  </section>

<section>
<div class="container mb-5 pb-5 ">
  <div class="row mt-3">
  <div class="col-lg-6 my-auto">
    <h1 class="text-success">Amazing looking out for healthier pets every day!</h3>
    <h6>We ensure effective monitoring of your pet's sleep patterns and report accurately.</h6>
    <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-danger">REGISTER TODAY</a>
  </div>
  <div class="col-lg-6 mt-3 py-5 pl-5">
      <img class="img-fluid" alt="Pets" src="<?php echo URLROOT; ?>/images/pet1.jpg">
    </div>
</div>
</div>
</section>


<?php require APPROOT . '/views/includes/footer.php'; ?>