<?php
$connect=mysqli_connect("localhost","root","","miamore");
mysqli_select_db($connect,"miamore");

if(isset($_GET['delete'])){ // e merr vleren e delete
	
	$delete_id = $_GET['delete'];
	
	$delete_query = "DELETE FROM produkti WHERE produkt_id='$delete_id' ";
	
	if(mysqli_query($connect, $delete_query)){
	
	echo "<script>alert('Produkti eshte Fshire');</script>";
        
    echo "<script>window.open('view_produkt.php','_self');</script>";

	}
}
?>
