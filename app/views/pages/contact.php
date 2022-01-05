<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-2">
<section class="py-3">
  <h1 class="text-success py-2">Contact Us</h1>
<div class="row mt-3">
        <div class="col-lg-6">
        <div class="mapouter">
            <div class="gmap_canvas">
            <iframe width="550" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=28%20Rue%20Notre%20Dame%20des%20Champs,%2075006%20Paris&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

            </iframe><a href="https://2piratebay.org"></a><br>
                <style>.mapouter{position:relative;text-align:right;height:450px;width:550px;}
            </style><a href="https://www.embedgooglemap.net">use google map on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:550px;}
            </style>
        </div>
    </div>
            </div> 
<?php 
if(isset($_POST['submit'])){
    $to = "dreamguardian@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>     
    <form class="col-lg-6">
          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="email" name="email" aria-describedby="emailHint" placeholder="Enter email" required>
            <small id="emailHint" class="form-text text-muted">We'll never share your email with anyone.</small>
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input id="name" name="name" class="form-control" type="text" placeholder="Enter name" required>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" class="form-control" placeholder="Enter Message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-lg btn-outline-primary">Send Message</button>
        </form>
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