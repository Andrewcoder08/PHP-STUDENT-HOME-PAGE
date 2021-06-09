<?php
session_start();
include('dbcon.php');
if(!isset($_SESSION['email']))
{
	header("location:home.php");
}
$email=$_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="password.css">
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js"
        integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
       
    <title> Home Page</title>
    <script>
         function myPassword() {
            var a = document.getElementById('pass').value;
            var check = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{6,20}$/;
            if (a.match(check)) {
                //document.getElementById('pass').style.backgroundColor=" #f5c8d9!important";
                document.getElementById('msgPass').innerHTML = " ";
                return true;
            }
            else {
                var c = document.getElementById('msgPass');
                c.innerHTML = "*Password is not valid";
                c.style.color = "red";
                return false;
            }
        }

        function myPasswordConfirm() {
            var a = document.getElementById('cpass').value;
            var b = document.getElementById('pass').value;
            if (a == b) {
                //document.getElementById('cpass').style.backgroundColor=" #f5c8d9!important";
                document.getElementById('msgCPass').innerHTML = " ";
                return true;
            }
            else {
                var c = document.getElementById('msgCPass');
                c.innerHTML = "*Passwords do not match";
                c.style.color = "red";
                return false;
            }
        }
        </script>
</head>

<body>
    <section id="title" class=" mb-0">

        <nav class="navbar bg-dark navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="">Attendance Portal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Attendance</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Settings
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
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
    <section class="container text-white">
    <form  action="changepassword.php" method="post" id="formsign" onsubmit="return !!(myPassword() & myPasswordConfirm())">
        <h1 class="h3 mb-3 font-weight-normal" id="p">Change Password</h1>
        <input type="password" name="op" id="password" class="form-control" placeholder="Old password" required="" autofocus="">
        <br>
        <label>Password must contain min 6 letters atleat 1 uppercase, 1 lowercase and 1 number</label>
        <input type="password" name="np" id="pass"  onblur="myPassword()" class="form-control" placeholder="New Password" required="">
        <span id="msgPass"></span>
        <br>
        
        <input type="password" name="cnp" id="cpass" class="form-control" onblur="myPasswordConfirm()" placeholder="Re-type New Password" required="">
        <span id="msgCPass"></span>
     <br>

     <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Save Changes</button>

      </form>
      <h1><?php if(isset($_GET['m'])){
          echo "PASSWORD CHANGED SUCCESSFULLY";
      }
 ?></h1>
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
</body>

</html>