<?php								 
    
    echo "entered";
    $dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
    mysqli_select_db($dbh,'project') or die(mysqli_error());
    $sql = "SELECT * FROM products WHERE category_id=4 ";
    $records = mysqli_query($dbh,$sql);

?>
<html>
<body>
<h1>TABLETS PRODUCTS </h1>

<?php								 
 
  echo"<table border size=1>";
  echo"<tr><th>prod_id</th> <th>product_name</th> <th>Price</th> <th> add to cart</th> </tr>";
  while ($arr=mysqli_fetch_assoc($records))
   {
   echo "<tr>";
   echo "<td>".$arr['prod_id']."</td>";
   echo "<td>".$arr['prod_name']."</td>";
   echo "<td>".$arr['price']."</td>";

   echo "</tr>";
   }
   echo"</table>";    
?>


</body>
</html> 