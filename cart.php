
<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'project');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
$sql = "SELECT * FROM cart";
$res = mysqli_query($connection, $sql);
?>

<div class="wrapper" align="center">
		
        <h2>CART</h2>
        
        
        
</div>


<?php while($arr = mysqli_fetch_assoc($res)){ ?>
    
    <div class="col-sm-6 col-md-3" align="center">
      
          <h3><?php echo $arr['prod_name'] ?></h3>
          <p><?php echo "price:". $arr['price'] ?></p>
          <p><?php echo "quantity:". $arr['quantity'] ?></p>
          <form action="/insertquant.php?id2=<?php echo $arr['prod_id'];?>" method="post">
          <p> CHANGE QUANTITY: <input type=text name="quantity" value="" required ></p>
          <div>
                <input type=submit value="save changes" >
               
          </div>
			

          </form>
          
          <p><a href="delcart.php?id1=<?php echo $arr['prod_id'];?>" class="btn btn-primary" role="button">remove</a></p>
          

                 
                 
           
    </div> 
<?php } ?>


<html>
<head>
    <meta charset="UTF-8">
    <title align="center">CARTO</title>
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
	    background-image: url("/c.jpg");
        }
    </style>

 

</head>
<body align="center">
 

<form action = "/category.php" method="post">
            <div>
                <input type = "submit" value="CONTINUE SHOPPING">
            </div>
</form> 
<form action = "/checkout.php" method="post">
            <div>
                <input type = "submit" value="GO TO CHECKOUT">
            </div>
</form> 
</body>
</html>
