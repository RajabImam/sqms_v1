<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height: 80px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>">
    <img src="<?php echo URLROOT; ?>/images/logo-sqms.png" alt="logo" width="95" height="90" class="d-inline-block align-text-top">
   <!-- Dream Guardian -->   
</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about"><b>About</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/services"><b>Services</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact"><b>Contact</b></a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <?php if(isset($_SESSION['id'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/dashboards">Welcome <?php echo $_SESSION['first_name'] ;?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><b>Logout</b></a>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/register"><b>Create Account</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/login"><b>Login</b></a>
            </li>
          </ul>
        <?php endif ;?>
     
    </div>
  </div>
</nav>

