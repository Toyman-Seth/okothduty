<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cart Page</title>
  <link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body> 
    <nav>
    <img class="img1" src="images/cart5.png" alt="">
    <a href="home.php"><img class="img2" src="images/home2.png"></a>
</nav>
<h1><img src="images/line.png" alt=""></h1>  
  
<?php
session_start();

// Check if the cart array is already set in the session
if (!isset($_SESSION['cart'])) {
    // If not set, initialize the cart as an empty array
    $_SESSION['cart'] = array();
}

// Process the form submission
if (isset($_POST['submit'])) {
    // Retrieve the custom product input value
    $customProduct = $_POST['customProd'];

    // Add the custom product to the cart
    if (!empty($customProduct)) {
        $_SESSION['cart'][] = $customProduct;
    }
}

// Remove an item from the cart
if (isset($_GET['remove'])) {
    $itemToRemove = $_GET['remove'];
    $index = array_search($itemToRemove, $_SESSION['cart']);
    if ($index !== false) {
        unset($_SESSION['cart'][$index]);
    }
}

// Clear the cart
if (isset($_POST['clear'])) {
    $_SESSION['cart'] = array();
}
?>

<!-- HTML code for the <ul> list -->
<ul>
    <?php foreach ($_SESSION['cart'] as $item): ?>
        <li><?php echo htmlspecialchars($item); ?></li>
    <?php endforeach; ?>
</ul>

<!-- HTML code for the "Clear Cart" button -->
<form action="cart.php" method="post">
    <input class="sub" type="submit" name="clear" value="Clear Cart">
</form>


  <script src="cart.js"></script>
  </body>
  </html>

  <?php

$db_name="shopping_list";
$db_user="root";
$db_pass="";
$db_server="localhost";

//establishing database connection
try{
    $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
}catch(mysqli_sql_exception $e){
    echo "Error: " . $e->getMessage();
}


//fetching data and sending to the database
if(isset($_POST["submit"])){
    if(
        !empty($_POST["product"])
       
    ){
        echo"nah";
    }
        
        $customp = $_POST["customProd"];

        

        $sql= "INSERT INTO table1(customProd) 
        VALUES('$customp')";

try{
    mysqli_query($conn,$sql);
 }catch(my_sql_exception){
    echo "could not connect";
 }
}
?>