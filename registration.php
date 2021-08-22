<?php
session_start();
header ('location:login.html');
include ("connection2.php");

mysqli_select_db($conn,'jobrecruitment');

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$phn=$_POST['phone'];
$pswd= $_POST['password'];
$cnpswd=$_POST['confirmpassword'];

$s="select* from sign where email='$em'";

$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
    echo"email has already used";
}
else{
    $reg= "insert into sign(firstname,lastname,email,phone,password,confirmpassword) values('$fn','$ln','$em','$phn','$pswd','$cnpswd')";
    mysqli_query($conn,$reg);
    echo"now you have account or registration successful";
}





?>