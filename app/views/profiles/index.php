<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-lg-3 col-sm-6">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-lg-9 col-sm-6">
        <?php $profile = $data[0]?>
        <h1 class="text-success">My Profile</h1>

        <div class="profile-card">
        <div class="profile-img">
            <img src="<?php echo URLROOT; ?>/images/user.png" alt="" width="95" height="90" alt=" profile-pic">
        </div>
        <div>
              <h3><?php echo $profile['first_name'].' '.$profile['last_name']?></h3>
            <p><?php echo $profile['email'] ?></p>
            <p><?php echo $profile['phone'] ?></p>
        </div>

        <div>
            <a href="<?php echo URLROOT; ?>/profiles/change_password" class="btn btn-sm btn-outline-primary">Change Password</a>
            <a href="<?php echo URLROOT; ?>/profiles/update?id=<?php echo $profile['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
        </div>
        </div>
    </div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>