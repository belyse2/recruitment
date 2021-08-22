<?php
include("connection2.php");
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
                        <p class="text-white formparagraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    <div class="col-md-4">
                        <div class="form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label-white">First Name</label>
                                        <input type="text" class="input-border-white" name="firstname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label-white">Last Name</label>
                                        <input type="text" class="input-border-white" name="lastname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label-white">Email</label>
                                        <input type="text" class="input-border-white" name="email"required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label-white">Phone</label>
                                        <input type="text" class="input-border-white" name="phone" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label-white">Password</label>
                                        <input type="password" class="input-border-white" name="password" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label-white">conform password</label>
                                        <input type="password" class="input-border-white" name="confirmpassword" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-t-10">
                                <button class="form-control btn btn-sm btn-curved webbg" name="signup" required>Sign up</button>
                            </div>
                            <a href="javascript:;" class="forgetpsw">I already have an account?</a>
                            <div class="form-group m-t-10">
                                <a href="login.html"><button class="form-control btn btn-sm btn-curved webbg">Login</button></a>
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
                        <li><a href="#">HOW IT WORKS</a></li>
                        <li><a href="contactus.html">CONTACT US</a></li>
                        <li class="active"><a href="#">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </header>
        
    </body>
</html>
<?php
$fn=$_GET['firstname'];
$ln=$_GET['lastname'];
$em=$_GET['email'];
$ph=$_GET['phone'];
$pwd=$_GET['password'];
$conpwd=$_GET['confirmpassword']; 

echo "$fn";
echo "$ln";
echo "$em";
echo "$ph";
echo "$pwd";
echo "$conpwd";


$query = " INSERT INTO signup VALUES('$fn','$ln','$em','$ph','$pwd','$conpwd')";
$data = mysqli_query ($conn,$query);
if($data)
{
    echo"data inserted into database";
}
else{
    echo"failed to inserted into the database";
}

?>

