<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-3">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-9">

        <p>
            <a href="<?php echo URLROOT; ?>/profiles/index" class="btn btn-success">Back to My Profile</a>
        </p>


        <h1 class="text-success">Update Profile</h1>

        <div>

            <form action="<?php echo URLROOT; ?>/profiles/update" method="post" enctype="multipart/form-data">
                <div class="mb-3 form-group">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $data['id'] ?>">
                </div>

                <div class="mb-3 form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" value="<?php echo $data['first_name'] ?>">
                    <span class="text-danger"><?php echo $data['first_name_err']; ?> </span>
                </div>
                <div class="mb-3 form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="<?php echo $data['last_name'] ?>">
                    <span class="text-danger"><?php echo $data['last_name_err']; ?> </span>
                </div>

                <div class="mb-3 form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $data['email'] ?>" disabled="disabled">
                </div>

                <div class="mb-3 form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?php echo $data['phone'] ?>">
                    <span class="text-danger"><?php echo $data['phone_err']; ?> </span>
                </div>

                <div class="mb-3 form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>

        </div>

        <?php require APPROOT . '/views/includes/footer.php'; ?>