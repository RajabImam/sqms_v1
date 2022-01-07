<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="signup-div">
        <div class = "signup-title">
            <h1>CREATE ACCOUNT</h1>
        </div>
        <div>
            <form method="post" action="<?php echo URLROOT; ?>/users/register">
                <div class="form-group">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="First Name (Required)" name="first_name" <?php echo (!empty($data['first_name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['first_name']; ?>">
                        <span class="text-danger"><?php echo $data['first_name_err']; ?> </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Last Name (Required)" name="last_name" <?php echo (!empty($data['last_name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['last_name']; ?>">
                        <span class="text-danger"><?php echo $data['last_name_err']; ?> </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email (Required)" name="email" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                        <span class="text-danger"><?php echo $data['email_err']; ?> </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Phone No. (Required)" name="phone" <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone']; ?>">
                        <span class="text-danger"><?php echo $data['phone_err']; ?> </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Password (Required)" name="password" <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                        <span class="text-danger"><?php echo $data['password_err']; ?> </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Confirm Password (Required)" name="confirmPassword" <?php echo (!empty($data['confirmPassword_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirmPassword']; ?>">
                        <span class="text-danger"><?php echo $data['confirmPassword_err']; ?> </span>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">SIGN UP</button>
                </div>
            </form>
        </div>
    </div>
    <!--</center>-->
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>