<?php
session_start();
?>

<html>
	<head>
		<title>Logini per Admin</title>
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	</head>

<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="contact-img.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="POST" action="login.php">
          <h1>Log In</h1>
          <br>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form1Example13" class="form-control form-control-lg" placeholder="Username" name="username" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Password" name="password" />
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block"  name="login" value="Log in" >Sign in</button>

        
        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","miamore");
mysqli_select_db($con,"miamore");

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
    if(empty($username)||empty($password)){
        
        echo "<script>alert('Username ose Password jane te zbrazeta!');</script>";
    }
    else if($username!='' || $password!=''){

	   $admin_query = "select * from admin where username='$username' AND password='$password'";
	
	   $run = mysqli_query($con, $admin_query);
	
	   if(mysqli_num_rows($run) > 0){
	       $_SESSION['username']=$username;
           echo "<script>window.open('index.php','_self')</script>";
	   }
	   else{
	       echo "<script>alert('Username ose password eshte gabim')</script>";
	   }
    }
    
}
?>