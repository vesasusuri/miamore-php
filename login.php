<?php
session_start();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="images/about-img.svg" alt="">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="POST" action="login.php">
          <h1>Log In</h1>
          <br><br>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" placeholder="Email Address" name="email" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Password" name="passwordi" />
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="Register.php">Sing Up</a>
          </div>

          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-lg btn-block"  name="login" value="Log in" >Sign in</button>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
            role="button">
            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
          </a>
 

        </form>
      </div>
    </div>
  </div>
</section>

<?php 
   $connect=mysqli_connect('localhost','root','','miamore');
   mysqli_select_db($connect,'miamore');
   
   if(isset($_POST['login']))
   {
    $email = mysqli_real_escape_string($connect,$_POST['email']);
    $passwordi = mysqli_real_escape_string($connect,$_POST['passwordi']);
   

   if(empty($email)&&empty($passwordi)){
     echo "<script>alert('Email ose Passwordi jane te zbrazeta!')</script>";
	}

    else if($emri!='' || $passwordi!='')
    {
        $login = "SELECT * FROM regjistrimi WHERE email='$email' AND passwordi='$passwordi'";
        $con=mysqli_query($connect, $login);
       
        if(mysqli_num_rows($con)>0)
        {
            $_SESSION['email']=$email;
            $_SESSION['success'] = "You are now logged in";
            echo "window.open('acc.php','_self')";
            header('location: acc.php');
        }
        else
        {
            echo "<script>
            alert('Email ose Password jane gabim!')
            </script>";
        }
     }
  }
?>

