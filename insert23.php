<?php

// Include config file
require_once "connection.php";

echo "entered";
$_cardname=$_POST['cardname'];
$_cardnumber=$_POST['cardnumber'];
$_exp=$_POST['date'];
$_cvv=$_POST['cvv'];


    $sql = "INSERT INTO `payment` ()
    VALUES ('$_cardname','$_cardnumber','$_exp','$_cvv')";

    if ($conn->query($sql) === TRUE) 
    {
        echo "payment done successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


?>

<html>
<head>
    <meta charset="UTF-8">
    <title align="center">Login</title>
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
	    background-image: url("/wel.jpg");
        }
    </style>

 

</head>
<body align="center">
<form action = "/category.php" method="post">

            <div>
            <h1>PAYMENT DONE SUCCESSFULLY</h1>
            <div>
            <div>
            <h1>THANKS FOR SHOPPING</h1>
            <div>
                <input type = "submit" value="SHOP AGAIN?">
            </div>
</form> 
<form action = "/register1.php" method="post">

            <div>
                <input type = "submit" value="log out">
            </div>
</form> 

</body>
</html>