<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

  <div class="col-3">
    <?php require APPROOT . '/views/includes/menu.php'; ?>
  </div>
  <div class="col-9">
    <?php require APPROOT . '/views/includes/footer.php'; ?>

    <p>
      <a href="<?php echo URLROOT; ?>/pets/index" class="btn btn-success">Back to My Pets</a>
    </p>
    
    <h1 class="text-success">Pet Sleep Report</h1>
    <section class="container-fluid mb-5">
    <div class="row">
      <div class="col-md-4">
        <div id="bar-chart"></div>
      </div>

      <div class="col-md-8">
        <div id="line-chart"></div>
      </div>

      <div class="col-md-8">
        <div id="area-chart"></div>
      </div>

      <div class="col-md-4">
        <div id="donut-chart"></div>
      </div>

      <div class="col-md-8">
        <div id="pie-chart"></div>
      </div>
    </div>
  </section>
  </div>
</div>