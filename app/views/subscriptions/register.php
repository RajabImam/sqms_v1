<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-3">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-9">
    <h1 class="text-success">Subscribe to a Plan</h1>
        <p>
            <a href="<?php echo URLROOT; ?>/pets/index" class="btn btn-success">Back to My Subscription</a>
        </p>
        
        <div>

            <form action="<?php echo URLROOT; ?>/subscriptions/register" method="post" enctype="multipart/form-data">
                <div class="mb-3 form-group">
                    <label>Type of Subscription</label>
                    <input type="text" name="type" class="form-control" value="<?php echo $data['type'] ?>">
                    <span class="text-danger"><?php echo $data['type_err']; ?> </span>
                </div>

                <div class="mb-3 form-group">
                    <label>Start Date</label>
                    <input type="date" name="start_date" class="form-control" value="<?php echo $data['start_date'] ?>">
                    <span class="text-danger"><?php echo $data['start_date_err']; ?> </span>
                </div>

                <div class="mb-3 form-group">
                    <label>End Date</label>
                    <input type="date" name="end_date" class="form-control" value="<?php echo $data['end_date'] ?>">
                    <span class="text-danger"><?php echo $data['end_date_err']; ?> </span>
                </div>

                <div class="mb-3 form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Subscribe</button>
                    </div>
                </div>
            </form>

        </div>

        <?php require APPROOT . '/views/includes/footer.php'; ?>