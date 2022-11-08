<?php
session_start();

if(!isset($_SESSION['username'])){

header("location: login.php");	
}
else{

?>
<html>
    <head>
    <link rel="stylesheet" href="acc.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    <header class="header">

   <section class="flex">
      <a href="#home" class="logo"><img src="images/logo2.png" alt=""></a>
      <nav class="navbar">
         <a href="index.php">home</a>
         <a href="shop.php">shop</a>
         <a href="login.php"><i class="fas fa-user"></i></a>
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
</header>

<div class="your-orders">
    <h1 class="ur-order-h1">Your Orders</h1>
</div>

<table id="myTable">
  <tr>
    <th>Customer Number</th>
    <th>Costumer Name</th>
    <th>Country</th>
    <th>Credit Limit</th>
  </tr>   
  <tr>
    <td>1</td>
    <td>Vesa Susuri</td>
    <td>Prizren, Kosovo</td>
    <td>$10</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Vesa Susuri</td>
    <td>Prizren, Kosovo</td>
    <td>$6</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Vesa Susuri</td>
    <td>Prizren, Kosovo</td>
    <td>$20</td>
  </tr>
  <tr>
    <td>4</td>
    <td>Vesa Susuri</td>
    <td>Prizren, Kosovo</td>
    <td>$13</td>
  </tr>
  <tr>
    <td>5</td>
    <td>Vesa Susuri</td>
    <td>Prizren, Kosovo</td>
    <td>$9</td>
  </tr>
  <tr>
    <td>6</td>
    <td>Vesa Susuri</td>
    <td>Prizren, Kosovo</td>
    <td>$17</td>
  </tr>
</table>

<section class="footer">
   <div class="credit"> &copy; copyright @ 2022 by <span>mrs. Vesa Susuri</span> | all rights reserved! </div>
</section>
</body>
</html>

<script src="script.js"></script>
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