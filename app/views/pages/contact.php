<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-2">
  <section class="py-3">
    <h1 class="text-success py-2">Contact Us</h1>

    <div>
    <div class="row mt-3">
      <div class="col-lg-6">
        <div>
          <div class="gmap_canvas">
            <iframe id="gmap_canvas" width="100%" height="360" src="https://maps.google.com/maps?q=28%20Rue%20Notre%20Dame%20des%20Champs,%2075006%20Paris&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              <style>
              .mapouter {
                 
                position: relative;
                text-align: right;
                height: 450px;
                width: 550px;
              }
            </style>
            <a href="https://www.embedgooglemap.net">use google map on website</a>
            <style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 450px;
                width: 550px;
        
              }
            </style>
            </iframe>
          
          </div>
        </div>
      </div>
      <?php
      if (isset($_POST['submit'])) {
        $to = "dreamguardian@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to, $subject, $message, $headers);
        mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
      }
      ?>

      <div class="col-lg-6" style = "padding-top:30px; padding-bottom:20px;">
      <form>
        <div class="form-group mb-3">
          <input id="email" class="form-control" type="email" name="email" aria-describedby="emailHint" placeholder="Email" required>
          <small id="emailHint" class="form-text text-muted">We'll never share your email with anyone.</small>
        </div>
        <div class="form-group mb-3">
          <input id="name" name="name" class="form-control" type="text" placeholder="Name" required>
        </div>
        <div class="form-group mb-3">
          <textarea id="message" name="message" class="form-control" placeholder="Message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-lg btn-outline-primary">Send Message</button>
      </form>
      </div>
     
    </div>

  </section>

  <section>
    <div class="container pb-5 mb-5">
      <div class="text-center py-2">
        <p class="fs-3">Dream Guardian Contact Info: </p>
        <p class="fs-5">Tel: +33754290113</p>
        <p class="fs-5">Email: info@dreamguardian.fr</p>
        <p class="fs-5">Website: www.dreamguardian.fr</p>
        <div class="row mb-3">
          <div class="col">
            <a class="btn btn-primary">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a class="btn btn-danger">
              <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
            <a class="btn btn-primary">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>