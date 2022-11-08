<?php 
  session_start();
  
  $emri = '';
  $email = '';
  $passwordi ='';
  $confirmPassword = '';

  $errors = array();

  $conn=mysqli_connect("localhost", "root" , "" , "miamore" );
  mysqli_select_db($conn, 'miamore');

  if(isset($_POST['login']))
  {
    $emri=mysqli_real_escape_string($conn,$_POST['emri']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $passwordi = mysqli_real_escape_string($conn,$_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn,$_POST['confirmPassword']);

    if (empty($emri)){
        array_push($errors, "Fistname is required"); 
    }
    else if (!preg_match("/^[a-zA-ZëË ]*$/",$emri)){
        array_push($errors, "Only letters and white space allowed");
    }

    if (empty($email)){
        array_push($errors, "Email is required"); 
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
     	array_push($errors, "Invalid email format");
    }

    if (empty($passwordi)) 
    {   
        array_push($errors, "Password is required"); 
    }

    if ($_POST["password"] !== $_POST["confirmPassword"]) {
        array_push($errors, "The two passwords do not match");
     }

     $query = "SELECT * FROM regjistrimi WHERE emri='$emri' OR email='$email' LIMIT 1";
   
     $result = mysqli_query($conn, $query);
     $user = mysqli_fetch_assoc($result);

     if ($user){ 
        if ($user['emri'] === $emri){
            array_push($errors, "Firstname already exists");
        }
        if ($user['email'] === $email){
            array_push($errors, "Email already exists");
        }
     }

     if (count($errors) == 0) 
     {
        
        $regist ="INSERT INTO regjistrimi (emri,email,passwordi,confirmPassword)
        VALUES ('$emri','$email','$passwordi','$confirmPassword')";

        $rows = "SELECT * FROM regjistrimi WHERE emri='$emri' AND email='$email'";	
	    $run = mysqli_query($conn, $rows);

        if(mysqli_num_rows($run)<100){
            mysqli_query($conn,$regist);
            $_SESSION['email']=$email;
            $_SESSION['success'] = "You are now logged in";
            echo "window.open('index.php','_self')";
            header('location: login.php');
       }
     }
  }
?>