<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">
  <div class="col-lg-3 col-sm-6">
    <?php require APPROOT . '/views/includes/menu.php'; ?>
  </div>

  <div class="col-lg-9 col-sm-6">
  <h1 class = "text-success">My Dashboard</h1>
    <div class="row">
      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="dash-button">
          <a class="dash-link" href="<?php echo URLROOT; ?>/profiles/index">
            <p>Manage Profile</p>
            <p class="text-sm mb-0 text-capitalize">Profile</p>
            <hr>
            <h4 class="mb-0"><?php echo $_SESSION['first_name']; ?></h4>
          </a>
        </div>
      </div>

      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="dash-button">
          <a class="dash-link" href="<?php echo URLROOT; ?>/pets/index">
            <p>Manage Pets</p>
            <p class="text-sm mb-0 text-capitalize">My Pet</p>
            <hr>
            <h4 class="mb-0"><?php echo $data['pet_count']; ?></h4>
          </a>
        </div>
      </div>

      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="dash-button">
          <a class="dash-link" href="<?php echo URLROOT; ?>/subscriptions/index">
            <p>Manage Subscription</p>
            <p class="text-sm mb-0 text-capitalize">
              <?php
                 $expiration_date = $data['end_date'] . " 00:00:00";
                 $d1 = new DateTime($expiration_date);
                 $d2 = new DateTime('NOW');
                 if ($d2 <= $d1){
                  $_SESSION['sub_status'] = "Active";
                  echo  "Active";
                  
                 }
                 else{
                  $_SESSION['sub_status'] = "Expired";
                  echo  "Expired";
                 }
              ?>
            </p>
            <hr>
            <h4 class="mb-0"><?php echo $data['subscription']; ?></h4>
          </a>
        </div>
      </div>


    </div>
  </div>

</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>