<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-3">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-9">

        <h1 class = "text-success">My Subscription</h1>

        <p>
          <!--  <a href="<?php //echo URLROOT; ?>/subscriptions/register" class="btn btn-success">Add Subscription</a> -->
        </p>
     
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subscription</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $i => $sub) { ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                        <td><?php echo $sub['subscription'] ?></td>
                        <td><?php echo $sub['start_date'] ?></td>
                        <td><?php echo $sub['end_date'] ?></td>
                        <td style="width: 236px;">
                        <!--<a href="<?php echo URLROOT; ?>/subscriptions/report?id=<?php echo $sub['id'] ?>" class="btn btn-sm btn-outline-success">Payment</a>-->
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="container">
  <div class="row">
    <div class="col">
    <div class="card text-center" style="width: 13rem;">
            <img src="<?php echo URLROOT; ?>/images/pet1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title text-primary">Free</h5>
            <ul class="list-group">
                <li class="list-group-item">1 Pet</li>
                <li class="list-group-item">1 Year</li>
            </ul>
            <a href="#" class="btn btn-success disabled">Payment</a>
        </div>   
        </div>
    </div>
    <div class="col">
    <div class="card text-center" style="width: 13rem;">
            <img src="<?php echo URLROOT; ?>/images/pet1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title text-warning">Basic</h5>
            <ul class="list-group">
                <li class="list-group-item">3 Pet</li>
                <li class="list-group-item">1 Year</li>
                <li class="list-group-item">400 EUR</li>
            </ul>
            <a href="#" class="btn btn-success">Payment</a>
        </div>
        </div>
    </div>
    <div class="col">
    <div class="card text-center" style="width: 13rem;">
            <img src="<?php echo URLROOT; ?>/images/pet1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title text-success">Premium</h5>
            <ul class="list-group">
                <li class="list-group-item">5 Pet</li>
                <li class="list-group-item">1 Year</li>
                <li class="list-group-item">500 EUR</li>
            </ul>
            <a href="#" class="btn btn-success">Payment</a>
        </div>
        </div>
    </div>
  </div>
</div>
     
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>