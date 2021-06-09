<?php
session_start();
include("dbcon.php");
$email = $_SESSION['email'];
$op=$_POST['op'];
$np=$_POST['np'];
$cnp=$_POST['cnp'];
$sq="SELECT * FROM `login` WHERE `Email`='$email' ";
$rs=$con->query($sq);
$row=$rs->fetch_array();
$oldpass=$row[1];
if (($oldpass==$op) && ($np==$cnp)){
    $s="UPDATE `login` SET `Password`= '$np'   WHERE `email`='$email'";
    $con->query($s);
    header("location: password.php?m=1");
}
else if($np!=$cnp &&  $op==$oldpass){
    header("location: password.php");
}

?>