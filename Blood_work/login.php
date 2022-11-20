<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Live Stream</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php require_once("nav.php") ?>



<div class="container mt-5 mb-5">
  <h3 style="color:red;">LOGIN HERE</h3>
  <hr>
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-4 col-xs-12 col-md-4 col-sm-12 p-3 shadow-lg border border-primary" >
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control" id="staticEmail" placeholder="email@example.com">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword">
          </div>
        </div>
        <div>
          <button type="button" class="btn btn-primary">Login</button>
          <button type="button" class="btn btn-warning">Register</button>

        </div>
    </div>
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