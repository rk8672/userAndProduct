

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
 body{
	background-color: aquamarine;
 }
.hed{
    text-align: center;
    width: 660px;
 
  padding: 10px;
  margin: auto;
  background-color: rgb(19, 232, 119);
  border-radius: 50px;
   
    border: 4px solid black;
	color: black;
    
    font-size: 15px;

	margin-bottom: 3rem;
	margin-top: 6rem;
}

	</style>
	<title>Add New Product</title>
   <style>

input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
input[type=text] {
	width: 660px;
	margin: auto;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}


fieldset {
	margin: auto;
	width: 660px;
  background-color: #eeeeee;
 
}

legend {
	background-color: rgb(19, 232, 119);
  color:black;
  padding: 10px 30px;
  font-size: 20px;
  border: 3px solid black;
  border-radius: 30px;
}


   </style>
</head>
<body>
	   <div  class="hed">  
	   <h1 > <a href="viweAllProduct.php">List of all products</a></h1>
	   
      </div>
	  
	
	


		<div class="form-container">
		
		<form action="insert.php" method="post">
		<fieldset>
			<legend>Fill this form to add new product:</legend>
			
<p>
			<label for="productname" >Product Name:</label>
			<input type="text" name="productname" id="productname" class="box">
			</p>

			
<p>
			<label for="productdis">Product discription:</label>
			<input type="text" name="productdis" id="productdis" class="box">
			</p>

			
<p>
			<label for="date">Date:</label>
			<input type="text" name="date" id="date" class="box">
			</p>

			
<p>
			<label for="price">Price:</label>
			<input type="text" name="price" id="price" class="box">
			</p>

			
<p>




			<input type="submit" value="Submit"  class="btn">

</fieldset>
		</form>

		</div>
	
</body>
</html>
