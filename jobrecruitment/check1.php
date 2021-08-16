<?php
/include('connection2.php');

if(!isset($_POST['signup']))
{
header('Location:signup.html?error="Press signup"');
exit();
}
elseif(empty($fn)&& empty($ln) &&empty($em) &&  empty($tle)  && empty($mess))
{
    header('Location:signup.html?error="Press signup"');
    exit();

}
else
{
 $fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$tle=$_POST['title'];
$mess=$_POST['message'];






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
    echo"$fn";
echo"$ln";
}
else
{
    echo("not passing");
}
?>
