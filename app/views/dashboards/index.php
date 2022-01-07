<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">
  <div class="col-3">
    <?php require APPROOT . '/views/includes/menu.php'; ?>
  </div>

  <div class="col-9">
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
            <!--<h4 class="mb-0"><?php echo $data['pet_count']; ?></h4>-->
            <h4 class="mb-0">Pet</h4>
          </a>
        </div>
      </div>

      <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="dash-button">
          <a class="dash-link" href="<?php echo URLROOT; ?>/subscriptions/index">
            <p>Manage Subscription</p>
            <p class="text-sm mb-0 text-capitalize">Plan</p>
            <hr>
            <!--<h4 class="mb-0"><?php echo $data['plan']; ?></h4>-->
            <h4 class="mb-0">Plan</h4>
          </a>
        </div>
      </div>


    </div>

    <!--<div class="dashboard-graph"><canvas id="myChart">
      </canvas>
    </div>-->
  </div>

</div>

<script>
  var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

  new Chart("myChart", {
    type: "line",
    data: {
      labels: xValues,
      datasets: [{
        data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
        borderColor: "red",
        fill: false
      }, {
        data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
        borderColor: "green",
        fill: false
      }, {
        data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
        borderColor: "blue",
        fill: false
      }]
    },
    options: {
      legend: {
        display: false
      }
    }
  });
</script>

<?php require APPROOT . '/views/includes/footer.php'; ?>