<?php 
  session_start();
  
  $emri = '';
  $tel = '';
  $guests ='';

  $errors = array();

  $conn=mysqli_connect("localhost", "root" , "" , "miamore" );
  mysqli_select_db($conn, 'miamore');

  if(isset($_POST['send']))
  {
    $emri=mysqli_real_escape_string($conn,$_POST['name']);
    $tel = mysqli_real_escape_string($conn,$_POST['number']);
    $guests = mysqli_real_escape_string($conn,$_POST['guests']);

    // if (empty($emri)){
    //    array_push($errors, "Your name is required");
       
    // }
    // else if (!preg_match("/^[a-zA-ZëË ]*$/",$emri)){
    //     array_push($errors, "Only letters and white space allowed");
    // }

    // if (empty($tel)) 
    // { 
    //     array_push($errors, "Your phone number is required");
    // }

    // if (empty($guests)) 
    // { 
    //  array_push($errors, "Your number of guests is required");
    // }
    // if ($_POST["password"] !== $_POST["confirmPassword"]) {
    //     array_push($errors, "The two passwords do not match");
    //  }
   
     if (count($errors) == 0) 
     {
        
        $regist ="INSERT INTO rezervimi (emri,tel,guests)
        VALUES ('$emri','$tel','$guests')";

        $rows = "SELECT * FROM rezervimi WHERE emri='$emri' AND tel='$tel'";	
	    $run = mysqli_query($conn, $rows);

        if(mysqli_num_rows($run)<100){
            mysqli_query($conn,$regist);
            echo "<script>alert('Your rezervation was sent successfully!');*</script>";
            // $_SESSION['emri'] = $emri;
            // $_SESSION['success'] = "You are now logged in";
            header('location: index.php');           
        //   echo "window.open('login.php')";
       }
     }
  }
?>