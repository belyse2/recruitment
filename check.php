<?php
include ("connection2.php");
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$tle=$_POST['title'];
$msg=$_POST['message'];

if(!isset($_POST['submit']))
{
    header('location:contactus.html?error="press submit"');
    exit();
}
else if(empty($fn) && empty($ln) && empty($em) && empty($tle) && empty($msg)){
    header('location:contactus.html?error="pls fill all field"');
}
else {
    $query="INSERT INTO contact(firstname,lastname,email,ttttle,message) VALUES('$fn','$ln','$em','$tle','$msg');";
    $data=mysqli_query($conn,$query);
}
if($data=="true"){
    echo"data inserted into the database";
}
else{
    echo"data failed to inter  into the database ";
} 
if($query=="true")
{
    echo"not passing";
}
else{
    echo" passing";
}



?>
