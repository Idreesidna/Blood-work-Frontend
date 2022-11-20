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


<?php

$connection = mysqli_connect("localhost","root","","live_stream");
if(mysqli_error($connection))
{
  echo mysqli_error($connection);
}


$query="SELECT * FROM blood";
$result= mysqli_query($connection,$query);
?>

<div class="container mb-5 mt-5">
<div class="row">
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    <center>
    <h1 class="text-center text-white p-2" style="background-color:indianred;">Blood Donors</h1>
    
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Contact no</th> 
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
          <?php
             if ($result->num_rows > 0) 
             {
             while ($res = mysqli_fetch_assoc($result)) 
              { ?>
                 
                 <tr>
                   <td><?php echo $res['name']?></td>
                   <td><?php echo $res['contact']?></td>
                   <td><?php echo $res['Address']?></td>
                 </tr>
              <?php
              }
             }
          ?>
        </tbody>
      </table>
    </center>

  </div>
  <div class="col-lg-2"></div>
</div>
</div>





<div class="container-fluid">
  <div class="row" style="background-color:red;">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3">
      <h6 class="text-white text-center">Live Stream</h6>
      <center>
        <hr class="text-white">
      <img src="images/image2.jpg" width="150px" height="150px">
    </center>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-3 text-white ">
      <h6>Quick Links</h6>
      <hr>
      <li>About Us</li>
      <li>Contact Us</li>
      <li>Who We Are</li>
      <li>How We Work</li>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 col-lg-12 col-xs-12 col-md-12 bg-dark text-white p-2 text-center">
      <i class="fa fa-copyright text-white"></i> Copy Right Live Stream - Live Stream 2022
    </div>
  </div>
</div>

<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>