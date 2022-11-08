<?php 
session_start();
$con=mysqli_connect("localhost","root","","miamore");
mysqli_select_db($con,"miamore");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "SELECT * FROM produkti WHERE produkt_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $edit_query);
	
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
<?php
	while ($erow=mysqli_fetch_array($run_edit)){
?>
<form method="post"  enctype="multipart/form-data" action="edit_produkt_by_id.php" >
<br>
<br><br>
	<table width="600" class="table1" align="center" border="10">
		 
		 <tr>
			<td align="center" class="table1" colspan="6">
			<h1 class="view-products">Change the product data in here</h1></td>
		 </tr>
		 <input type="hidden" name="id" size="30" value="<?php echo $erow['produkt_id']; ?>" >
		 <tr>
			<td align="right">Emri Produktit:</td>
			<td>
				<input type="text" name="title" size="30" value="<?php echo $erow['produkt_title']; ?>" >
			</td>
		 </tr>

		 <tr>
			<td align="right">Qmimi Produktit(kg):</td>
			<td>
				<input type="text" name="qmimi" size="30" value="<?php echo $erow['produkt_qmimi'];?>">
			</td>
		 </tr>
		 
		 <tr>
			<td align="right">Foto e Produktit:</td>
			<td>
				<input type="file" name="image" placeholder="../images/<?php echo $erow['produkt_image'];?>">
				<img src="file/<?php echo $erow['produkt_image'];?>"
				width="100" height="100">
			</td>
		 </tr>
		 
		 <tr>
			<td align="right">Permbajtja e Produktit:</td>
			<td>
					<textarea name="content" cols="30" rows="20"><?php echo $erow['produkt_content']; ?></textarea>
			</td>
		 </tr>
		 
		 <tr>
			<td align="center" colspan="6">
				<input type="submit" name="update" value="Ndryshoje tani">
			</td>
		 </tr>


<?php
	}
}	
?>
	</table>
</form>
</body>
</html>
