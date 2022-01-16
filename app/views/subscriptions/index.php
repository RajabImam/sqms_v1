<?php require APPROOT . '/views/includes/header.php'; ?>

<?php $userInfo = $data[0]; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-3">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-9">

        <h1 class="text-success">My Subscription</h1>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subscription</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $i => $sub) { ?>
                        <tr>
                            <th scope="row"><?php echo $i + 1 ?></th>
                            <td><?php echo $sub['subscription'] ?></td>
                            <td><?php echo $sub['start_date'] ?></td>
                            <td><?php echo $sub['end_date'] ?></td>
                            <td>
                                <?php
                                echo $_SESSION['sub_status'];
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
        <div class="row">
            <div class="col-4">
                <div class="card text-center" style="width: 80%;">

                    <img src="<?php echo URLROOT; ?>/images/pet1.jpg" width="95" height="90" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title text-warning">Free</h5>

                        <div>
                            <p>1 year</p>
                            <p>1 pet</p>
                        </div>

                        <div class="sub-btn">
                            <a href="#" class="btn btn-success disabled">0,00 EUR</a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center" style="width: 80%;">
                    <img src="<?php echo URLROOT; ?>/images/pet1.jpg" width="95" height="90" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Basic</h5>
                        <div>
                            <p>1 year</p>
                            <p>3 pet</p>
                        </div>
                        <div class="sub-btn">
                            <a href="#" class="btn btn-success">400 EUR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center" style="width:80%;">
                    <img src="<?php echo URLROOT; ?>/images/pet1.jpg" width="95" height="90" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-success">Premium</h5>
                        <div>
                            <p>1 Year</p>
                            <p>5 Pet</p>
                        </div>
                        <div class="sub-btn">
                            <a href="#" class="btn btn-success">500 EUR</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>