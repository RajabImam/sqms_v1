<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <div class="login-div">
        <div class="login-title">
            <h1>LOGIN</h1>
        </div>
        <div>
            <form method="post" action="<?php echo URLROOT; ?>/users/login">
                <div class="form-group">
                    <div class="mb-5">
                        <input type="email" class="form-control" placeholder="Email" name="email" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                        <span class="text-danger"><?php echo $data['email_err']; ?> </span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-5">
                        <input type="password" class="form-control" placeholder="Password" name="password" <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                        <span class="text-danger"><?php echo $data['password_err']; ?> </span>
                    </div>
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                </div>

                <h6 class="mb-5">Don't have an account? <a href="<?php echo URLROOT; ?>/users/register"> Create Account </a></h6>
            </form>
        </div>
    </div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>