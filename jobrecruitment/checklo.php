<?php
include('connection2.php');

$em=$_POST['email'];
$pswd=$_POST['passsword'];



 if(!isset($_POST['submit']))
{
header('Location:login.html?error="Press submit"');
exit();
}
elseif (empty($em)&&empty($pswd) ) {
   // header('Location:login.html?error="fill all fields"');
}

 else
{

$query="INSERT INTO login (email,password) VALUES('$em','$pswd');";

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
