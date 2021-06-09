<?php
if(!isset($_GET['e'])){
    header("location:home.php");
}
$email=$_GET['e'];
include("dbcon.php");
$s="SELECT * FROM student WHERE email='$email'";
$rs=$con->query($s);
$rw=$rs->fetch_array();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="editprofile.css">
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
                        <a class="nav-link" href="attendance.php">Attendance</a>
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
<section style="color:white";>
    <div class="row">
 <div class="col-2"></div>
 <div class="col-8">
  <form action="updateprof.php?e=<?php echo $email; ?>" method="post" enctype="multipart/form-data">
     <div class="form-group">
	 <label >Full Name </label>
	 <input type="text" class= "form-control" name="name" id="name" value="<?php echo $rw[0]; ?>">
     </div>
	 
	 <div class="form-group">
	 <label>Phone Number</label>
	 <input type="number" name="pno" id="pno" class="form-control" value="<?php echo $rw[2]; ?>" >
	 </div>
     <div class="form-group">
	 <label>Date Of Birth</label>
	 <input type="date" name="dob" id="dob" class="form-control" value="<?php echo $date1; ?> required ">
	 </div>
	 
     <div class="form-group">
	 <label >Course 1 </label>
	 <input type="text" class= "form-control" name="c1" id="c1"  value="<?php echo $rw[10]; ?>">
     </div>
     <div class="form-group">
	 <label >Course 2 </label>
	 <input type="text" class= "form-control" name="c2" id="c2" value="<?php echo $rw[11]; ?>" >
     </div>
     <div class="form-group">
	 <label >Course 3 </label>
	 <input type="text" class= "form-control" name="c3" id="c3" value="<?php echo $rw[12]; ?>" >
     </div>
     <div class="form-group">
	 <label >Course 4 </label>
	 <input type="text" class= "form-control" name="c4" id="c4" value="<?php echo $rw[13]; ?>" >
     </div>
     <div class="form-group">
	 <label >Course 5 </label>
	 <input type="text" class= "form-control" name="c5" id="c5" value="<?php echo $rw[14]; ?>" >
     </div>
     <div class="form-group">
	 <label >Course 6 </label>
	 <input type="text" class= "form-control" name="c6" id="c6" value="<?php $rw[15]; ?>" >
     </div>
     <div class="form-group">
	 <label >Update Proile Picture</label>
	 <input type="file" class= "form-control" name="file" id="file" >
     </div>
	 
	 
	 
	 
    
	 
     <button type="submit"  name="s" class="btn bg-success">Save</button>
     <button type="reset"  name="s" class="btn bg-danger">Reset</button>
 </form>
 </div>
 
 <div class="col-2"></div>
 
</div>
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