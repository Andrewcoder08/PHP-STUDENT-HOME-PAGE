<?php
session_start();
if(!isset($_GET['e'])){
    header("location:home.php");
}
include("dbcon.php");
//fetching values from post method
//primary key
$email=$_GET['e'];
echo $email;
$name=$_POST['name'];
//echo $name;
$pno=$_POST['pno'];
$dob=$_POST['dob'];
$cours1=$_POST['c1'];
$course2= $_POST['c2'];
$course3=$_POST['c3'];
$course4=$_POST['c4'];
$course5=$_POST['c5'];
$course6=$_POST['c6'];
//query for updating
$nm="UPDATE `student` SET  `name`='$name',`phone`='$pno',`dob`='$dob',`subject1`='$cours1',`subject2`='$course2',`subject3`='$course3',`subject4`='$course4',`subject5`='$course5',`subject6`='$course6' WHERE `email`='$email' ";
//getting image
$f=$_FILES['file'];
$fname=$f['name'];
$fext=explode('.',$fname);
$ftype=strtolower(end($fext));
$reqtype=array('jpeg','jpg','png');
if(in_array($ftype,$reqtype)){
    $fileurl="upload/".$fname;
    move_uploaded_file($f['tmp_name'],$fileurl);
    $s="UPDATE `student` SET `picurl` = '$fileurl' WHERE `email` = '$email'";
    $con->query($s);
}
if($con->query($nm)){
header("location:dashboard.php"); 
}
else{
    echo $con->error;

}

?>