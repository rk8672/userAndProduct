<!DOCTYPE html>
<html>

<head>
	<title>Insert into DataBase</title>
	<style>
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

	</style>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "shop_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$productname = $_REQUEST['productname'];
		$productdis = $_REQUEST['productdis'];
		$date = $_REQUEST['date'];
		$price = $_REQUEST['price'];
		
		
		
		// Performing insert query execution
		// here our table name is products
		$sql = "INSERT INTO products VALUES ('$productname',
			'$productdis','$date','$price')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1 >Data stored in a database successfully</h1>";

			echo nl2br("\n$productname\n $productdis\n "
				. "$date\n $price ");
			

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>

	<p class="hed">Want to add another product? <a href="addNewProduct.php">Add More</a></p>
</body>

</html>
