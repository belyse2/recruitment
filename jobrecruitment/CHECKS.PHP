<?php
include('connection2.php');

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$phn=$_POST['phone'];
$pswd=$_POST['password'];
$conpswd=$_POST['confirmpassword'];

 if(!isset($_POST['signup']))
{
header('Location:signup.html?error="Press signup"');
exit();
}
else if(empty($fn)&& empty($ln) &&empty($em) &&  empty($phn)  && empty($pswd) && empty($conpswd)) {
    header('Location:signup.html?error="fill all fields"');
}

 else
{

$query="INSERT INTO signup (fname,lname,email,phone, password,comfrmpassword) VALUES('$fn','$ln','$em','$phn','$pswd','$conpswd');";

$data=mysqli_query($conn,$query);

}
if($data=="true"){
    echo"data inserted into the database";
    echo"     ";
    echo"as well as now you have an account , you can continue by login";
}
else{
    echo"data failed to inter  into the database ";
}


if($query=="true")
{
    echo(" not  passing");
}
else
{
    echo(" passing");
}




?>
