<?php require APPROOT . '/views/includes/header.php'; ?>


<div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="v-pills-pets-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pets" type="button" role="tab" aria-controls="v-pills-pets" aria-selected="false">Pet's Management</button>
    <button class="nav-link" id="v-pills-analytics-tab" data-bs-toggle="pill" data-bs-target="#v-pills-analytics" type="button" role="tab" aria-controls="v-pills-analytics" aria-selected="false">Analytics</button>
    <button class="nav-link" id="v-pills-sub-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sub" type="button" role="tab" aria-controls="v-pills-sub" aria-selected="false">Subscription</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <h1 class="text-success">Summary</h1>

    <section class="container-fluid mb-5">
    <div class="row">
      <div class="col-md-4">
        <div id="bar-chart"></div>
      </div>
      
      <div class="col-md-8">
        <div id="line-chart"></div>
      </div>
      
      <div class="col-md-8">
        <div id="area-chart"></div>
      </div>
      
      <div class="col-md-4">
        <div id="donut-chart"></div>
      </div>
      
      <div class="col-md-8">
        <div id="pie-chart"></div>
      </div>
    </div>
  </section>

  
    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
    <h1 class="text-success">Profile</h1>
 <!--Profile--->
<section class="container-fluid">
<div class="row">
<div class="col-6 py-2 pl-2">
<h5>UPDATE PROFILE</h5>
<form method="post" action="" >
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
    <form method="post" action="" >
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
  </section>


    </div>
<!-- Pet's Management content start here   -->
<div class="tab-pane fade" id="v-pills-pets" role="tabpanel" aria-labelledby="v-pills-pets-tab">
    <h1 class="text-success">Pets Management</h1>
<div class="container">
  <div class="row">
    <div class="col">
    <form method="post" action="" >
<div class="mb-3">
  <label for="pet" class="form-label">Pet's Name</label>
  <input type="text" class="form-control" name="pet" id="pet" placeholder="Pet's Name">
</div>
<div class="mb-3">
  <label for="classification" class="form-label">Pet's Classification</label>
  <input type="text" class="form-control" name="classification" id="classification" placeholder="Classification">
</div>
<div class="mb-3">
  <label for="age" class="form-label">Pet's Age</label>
  <input type="number" class="form-control" name="age" id="age" placeholder="Age">
</div>
<div class="form-group row">
    <div class="col-sm-10">
     <button type="submit" class="btn btn-success">ADD</button>
</div>
</div>
</form>
    </div>
    <div class="col">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Classification</th>
      <th scope="col">Age</th>
      <th scope="col">Owner</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Jaguar</td>
      <td>Dog</td>
      <td>2</td>
      <td>Bubu</td>
    </tr>
    
  </tbody>
</table>
    </div>
  </div>
</div>
</div>

    <div class="tab-pane fade" id="v-pills-analytics" role="tabpanel" aria-labelledby="v-pills-analytics-tab">
    <h1 class="text-success">Pet's Analytics</h1>
    </div>
    <div class="tab-pane fade" id="v-pills-sub" role="tabpanel" aria-labelledby="v-pills-sub-tab">
        <h1 class="text-success">Subscription</h1>
        <!--Subscription content -->

        <div class="container">
  <div class="row">
    <div class="col">
    <form method="post" action="" >
<div class="mb-3">
<label for="type" class="form-label">Type</label>
<select class="form-select" aria-label="Default select example">
  <option value="free">Free</option>
  <option value="paid">Paid</option>
</select>
</div>
<div class="mb-3">
  <label for="start" class="form-label">Start Date</label>
  <input type="date" class="form-control" name="start" id="start">
</div>
<div class="mb-3">
  <label for="end" class="form-label">End Date</label>
  <input type="date" class="form-control" name="end" id="end">
</div>
<div class="form-group row">
    <div class="col-sm-10">
     <button type="submit" class="btn btn-success">SUBSCRIBE</button>
</div>
</div>
</form>
    </div>
    <div class="col">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Type</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Enrolled</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Free</td>
      <td>22/11/2021</td>
      <td>22/11/2022</td>
      <td>04/11/2021</td>
      <td>Free no Payment required</td>
    </tr>
    
  </tbody>
</table>
    </div>
  </div>
</div>


    </div>
  </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>