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
<br><br><br><br>
<table width="1000" border="5" align="center" class="table1">
	<tr>
		<td colspan="10" align="center"  class="td-color">
		<h1 class="view-products">View all products</h1></td>
	</tr>
	<tr bgcolor="beige">
		<th>Nr.<br />Product:</th>
		<th>Product's Price:</th>
		<th>Product's Name:</th>
		<th>Product's image:</th>
		<th>Descbribe Product:</th>
		<th>Delete<br />Product:</th>
		<th>Change<br />Product:</th>
	</tr>
	
<?php
$con=mysqli_connect("localhost","root","","miamore");
mysqli_select_db($con,"miamore");

$query = "select * from produkti order by 1 DESC";

$run = mysqli_query($con, $query);

while($row=mysqli_fetch_array($run)){
	
	$produkt_id = $row['produkt_id'];
    $produkt_title = $row['produkt_title'];
	$produkt_qmimi = $row['produkt_qmimi'];
	$produkt_image = $row['produkt_image'];
	$produkt_content = substr($row['produkt_content'],0,100);

?>
	<tr align="center">
		<td><?php echo $produkt_id; ?></td>
		<td><?php echo $produkt_qmimi; ?></td>
		<td><?php echo $produkt_title; ?></td>
		<td><img src="file/<?php echo $produkt_image; ?>"
		width="80" height="80"></td>
		<td><?php echo $produkt_content; ?></td>
		<td><button onclick="checkDelete(<?php echo $produkt_id?>);" value="Delete" name="delete">Delete</button></td>
		<td><a href="edit_produkt.php?edit=<?php echo $produkt_id; ?>">Update</a></td>
	</tr>
<?php } ?>
	
</table>
</body>
</html>

<?php } ?>

<script language="JavaScript" type="text/javascript">
   function checkDelete($delete_id){
     if(confirm('Are you sure ?')){
        document.location.href = 'delete.php?delete='+$delete_id; 
        return true;
        }
    }
</script>