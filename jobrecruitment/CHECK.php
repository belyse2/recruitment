<?php
include('connection2.php');


$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$tle=$_POST['title'];
$mess=$_POST['message'];


 if(!isset($_POST['submit']))
{
header('Location:contactus.html?error="Press submit"');
exit();
}
elseif (empty($fn)&&empty($ln) &&empty($em)  &&empty($tle) &&empty($mess) ) {
    header('Location:contactus.html?error="fill all fields"');
}

 else
{

$query="INSERT INTO contactus (fname,lname,email,title,message) VALUES('$fn','$ln','$em','$tle','$mess');";

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
    echo(" not passing");
}
else
{
    echo(" passing");
}




?>
