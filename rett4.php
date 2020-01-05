
<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'project');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$sql = "SELECT * FROM products WHERE category_id=5";
$res = mysqli_query($connection, $sql);
?>


<?php while($r = mysqli_fetch_assoc($res)){ ?>
    <div class="col-sm-6 col-md-3" align = "center">
      
          <h3><?php echo $r['prod_name'] ?></h3>
          <p><?php echo "price:".$r['price'] ?></p>
          <p><a href="addtocart.php?id=<?php echo $r['prod_id'];?>&name=<?php echo $r['prod_name'];?>&price=<? echo $r['price']; ?>" class="btn btn-primary" role="button">Add to Cart</a></p>
    </div> 
<?php } ?>
<html>
<head>
    <meta charset="UTF-8">
    <title align="center">TABLETS</title>
    <style>
    div {
        background-color: #fff;
        background-color: rgba(255,255,255,0.5);
        margin-top: 30px;
        margin-bottom: 30px;
        margin-right: 30px;
        margin-left: 30px;
   
        }

        body{
	    background-image: url("/pen.jpg");
        }
    </style>

 

</head>
<body align="center">
<form action = "/cart.php" method="post">
            <div>
                <input type = "submit" value="VIEW CART">
            </div>
</form> 
<form action = "/category.php" method="post">
            <div>
                <input type = "submit" value="CONTINUE SHOPPING">
            </div>
</form> 
<form action = "/checkout.php" method="post">
            <div>
                <input type = "submit" value="CHECKOUT">
            </div>
</form> 
</body>
</html>