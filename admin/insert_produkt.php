<?php
session_start();

if(!isset($_SESSION['username'])){

header("location: login.php");	
}
else{

?>

<html>
	<head>
		<title>Insert new products</title>
		<link rel="stylesheet" href="admin_style1.scss" />
	</head>
	
<body>
<div id="header">
<a href="#home" class="logo"><img src="logo2.png" alt="" class="logo1"></a>
<h2><a href="logout.php" class="log-out">Log Out</a></h2>
</div>

<div id="sidebar">
   <h2><b>user: <?php echo $_SESSION['username']; ?></b></h2>
   <h2><a href="costumer.php" class="view">Costumer</a></h2>
   <h2><a href="order.php" class="view">Orders</a></h2>
   <h2><a href="view_produkt.php" class="view">Products</a></h2>
   <h2><a href="insert_produkt.php" class="add-new">Add a new product</a></h2>
</div>
<form method="post" action="insert_produkt.php" 
enctype="multipart/form-data">
<br><br><br><br>

<h1 class="add-new1">Add a new product</h1>
<div class="both-divs">
	<div class="right-side-div">
		<h4 class="h4">Product Name :</h4>
		<h4 class="h4">Product Price :</h4>
		<h4 class="h4">Product image :</h4>
		<h4 class="h4">Describe the product :</h4>
	</div>

	<div class="left-side-div">
		<br>
	<input type="text" name="title" placeholder="product name">
	<br>
	<input type="text" name="qmimi" placeholder="product's price">
	<br>
	<input type="file" name="image" placeholder="product's image:">
	<br>
	<textarea name="content"cols="35" rows="20" placeholder="describe the product:"></textarea>

    </div>
</div>
<button type="submit" name="submit" class="btn-Addnew"> Add Now</button>

</form>
</body>
</html>

<?php 
$con=mysqli_connect("localhost","root","","miamore");
mysqli_select_db($con,"miamore");

if(isset($_POST['submit'])){
	
	$produkt_title = $_POST['title'];
	$produkt_qmimi = $_POST['qmimi'];
	$produkt_content = $_POST['content'];
	$produkt_image = $_FILES['image']['name'];
	$image_tmp= $_FILES ['image']['tmp_name'];
	
	
	if($produkt_title=='' or $produkt_qmimi=='' or $produkt_content==''){
		
		echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
		
		exit();
	}
	else {
		move_uploaded_file($image_tmp,"file/$produkt_image");
		
		$insert_query = "INSERT INTO produkti
        (produkt_title,produkt_qmimi,produkt_image,produkt_content) 
		VALUES ('$produkt_title','$produkt_qmimi','$produkt_image','$produkt_content')";
		
		if(mysqli_query($con, $insert_query)){
			
		echo "<script>alert ('Product published successfully')</script>";
		echo "<script>window.open('view_produkt.php','_self')</script>";
		
		}
	}	
}

?>
<?php } ?>