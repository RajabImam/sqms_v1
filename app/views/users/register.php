<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">
        <center>
           <h1 class="mb-3">CREATE ACCOUNT</h1>
          <div class="col-6">
          <form method="post" action="<?php echo URLROOT ;?>/users/register" >
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="full_name">First Name<sub>*</sub></label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="first_name" <?php echo (!empty($data['first_name_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['first_name'] ;?>">
    <span class="text-danger"><?php echo $data['first_name_err'] ;?> </span>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="last_name">Last Name<sub>*</sub></label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="last_name" <?php echo (!empty($data['last_name_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['last_name'] ;?>">
    <span class="text-danger"><?php echo $data['last_name_err'] ;?> </span>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="email">Email Address<sub>*</sub></label>
    <div class="col-sm-10">
    <input type="email" class="form-control" name="email" <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['email'] ;?>">
    <span class="text-danger"><?php echo $data['email_err'] ;?> </span>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="phone">Phone No.<sub class="text-danger">*</sub></label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="phone" <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['phone'] ;?>">
    <span class="text-danger"><?php echo $data['phone_err'] ;?> </span>
    </div>
</div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="password">Password<sub>*</sub></label>
    <div class="col-sm-10">
    <input type="password" class="form-control" name="password" <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['password'] ;?>">
    <span class="text-danger"><?php echo $data['password_err'] ;?> </span>
</div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="password">Confirm Password</label>
    <div class="col-sm-10">
    <input type="password" class="form-control" name="confirmPassword" <?php echo (!empty($data['confirmPassword_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['confirmPassword'] ;?>">
    <span class="text-danger"><?php echo $data['confirmPassword_err'] ;?> </span>
</div>
</div>
 
    <div class="form-group row">
    <div class="col-sm-10">
     <button type="submit" class="btn btn-primary">SIGN UP</button>
</div>
</div>
</form>

</div>
        </center>
</div>
<!--<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card bg-light mt-5">
            <div class="card-header card-text">
                <h2 class="card-text">Create Account</h2>
            <p class="card-text">Please Fill out This form to register with us</p>
            </div>
        
            <div class="card-body">
                <form method="post" action="<?php echo URLROOT ;?>/users/register">
                    <div class="form-group">
                        <label for="name">Name<sub>*</sub></label>
                        <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['name'] ;?>">
                        <span class="invalid-feedback"><?php echo $data['name_err'] ;?> </span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email<sub>*</sub></label>
                        <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['email'] ;?>">
                        <span class="invalid-feedback"><?php echo $data['email_err'] ;?> </span>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password<sub>*</sub></label>
                        <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['password'] ;?>">
                        <span class="invalid-feedback"><?php echo $data['name_err'] ;?> </span>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password<sub>*</sub></label>
                        <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '' ;?>" value="<?php echo $data['confirm_password'] ;?>">
                        <span class="invalid-feedback"><?php echo $data['confirm_password_err'] ;?> </span>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="submit" class="btn btn-success btn-block pull-left" value="Resgister">
                            </div>
                            <div class="col">
                                <a href="<?php echo URLROOT ;?>/users/login" class="btn btn-light btn-block pull-right">Already have account? Login </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>-->
<?php require APPROOT . '/views/includes/footer.php'; ?>