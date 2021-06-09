<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css">
<script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Attendance homepage</title>
  
  <style>
    body{
      font-family: 'Open Sans', sans-serif;
      text-align:center;
    }
    h1{
    font-family: 'Open Sans-Black', sans-serif;
      font-size: 3rem;
      line-height: 1.5;
      font-weight: 900;
    }
    .container-fluid{
      padding:7% 15%;
    }
    /* headings */
    .section-heading
    {
      font-size: 3rem;
      line-height: 1.5;
    }
    
    #title{
      padding-top:7%;
    }
    #title .container-fluid{
      text-align: left;
      padding: 3% 15% 7%;
    }
    /* sections*/
    .white-section{
    background-color: white;
    }
    .colored-section{
      background-color: powderblue;
    }
    /* form */
    .f{
      margin: 5%;
      width:100%;
      padding: 20px;
      background-color: rgb(223, 247, 255);
      color:black;
    }
    
    .btno{
      margin:2px;
    }
    .in{
    text-align: center;
    }
    
    /* Nav bar */
    .navbar{
      margin-bottom: 4.5rem;
    }
    .navbar-brand{
      font-size: 2rem;
        font-weight: bold;
    
    }
    .nav-item{
      padding: 0px 18px;
    }
    .nav-link{
      font-size: 1.5rem;
      font-family: 'Open Sans-Light',;
    }
    .new{
      background-color: red;
      margin: 20px;
      height: 200px;
      width:200px;
    }
    /* features section */
    .feature-heading
    {
      font-size: 1.5rem;
      font-weight: 600;
    }
    .fb{
      padding:4.5%;
    }
    .icon{
      color:steelblue;
      margin-bottom:16px;
    }
    .icon:hover{
      color: powderblue;
    }
    .pa{
      color: #8f8f8f;
    }
    /*
    /* footer */
    #footer{
      color: #8f8f8f;
    }
    
    .ficon{
      margin:20px 10px;
    }
    /* advertisement section */
    #advertisement{
      margin: auto;
    }
    .left{
      text-align: left;
    }
    .advertisement-heading{
      font-size:3rem;
      line-height: 1.5;
      font-weight: bold;
    }
    .link1{
      color:white;
    }
    .link1:hover{
      color:gray;
    }
  </style>    
  <script>
  function myEmail() {
            var a = document.getElementById('email').value;
            //email regex
            var check = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
            if (a.match(check)) {
                document.getElementById('email').style.backgroundColor=" #f5c8d9!important";
                document.getElementById('msgEmail').innerHTML = "KUCHO NAHI DIYA LIKH LEY BHAi";
                return (true);
            }
            else {
                var c = document.getElementById('msgEmail');
                c.innerHTML = "*Email is not valid";
                c.style.color = "red";
                return false;
            }
        }
  </script>
    </head>
<body>

<section id="title" class="colored-section">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgb(3, 38, 78);">
     
        <a class="navbar-brand" href="">Attendance Portal</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="Registration.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#footer">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#footer">Contact Us</a>
            </li>

     </div>
    </nav>
    <div class="container-fluid">
    <div class="row">


        <div class="col-lg-6">
          <h1>Manage Attendance with ease.</h1>
          <a href="Registration.php" class="link1"><button type="button" class="btn btn-dark btn-lg">Register</button></a>
          <img src="" alt="">
        </div>
        <div class="col-lg-6">
          <form class="f form-group" action="Login_save.php" method="post">
                  <h2 style="text-align: center;">Login</h2>
                  <hr>

                  <label>Email</label>
                  <input type="email" class="form-control form-group" name="email" onblur="myEmail()" id="email" placeholder="Enter Email">
                  <span id="msgEmail"></span>
                  <label>Password</label>
                  <input type="Password" class="form-control form-group" name="password" id="password" placeholder="Enter Password">
                  <hr>
                  <p style="color:red;">
                    <?php
                    if(isset($_SESSION['err']))
                    {
                        echo $_SESSION['err'];
                        session_destroy();
                    }
                    ?>
                  </p>
                 <button type="submit" class="btn btn-primary btn-block btno" name="submit2" >Login</button>
                 <br>
                 <p class="left"> <a href="Forgot_Password.php">Forgot Password?</a> </p>
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
        <h3 class="feature-heading">Guarenteed to work.</h3>
        <p class="pa">Our Attendance System is Guarenteed to work.</p>
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
          <h2 class="advertisement-heading">Over 10,000 certified institutions are using our Attendance System.</h2>
           <button type="button" class="btn btn-dark btn-lg"><a href="Registration.php" class="link1">Register Now</a></button>
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

  <footer style="background-color:rgb(110, 217, 250); " id="footer" >
      <div class="container-fluid text-dark">
          <a href="https://twitter.com/avi_nigam1"><i class="ficon fab fa-twitter "></i></a>
          <a href="https://www.facebook.com/ujjwal.gupta.5621"><i class="ficon fab fa-facebook-f "></i></a>
          <a href="https://www.instagram.com/_ankitbhardwaj_/"><i class="ficon fab fa-instagram  "></i></a>
          <a href="mailto:avinigamsz@gmail.com"><i class="ficon fas fa-envelope "></i></a>
          <p>© Copyright 2020 <a href="about.php">Team</a></p>
      </div>
  </footer>

</body>
</html>
