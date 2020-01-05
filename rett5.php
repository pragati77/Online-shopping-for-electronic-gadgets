
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
    <div class="col-sm-6 col-md-3">
      
          <h3><?php echo $r['prod_name'] ?></h3>
          <p><?php echo $r['price'] ?></p>
          <p><a href="addtocart.php?id=<?php echo $r['prod_id'];?>&name=<?php echo $r['prod_name'];?>&price=<? echo $r['price']; ?>" class="btn btn-primary" role="button">Add to Cart</a></p>
    </div> 
<?php } ?>
<html>
<body>
<form action = "/cart.php" method="post">
            <div>
                <input type = "submit" value="VIEW CART">
            </div>
</form> 
</body>
</html>