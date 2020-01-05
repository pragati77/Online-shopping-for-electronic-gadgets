<?php
// Include config file
require_once "connection.php";
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Category</title>
    <link rel="stylesheet" href="theme.css">
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
            h4{
             display: inline;
              }
    </style>
    
</head>
<body >
    <div class="wrapper" align="center">
        <h2>The electronics store</h2>
        <p>Shop by category </p>
        <form action = "/rett0.php" method="post">
            <div>
                <input type = "submit" value="LAPTOPS">
                <div>
                <a href="/re1.php"><h4>hp|</h4></a> <a href="/re2"><h4>apple|</h4></a> <a href="/re3"><h4>dell|</h4></a> <a href="/re4"><h4>Asus|</h4></a><a href="/re5"><h4>acer</h4></a>   
                </div>

            </div>
        </form>    
        <form action = "/rett.php" method="post">
            <div>
                <input type = "submit" value="CAMERAS">
                <div>
                <a href="/re6.php"><h4>nikon|</h4></a> <a href="/re7"><h4>sony|</h4></a> <a href="/re8"><h4>canon|</h4></a> <a href="/re9"><h4>gopro|</h4></a><a href="/re10"><h4>panasonic</h4></a>   
                </div>
            </div>
        </form> 
        <form action = "/rett2.php" method="post">
            <div>
                <input type = "submit" value="MOBILES">
                <div>
                <a href="/re11.php"><h4>apple|</h4></a> <a href="/re12"><h4>lenovo|</h4></a> <a href="/re13"><h4>samsung|</h4></a> <a href="/re14"><h4>nokia|</h4></a><a href="/re15"><h4>redmi</h4></a>   
                </div>
            </div>
        </form> 
        <form action = "/rett3.php" method="post">
            <div>
                <input type = "submit" value="TABLETS">
                <div>
                <a href="/re16.php"><h4>samsung|</h4></a> <a href="/re17"><h4>apple|</h4></a> <a href="/re18"><h4>lenovo|</h4></a> <a href="/re19"><h4>Acer|</h4></a><a href="/re20"><h4>micromax</h4></a>   
                </div>
            </div>
        </form>
        <form action = "/rett4.php" method="post">
            <div>
                <input type = "submit" value="PENDRIVES">
                <div>
                <a href="/re21.php"><h4>sandisk|</h4></a> <a href="/re22"><h4>HP|</h4></a> <a href="/re23"><h4>sony|</h4></a> <a href="/re24"><h4>Toshiba|</h4></a><a href="/re25"><h4>Kingston</h4></a>   
                </div>
            </div>
        </form>   
			
			
			
            
        </form>
        
    </div>    
    <form action = "/cart.php" method="post">

            <div align="center">
                <input type = "submit" value="view cart">
            </div>
</form> 
</body>
</html>