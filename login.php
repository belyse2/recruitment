
<?php
include ("connection2.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> WELCOME TO OUR WEBSITE  JOB RECRUITMENT </title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="loginpage">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="text-white">Let's get in touch</h3>
                        <p class="text-white formparagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    <div class="col-md-4">
                        <div class="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label-white">Email / Phone</label>
                                        <input type="text" name="email" class="input-border-white">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label-white">Password</label>
                                        <input type="password" name="password" class="input-border-white">
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:;" class="forgetpsw">Forget password?</a>
                    
                            <div class="form-group m-t-10">
                                <button class="form-control btn btn-sm btn-curved webbg">Login</button>
                            </div>
                            
                            <a href="javascript:;" class="forgetpsw">You don't have an account?</a>
                            <div class="form-group m-t-10">
                                <a href="signup.html"><button class="form-control btn btn-sm btn-curved webbg">Sign up</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header> 
            <div class="main">
                <div class="logo"> 
                    <img src="images/logo.png">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="jobs.html">JOBS</a></li>
                        <li><a href="how it works.html">HOW IT WORKS</a></li>
                        <li><a href="contactus.html">CONTACT US</a></li>
                        <li class="active"><a href="#">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </header>
        
    </body>
</html>
<?php
$em=$_GET['email'];
$pwd=$_GET['password'];

echo"$em";
echo"$pwd";

$query="INSERT INTO LOGIN VALUES('$em','$pwd')";
$data=mysqli_query($conn,$query);
if($data){
    echo"data inserted into the database";
}
else{
    echo"data failed to inter  into the database ";
}

?>

