<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <nav>
<div class="hm">
    <img src="images/home2.png" alt=""><h2>Home.</h2>
</div>

    <a href="reminder.php"><img src="images/noti.png" alt=""></a>

    </nav>
<div class="mua">
    <img src="images/cart4.jpg" alt="">
</div>
<form action="cart.php" method="post">
    <input type="submit" name="submit" class="r1" value="Add To Cart">
    <!-- This button sends items typed in the input field to the cart page -->
    <input type="text" name="customProd" id="customProduct" placeholder="Type custom items here one at a time and add to cart.">

    <!-- Hidden input field to store the selected products -->
    <!-- <input type="hidden" name="product" id="selectedProducts"> -->

    <div class="container">
        <!-- This container contains clickable buttons that can directly send their content to the cart page -->
        <input type="button" class="i" value="Hot dogs" >
        <input type="button" class="h" value="Oranges" >
        <input type="button" class="j" value="Milk" >
        <input type="button" class="k" value="Butter" >
        <input type="button" class="l" value="Eggs" >
        <input type="button" class="m" value="Tissue" >
        <input type="button" class="n" value="Cake" >
        <input type="button" class="o" value="Soap" >
        <input type="button" class="p" value="Bread" >
        <input type="button" class="q" value="Sugar" >
        <input type="button" class="r" value="Oil" >
        <input type="button" class="s" value="Notebook" >
        <input type="button" class="t" value="Spaghetti" >
    </div>

</form>


     </div>   
     <div class="ft">
     <a href="cart.php"><button class="cr">Cart</button></a>
     </div>

     <script src="home.js"></script>
    </body>
    <footer>

    </footer>
</html>