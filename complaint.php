<!DOCTYPE html>
<html>
<head>
	<style>
		p{
			font-size: 20px;
			font-family: serif;
			font-weight: bold;
		}
	</style>
	
	<link rel="stylesheet" type="text/css" href="./css/style3.css">
	<title> Complaint </title>
</head>

<body>
	
	<h1 class="page_title">The Retail Store...</h1>
	<hr>
	<p style="font-size:25px; font-family:serif; text-align:center;">|| Register your complaint ||  </p>



	<fieldset style="margin-left: 7%; margin-right: 7%; background-color: #BAD7EC;">
	
		<form action="complaint.php" method="POST">
		 
		<p style="margin-left: 20%"> Name :&emsp; 
		<input type="text" name="customer_name" placeholder="Write your name..." style="width: 60%;"></p>
        
        <p style="margin-left: 20%"> Email :&emsp;
		<input type="text" name="email" placeholder="Write your email..." style="width: 60%;"></p>
        
        <br><hr>
       <p style="margin-left: 20%">  Write your complaint </p>
        <textarea  name="complaint" rows="10" cols="95" placeholder="Write your complaint here." style="margin-left: 20%"></textarea>
		<div>
	

		<br>    	
    	<input type="submit" name="submit" value="submit"  class="submit_button" style=" margin-left:45%;padding: 7px; 
	background-color: #48D1CC; font-weight: bold; font-size: 19px;border-radius: 15px;">
    
		
		</form>
</fieldset>

<br><br>
<button class="homepage_button1"  ><a href="http://localhost/folder/html/home.html"><img src="./images/back_button.png" width="100" class="homepage_button2" class="button_img" ></a></button>
<br><br>

</body>
</html>

<?php
	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn,'retail_store');

	if(isset($_POST['submit']))
	{	
		if(! get_magic_quotes_gpc() ) 
		{
         $customer_name = addslashes ($_POST['customer_name']);
         $email = addslashes ($_POST['email']);
         $complaint = addslashes ($_POST['complaint']);
      	}
      	else 
      	{
		  $customer_name = $_POST['customer_name'];
		  $email = $_POST['email'];
		  $complaint = $_POST['complaint'];
		}


		$query = "INSERT INTO complaint"." VALUES"." (customer_name, email, complaint) VALUES ('$customer_name','$email','$complaint')"; 



		if(mysqli_query($conn, $query) )
		{
			echo "<h3> Data Inserted </h3><br>";
			$sql = "SELECT MAX(serial_num) from complaint";
			$data = mysqli_query($conn, $query);
			echo "Your complain number is". $data;
		}
		else
		{
			echo "Erro: Data not inserted ".mysqli_error($conn);
		}
		mysqli_close($conn);
	}

