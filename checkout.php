<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "CALL checkout()";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
//$row = mysqli_fetch_assoc($result); 

$sum = $row['SUM(quantity*price)'];
//echo "total price:".$sum;




    


$conn->close();
?>
<html>
<head>

    <meta charset="UTF-8">
    <title align="center">checkout</title>
    <style>
    div {
        background-color: #fff;
        background-color: rgba(255,255,255,0.5);
        margin-top: 50px;
        margin-bottom: 50px;
        margin-right: 50px;
        margin-left: 50px;
   
        }

        body{
	    background-image: url("/back.jpg");
        }
    </style>

 


 

</head>
<body align="center">
<form action = "/cart.php" method="post">
            <div>
            <h1> CHECKOUT </h1>
            </div>
            <div>
            <h2><?php echo "total price:".$sum ?></h2>
            
            </div>

            <div>
                <input type = "submit" value="VIEWCART">
            </div>
</form> 
<form action = "/category.php" method="post">
            <div>
                <input type = "submit" value="WANNA SHOP MORE?">
            </div>
</form>
<form action = "/payment.php" method="post">
            <div>
                <input type = "submit" value="PROCEED TO PAYMENT">
            </div>
</form>  
</body>
</html>


