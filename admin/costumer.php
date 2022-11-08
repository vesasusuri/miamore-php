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
		
	<link rel="stylesheet" href="costumer111.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

  <div class="icons-div">
  <div class="div11">
    <i class="material-icons" style="color:white;font-size:40px;">group</i>  
   </div>
  <div class="icon-div1"> 
   <h1 class="numbers">121</h1>
    <p class="p-divs">COSTUMERS</p>
  </div>
  
  <div class="div11">
    <i class="material-icons" style="color:white;font-size:40px;">description</i>  
   </div> 
  <div class="icon-div1">
    <h1 class="numbers">297</h1>
    <p class="p-divs">SHIPPED ORDERS</p>
  </div>

  <div class="div11">
    <i class="material-icons" style="color:white;font-size:40px;">monetization_on</i>  
   </div> 
  <div class="icon-div1">
    <h1 class="numbers">$8,853</h1>
    <p class="p-divs">RECEIVED PAYMENTS</p>
  </div>
  </div>
  <table id="myTable">
  <tr>
    <th>Customer Number</th>
    <th>Costumer Name</th>
    <th>Country</th>
    <th>Credit Limit</th>
  </tr>   
  <tr>
    <td>101</td>
    <td>MamadDadashan</td>
    <td>Canada</td>
    <td>$5.009.00</td>
  </tr>
  <tr>
    <td>102</td>
    <td>Blauer See Auto, Co.</td>
    <td>January 23, 2020</td>
    <td>71.800.00</td>
  </tr>
  <tr>
    <td>103</td>
    <td>Vitachrome Inc.</td>
    <td>January 10, 2020</td>
    <td>11,730,000.00</td>
  </tr>
  <tr>
    <td>104</td>
    <td>Baane Mini Imports</td>
    <td>January 29, 2021</td>
    <td>$118.200.00</td>
  </tr>
  <tr>
    <td>105</td>
    <td>Euro + Shooping</td>
    <td>January 31, 2021</td>
    <td>$81,700.00</td>
  </tr>
  <tr>
    <td>106</td>
    <td>Danish Wholesale</td>
    <td>February 11, 2021</td>
    <td>$21,500.00</td>
  </tr>
</table>
</body>
</html>
<?php } ?>

<script>
function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.rows;
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>