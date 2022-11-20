<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Live Stream </title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php require_once("nav.php") ?>



<div class="container mt-5 mb-5">
  <hr>
  <div class="row">
    
    <div class="col-lg-6 col-xs-12 col-md-4 col-sm-12 p-3 shadow-lg border border-primary p-3">
        <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Username</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">City</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">State</label>
          <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">Zip</label>
          <input type="text" class="form-control" id="validationCustom05" required>
          <div class="invalid-feedback">
            Please provide a valid zip.
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
</form>
    </div>

    <div class="col-lg-4">
      <img src="images/image1.jpg" width="500" height="500" class="shadow-lg">
    </div>
    <div class="col-lg-2"></div>

  </div>
</div>


<div class="container-fluid">
  <div class="row" style="background-color:red;">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 text-white ">
      <h6>Quick Links</h6>
      <hr>
      <li>About Us</li>
      <li>Contact Us</li>
      <li>Who We Are</li>
      <li>How We Work</li>
      <li>FAQ</li>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 text-white">
      <h6>HOW WE WORK</h6>
      <hr>
      <p class="p-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 bg-dark text-white p-2 text-center">
      <i class="fa fa-copyright text-white"></i> Copy Right HIST - Hidaya 2022
    </div>
  </div>
</div>

<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>