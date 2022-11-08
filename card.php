<?php session_start (); ?>
<html>
    <head>
    <link rel="stylesheet" href="card11.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="//code.tidio.co/tbeicbcei8bldfygmhdcewwzidj6ahgl.js" async></script>
    <script src="//code.tidio.co/tbeicbcei8bldfygmhdcewwzidj6ahgl.js" async></script>
  </head>
    <body>
 
<header class="header">

<section class="flex">

   <a href="#home" class="logo"><img src="images/logo2.png" alt=""></a>

   <nav class="navbar">
      <a href="index.php">home</a>
      <a href="shop.php">shop</a>
      <a href="acc.php"><i class="fas fa-user"></i></a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

</header>


<h1 class="h1-shop"> Shopping card </h1>
<table id="myTable">
  <tr>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
  </tr>   
  <tr>
     <td><img src="images/p-1.jpg" class="burger"/></td>
    <td>2$</td>
    <td> <input type="number" class="inpu1" placeholder="2"></td>
    <td>4$</td>
  </tr>

    <tr>

    <td><img src="images/p-2.jpg" class="burger"/></td>
    <td>25$</td>
    <td> <input type="number" class="inpu1" placeholder="1"></td>
    <td> 25$</td>
   </tr>
</table>

<div class="subtotal-div">
<h1 class="subtotal"><b>Subtotal</b></h1>
<h1 class="subtotal-p">29$</h1>

</div>
<button class="button-place-order"><a href="placeOrder.php">Place Order</a></button>

<br><br><br>
<br><br><br>
<section class="footer">
   <div class="credit"> &copy; copyright @ 2022 by <span>mrs. Vesa Susuri</span> | all rights reserved! </div>
</section>
    </body>
</html>

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

<script src="script.js"></script>