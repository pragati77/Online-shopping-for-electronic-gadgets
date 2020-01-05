<?php

// Include config file
require_once "connection.php";

echo "entered";
$_username=$_POST['username'];
$_password=$_POST['password'];
$address=$_POST['address'];
$email=$_POST['email'];


    $sql = "INSERT INTO `login` ()
    VALUES ('$_username','$_password','$address','$email')";

    if ($conn->query($sql) === TRUE) 
    {
        echo "New record created successfully";
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
	    background-image: url("/back.jpg");
        }
    </style>

 

</head>
<body>
<form action = "/login1.php" method="post">
            <div>
                <input type = "submit" value="LOGIN">
            </div>
</form> 
</body>
</html>