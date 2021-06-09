<?php
session_start();
  $login=true;
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  $email=$_POST['a'];
  $pass=$_POST['b'];
  include 'dbcon.php';
  $sql="SELECT * FROM `login` WHERE Email='$email' AND Password = '$pass'";
  $result=mysqli_query($con,$sql);
  $n=mysqli_num_rows($result);
  $rs=mysqli_query($con,$sql);
  $row=$rs->fetch_array();
 $Role=$row[2];
  if( $Role=='Admin')
  {
    $_SESSION['log']=true;
    $_SESSION['Email']=$email;
    $login=true;
    header("location:admin.php");
  }
  elseif($Role=="Hod")
  {
    $_SESSION['log']=true;
    $_SESSION['Email']=$email;
    $login=true;
    header("location:HOD's dashboard.php");
  }
  elseif($Role=="Faculty")
  {
  $_SESSION['log']=true;
  $_SESSION['Email']=$email;
  $login=true;
  $sql="SELECT * FROM `faculty_info` WHERE Email='$email'";
  $result=mysqli_query($con,$sql);
  $rs1=mysqli_query($con,$sql);
  $row1=$rs1->fetch_array();
  $_SESSION['subject']=$row1[7];
  header("location:Faculty_Home.php");

  }
  elseif($Role=="student")
  {
    $_SESSION['log']=true;
    $_SESSION['email']=$email;
    $login=true;
    header("location:dashboard.php");
  }
  else {
    $login=false;
    session_destroy();
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

      <?php echo getcwd(); ?>  <link rel="stylesheet" href="styles1.css">
<script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Attendance homepage</title>
    </head>
<body>

<section id="title" class="colored-section">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"  >
        <a class="navbar-brand" href="">Attendance Portal</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="reg.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#footer">Contact Us</a>
            </li>

     </div>
    </nav>
    <?php if($login==false )
    {
    echo  "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Invalid Email Address or Password!</strong>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
    }
    ?>
    <div class="container-fluid">
    <div class="row">


        <div class="col-lg-6">
          <h1>Manage Attendance with ease.</h1>
          <button type="button" class="btn btn-dark btn-lg"><a href="reg.php" class="link1">Register</a></button>
          <img src="" alt="">
        </div>
        <div class="col-lg-6">
          <form class="f form-group" action="/myproject/home.php" method="post">
                  <h2 class="in">Login</h2>
                  <hr>
                  <label>Email</label>
                  <input type="email" class="form-control form-group" name="a" value="" placeholder="Email"><label>Password</label><input type="Password" class="form-control form-group" name="b" value="" placeholder="Password">
                  <hr>

                 <button type="submit" class="btn btn-primary btn-block btno" name="s" value="Submit">Login</button>
                 <br>
                 <p class="left"> <a href="forgot_pass.php">Forgot Password?</a> </p>
                 </form>
        </div>
    </div>
  </div>
</section>
  <section id="features" class="white-section">
  <div class="container-fluid">


    <div class="row">
      <div class="fb col-lg-4 ml-auto">
        <i class="fas fa-check-circle icon fa-4x"></i>
        <h3 class="feature-heading">Easy to use.</h3>
        <p class="pa">User friendly and accessible anywhere.</p>
      </div>
      <div class="fb col-lg-4 ml-auto">
        <i class="fas fa-bullseye icon fa-4x"></i>
        <h3 class="feature-heading">Guaranteed to work.</h3>
        <p class="pa">Our Attendance System is Guaranteed to work.</p>
      </div>
      <div class="fb col-lg-4 ml-auto">
        <i class="fas fa-heart icon fa-4x"></i>
        <h3 class="feature-heading">Excellent Support</h3>
        <p class="pa">We prioritize the experience of our users.</p>
      </div>
    </div>
</div>
  </section>
  <section id="advertisement" class="colored-section">
    <div id="testimonial-carousal" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <h2 class="advertisement-heading">A lot of certified institutions prefer using our Attendance System.</h2>
           <button type="button" class="btn btn-dark btn-lg"><a href="reg.php" class="link1">Register Now</a></button>
        </div>
        <div class="carousel-item container-fluid">
          <h2 class="advertisement-heading">Join our class leading Attendance portal.</h2>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousal" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>

      </a>
      <a class="carousel-control-next" href="#testimonial-carousal" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a></div>
  </section>

  <footer id="footer" class="white-section">
          <div class="container-fluid">
          <a href="https://twitter.com/avi_nigam1"><i class="ficon fab fa-twitter "></i></a>
          <a href="https://www.facebook.com/ujjwal.gupta.5621"><i class="ficon fab fa-facebook-f "></i></a>
          <a href="https://www.instagram.com/_ankitbhardwaj_/"><i class="ficon fab fa-instagram  "></i></a>
          <a href="mailto:avinigamsz@gmail.com"><i class="ficon fas fa-envelope "></i></a>
            <p>© Copyright 2020 <a href="about.php">Team</a></p>
          </div>
  </footer>
</body>
</html>
