<!DOCTYPE html>
<html>
<head>
    
<style>
    .bot{
      font-size: 10px;
      margin-top: 20px;


      text-align: center;
    width: 920px;
 
  padding: 5px;
  margin: auto;
  background-color: rgb(19, 232, 119);
 
   
    border: 1px solid black;
    
    
   
    }


    body{
        background-color: aquamarine;
    }
.hed{
    margin-top: 30px;
    text-align: center;
    width: 860px;
 
  padding: 30px;
  margin: auto;
  background-color: rgb(19, 232, 119);
 
   
    border: 1px solid black;
    
    font-size: 30px;
    margin-bottom: 20px;
}
table, th, td {

    margin-left: auto;
  margin-right: auto;
  padding:15px 45px ;
  text-align: center;
    
  border-collapse: collapse;
    border: 1px solid black;
    font-size: 22px;
    background-color: #eeeeee;
    margin-bottom: 20px;
    
}
</style>
</head>
<body>
    <h1 class="hed">List of all products</h1>

<?php
$conn = mysqli_connect("localhost", "root", "", "shop_db");
		
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

$sql = "SELECT  *FROM products ORDER BY date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Product Name</th><th>Discripsion</th><th>Date</th><th>Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["dis"]. "</td><td>" . $row["date"]. "</td><td>" . $row["price"]. "</td></tr>";
       
       
    }
  
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<div  class="bot">  
    <h1 > <a href="addNewProduct.php">Add new product?</a></h1>
    
   </div>

</body>
</html>