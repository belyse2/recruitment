<?php 
$severname="localhost";
$username="root";
$password="";
$dbname="jobrecruitment";

$conn= mysqli_connect ($severname,$username,$password,$dbname);

if($conn)
{

  // echo "connection ok";
}
else{
  echo "failed to connect".mysqli_connect_error();
}

?>