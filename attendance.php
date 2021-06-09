<?php
session_start();
include("dbcon.php");
if(!isset($_SESSION['email']))
{
	header("location:home.php");
}

$email=$_SESSION['email'];
if(!isset($_GET['page'])){
    $page=1; 
}
else{
    $page=$_GET['page'];
}
$lowerlimit=($page-1)*10;
$noofrows=10;
$s="SELECT * FROM `attendance` where `email`='$email' limit $lowerlimit,$noofrows";
$res=$con->query($s); 

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link rel="stylesheet" href="dashboard.css">
<script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title> Home Page</title>
  </head>
  <body>
    <section id="title" class=" mb-0" >

        <nav class="navbar bg-dark navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="">Attendance Portal</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="attendance.php">Attendance</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Settings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="editprofile.php?e=<?php echo $email;?>">Edit Profile</a>
                      <a class="dropdown-item" href="password.php">Change Password</a>
                    </div>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                </li>
            </ul>
         </div>
        </nav>
      </section>
<hr>
<h1 style="color:black;" class="text-center" id="sd">ATTENDANCE</h1>
<hr>
<!--details-->
<section class="container text-center text-white">
<div class="row">
<div class="col-md-12">
<table border="3" class="table text-white">
<thead>
<tr>
<th>NAME</th>
<th>ROLL NO</th>
<th>CLASS</th>
<th>SUBJECT</th>
<th>DATE</th>
<th>STATUS</th>
</tr>
</thead>
<tbody>

<?php
while($rows=$res->fetch_array()){?>
<tr>
<td>
<?php echo $rows[1]; ?>
</td>
<td>
<?php echo $rows[3]; ?>
</td>
<td>
<?php echo $rows[5]; ?>
</td>
<td>
<?php echo $rows[7]; ?>
</td>
<td>
<?php echo $rows[8]; ?>
</td>
<td>
<?php echo $rows[9]; ?>
</td>
<?php } ?>
</tr>
</tbody>
</table>
<?php 
$s2= "SELECT * FROM `attendance` where `email`='$email' ";
$res1=$con->query($s2);
//echo $res1->num_rows;
$page=ceil($res1->num_rows/$noofrows);
//echo $page;
//die;
for($i=1;$i<=$page;$i++){ ?>
<a href="attendance.php?page=<?php echo $i;?>"><?php echo $i;?> </a>
<?php
}?>
</section>
<br>
<br>
<footer id="footer" class="white-section text-center">
        <div class="container-fluid" >
        <a href="https://twitter.com/avi_nigam1" class="text-white"><i class="ficon fab fa-twitter "></i></a>
        <a href="https://www.facebook.com/ujjwal.gupta.5621" class="text-white"><i class="ficon fab fa-facebook-f "></i></a>
        <a href="https://www.instagram.com/_ankitbhardwaj_/" class="text-white"><i class="ficon fab fa-instagram  "></i></a>
        <a href="mailto:avinigamsz@gmail.com" class="text-white"><i class="ficon fas fa-envelope "></i></a>
          <p>© Copyright 2020 <a href="about.php" class="text-white">Team</a></p>
        </div>
      </footer>
   <script type="text/javascript">

   </script>
  </body>
</html>