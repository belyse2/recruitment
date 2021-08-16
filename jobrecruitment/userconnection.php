
  <?php
session_start();

// initializing variables
$fname   = "";
$lname ="";
$email = "";
$phone = "";
$password="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'job');

// REGISTER USER
if (isset($_POST['signup'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "name is required"); }
  if (empty($lname)) { array_push($errors, "name is required"); }
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($password)) { array_push($errors, "password is required"); }
  if (empty($phone)) { array_push($errors, "phone is required"); }
  if (!$password) {
	array_push($errors, " password do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM signup WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $job_db = mysqli_fetch_assoc($result);
  
  if ($job_db) { // if user exists
    if ($job_db['fname'] === $fname) {
      array_push($errors, "fname already exists");
    }
    if ($job_db['lname'] === $lname) {
        array_push($errors, "lname already exists");
      }
    if ($job_db['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO sign up (fname,lname,email, password,phone,) 
  			  VALUES('$fname','$lname','$email', '$password','$phone',)";
  	mysqli_query($db, $query);
  	$_SESSION['fname'] = $fname;
    $_SESSION['lname'] = $lname;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: connect.php');
  }
}
// ... 

// LOGIN USER
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = '$email';
          $_SESSION['success'] = "You are now logged in";
          header('location: applicationform.php');
        }else {
          
            array_push($errors, "Wrong emailid/password combination");
        }
    }
  }
  
  ?>
 