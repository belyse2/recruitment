<?php
session_start();

include ("connection2.php");

mysqli_select_db($conn,'jobrecruitment');


$em=$_POST['email'];
$pswd=$_POST['password'];
if(!isset($_POST['login']))
{
    header('location:login.html?error="press login"');
    exit();
}
else if(empty($em) && empty($pswd)){
    header('location:login.html?error="pls fill all field"');
}
else {

$s="SELECT * FROM sign WHERE email='$em' AND password='$pswd'";

$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);

if($num==1)
{
    $_SESSION['email']=$em;
   header('location:admin/home.php');
}
else{
    header('location:login.html?error="Invalid authentcation"');

}

}

?>