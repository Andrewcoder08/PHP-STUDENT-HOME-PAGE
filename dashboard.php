<?php
session_start();
include("dbcon.php");
if(!isset($_SESSION['email']))
{
	header("location:home.php");
}
$email=$_SESSION['email'];
$sq="SELECT * FROM `student` where email='$email'";
$rs=$con->query($sq); 
$row=$rs->fetch_array();
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
      <!--PROFILE PICTURE WITH WELCOME MESSAGE-->
<section class="container text-center text-white">
    <div class="container">
        <h4>Welcome</h4>
        <h2 class="display-5"><?php echo $row[0];?></h2>
        <img class="img-fluid" id='pp' src='<?php echo $row[16]; ?>' ></img> 
</section>
<hr>
<h1 class="text-center text-white" id="sd">Student Details</h1>
<hr>
<!--details-->
<section class="container text-left" id='details'>
    <!--Name-->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
            <h3>Name</h3>
        </div>
        <div class="col-md-4">
            <h4><?php echo $row[0];?></h4>
        </div>
        <div class="col-md-2"></div>
    </div>
    <!--Email-->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
          <h3>E-mail</h3>
      </div>
      <div class="col-md-4">
          <h4><?php echo $row[1];?></h4>
      </div>
      <div class="col-md-2"></div>
  </div>
  <!--Phone Number-->
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h3>Phone Number</h3>
    </div>
    <div class="col-md-4">
        <h4><?php echo $row[2];?></h4>
    </div>
    <div class="col-md-2"></div>
</div>
<!--Roll Number-->
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-4">
      <h3>Roll Number</h3>
  </div>
  <div class="col-md-4">
      <h4><?php echo $row[3];?></h4>
  </div>
  <div class="col-md-2"></div>
</div>
    <!--Admission No-->
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
          <h3>Admission No</h3>
      </div>
      <div class="col-md-4">
          <h4><?php echo $row[4];?></h4>
      </div>
      <div class="col-md-2"></div>
  </div>
  <!--Branch-->
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
        <h3>Branch</h3>
    </div>
    <div class="col-md-4">
        <h4><?php echo $row[5];?></h4>
    </div>
    <div class="col-md-2"></div>
</div>
 <!--Class-->
 <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-4">
      <h3>Class</h3>
  </div>
  <div class="col-md-4">
      <h4><?php echo $row[6];?></h4>
  </div>
  <div class="col-md-2"></div>
</div>
<!--Year-->
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-4">
    <h3>Year</h3>
</div>
<div class="col-md-4">
    <h4><?php echo $row[7];?></h4>
</div>
<div class="col-md-2"></div>
</div>
<!--Gender-->
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-4">
    <h3>Gender</h3>
</div>
<div class="col-md-4">
    <h4><?php echo $row[8];?></h4>
</div>
<div class="col-md-2"></div>
</div>
<!--DOB-->
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-4">
    <h3>D.O.B.</h3>
</div>
<div class="col-md-4">
    <h4><?php echo $row[9];?></h4>
</div>
<div class="col-md-2"></div>
</div>
<!--SUBJECTS-->
<div class="row">
<div class="col-md-2"></div>
<div class="col md-4"><h3>Subjects</h3></div>
<div class="col-md-4">
<h4>
<?php echo $row[10]."<br>".$row[11]."<br>".$row[12]."<br>".$row[13]."<br>".$row[14]."<br> ".$row[15] ;?>
</h4></div>
<div class="col-md-2"></div>
</section>
<br>
<br>
<footer id="footer" class="white-section">
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
