<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-lg-3 col-sm-6">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-lg-9 col-sm-6">
    <h1 class="text-success">Change Password</h1>
        <p>
            <a href="<?php echo URLROOT; ?>/profiles/index" class="btn btn-success">Back to My Profile</a>
        </p>
        
        <div>

            <form action="<?php echo URLROOT; ?>/profiles/change_password" method="post" enctype="multipart/form-data">
                <div class="mb-3 form-group">
                    <label>Current Password</label>
                    <input type="password" name="password" class="form-control" value="">
                    <span class="text-danger"></span>
                </div>

                <div class="mb-3 form-group">
                    <label>New Password</label>
                    <input type="password" name="newPassword" class="form-control" value="">
                    <span class="text-danger"></span>
                </div>

                <div class="mb-3 form-group">
                    <label>Confirm New Password</label>
                    <input type="password" name="confirmPassword" class="form-control" value="">
                    <span class="text-danger"></span>
                </div>

                <div class="mb-3 form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Update Password</button>
                    </div>
                </div>
            </form>

        </div>

        <?php require APPROOT . '/views/includes/footer.php'; ?>