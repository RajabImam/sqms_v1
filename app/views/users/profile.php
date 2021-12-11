<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">
<div class="col-3">
    <?php require APPROOT . '/views/includes/menu.php'; ?>
</div>

<div class="col-9">
<h1 class="text-success">Profile</h1>

    <div class="row">
        <div class="col-6 py-2 pl-2">
            <h5>UPDATE PROFILE</h5>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="full_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="First Name">
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6 my-auto">
            <div class="row">
                <h5>CHANGE PASSWORD</h5>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="old_pass" class="form-label">Old Password</label>
                        <input type="password" class="form-control" name="old_pass" id="old_pass" placeholder="Old Password">
                    </div>
                    <div class="mb-3">
                        <label for="new_pass" class="form-label">New Password</label>
                        <input type="password" class="form-control" name="new_pass" id="new_pass" placeholder="New Password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmNew" class="form-label">Repeat New Password</label>
                        <input type="password" class="form-control" name="confirmNew" id="confirmNew" placeholder="Repeat New Password">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">UPDATE</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
</div>