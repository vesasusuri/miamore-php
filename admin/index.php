<?php
session_start();

if(!isset($_SESSION['username'])){

header("location: login.php");	
}
else{

?>

<html>
	<head>
		<title>Faqja per Admin</title>
		
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

<div id="welcome">

<h1>Hi, Admin good to see you again!</h1>

<p>If you are a new admin this is the dashboard you'll work on the future. <br>You can add new products to the website, you can delete them, or change the price</p>

</div>
<?php
	
	if(isset($_GET['insert'])){
	include("insert_produkt.php");		
	}
?>

</body>
</html>

<?php } ?>