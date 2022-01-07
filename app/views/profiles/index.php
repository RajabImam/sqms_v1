<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="row container-fluid" style="margin-top: 20px;">

    <div class="col-3">
        <?php require APPROOT . '/views/includes/menu.php'; ?>
    </div>
    <div class="col-9">
        <?php $profile = $data[0]?>
        <h1 class="text-success">My Profile</h1>

        <div class="profile-card">
        <div class="profile-img">
            <img src="<?php echo URLROOT; ?>/images/user.png" alt="" width="95" height="90"" alt=" profile-pic">
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

        <!--<table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Created On</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $i => $profile) { ?>
                    <tr>
                        <th scope="row"><?php echo $i + 1 ?></th>
                        <td><?php echo $profile['first_name'] ?></td>
                        <td><?php echo $profile['last_name'] ?></td>
                        <td><?php echo $profile['email'] ?></td>
                        <td><?php echo $profile['phone'] ?></td>
                        <td><?php echo $profile['created_on'] ?></td>
                        <td style="width: 236px;">
                            <a href="<?php echo URLROOT; ?>/profiles/update?id=<?php echo $profile['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>-->

    </div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>