<?php
  session_start();
   if(!isset($_SESSION['username'])){
     header("location: login.php");	
    }
    else{
    
    ?>
<html>
    <head>
    <link rel="stylesheet" href="order111.css" />
    </head>
    
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

    <h1 class="order">Orders</h1>

 <div class="divs-of-divs">
    <div class="div01">
        <h3 class="h3">ORDER QUANTITY</h3>
        <h1 class="order-numbers">120</h1>
    </div>   

    <div class="div2">
        <h3 class="h3">ORDER AMOUNT</h3>
        <h1 class="order-numbers">1200$</h1>
    </div> 
    
    <div class="div3">
        <h3 class="order-status">ORDER STATUS</h3>
       <div class="div-order-status">
       <div class="inside-div1"><p class="pp">Shipped - 91.1%</p></div> 
        <div class="inside-div2"><p class="pp">Cancelled - 2.5%</p></div>
        <div class="inside-div3"><p class="pp">Resolved - 2.1%</p></div> 
        <div class="inside-div4"><p class="pp">Others- 4.3%</p></div> 
       </div>
    </div>  
  </div> 

  <table id="myTable">
  <tr>
    <th>Order Number</th>
    <th>Costumer</th>
    <th>Order Date</th>
    <th>Shipped Date</th>
    <th>Status</th>
  </tr>   
  <tr>
    <td>10101</td>
    <td>Asian Treasures, Inc.</td>
    <td>January 16, 2020</td>
    <td> January 17, 2020</td>
    <td>Shipped</td>
  </tr>
  <tr>
    <td>10102</td>
    <td>Blauer See Auto, Co.</td>
    <td>January 23, 2020</td>
    <td> January 24, 2020</td>
    <td>Shipped</td>
  </tr>
  <tr>
    <td>10103</td>
    <td>Vitachrome Inc.</td>
    <td>January 10, 2020</td>
    <td>February 2, 2021</td>
    <td> On Hold</td>
  </tr>
  <tr>
    <td>10104</td>
    <td>Baane Mini Imports</td>
    <td>January 29, 2021</td>
    <td>January 13, 2020</td>
    <td>Resolved</td>
  </tr>
  <tr>
    <td>10105</td>
    <td>Euro + Shooping</td>
    <td>January 31, 2021</td>
    <td>February 1, 2021</td>
    <td>Shipped</td>
  </tr>
  <tr>
    <td>10106</td>
    <td>Danish Wholesale</td>
    <td>February 11, 2021</td>
    <td>January 12, 2021</td>
    <td>Shipped</td>
  </tr>
</table>

 
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