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
	<title> Feedback </title>
</head>

<body>
	
	<h1 class="page_title">The Retail Store...</h1>
	<hr>
	<p style="font-size:25px; font-family:serif; text-align:center;"> Please give us your valuable feedback.  </p>

	<fieldset style="margin-left: 3%; margin-right: 3%; background-color: #BAD7EC;">
		
		<form action="feedback.php" method="POST">

		<p> Name : 
		<input type="text" name="customer_name" placeholder="Write your name..." style="width: 30%;"></p>
        
        <p> Email :
		<input type="text" name="email" placeholder="Write your email..." style="width: 30%;"></p>

        <p> Age :
		<input type="number" name="age" style="width: 30%; margin-left:18px;"></p>
        <hr>

		
		<div style="display: flex;">

			<div style="margin-left: 5%;">
				<p> Q. How helpful was the sofware in your shopping ? </p>

				<input type="radio" name= "helpful_rating" value= "very helpful">
				<lable for="helpful_rating" style="font-size: 20px;
				line-height: 1.6em;"> Very helpful  &#x1F607 </lable><br>

				<input type="radio" name= "helpful_rating" value="helpful">
				<lable for="helpful_rating" style="font-size: 20px;
				line-height: 1.6em;"> Somewhat helpful  &#x1F642 </lable><br>

				<input type="radio" name="helpful_rating" value="okayish">
				<lable for="helpful_rating" style="font-size: 20px;
				line-height: 1.6em;"> Not so helpful &#x1F641 </lable><br>

				<input type="radio" name="helpful_rating" value= "poor">
				<lable for="helpful_rating" style="font-size: 20px;
				line-height: 1.6em;"> Waste of time &#x1F47F </lable>

			</div>


			<div style="margin-left: 25%;">

				<p> Q. How would you rate your User Experience ? </p>

				<input type="radio" name= "UX_rating" value="excellent">
				<lable for="UX_rating" style="font-size: 20px;
				line-height: 1.6em;"> Awesome  &#x1F60E </lable><br>

				<input type="radio" name="UX_rating" value="good" >
				<lable for="UX_rating" style="font-size: 20px;
				line-height: 1.6em;"> Good  &#x1F603 </lable><br>

				<input type="radio" name="UX_rating" value= "okayish" >
				<lable for="UX_rating" style="font-size: 20px;
				line-height: 1.6em;"> Okayish &#x1F610 </lable><br>

				<input type="radio" name="UX_rating" value="poor" >
				<lable for="UX_rating" style="font-size: 20px;
				line-height: 1.6em;"> Bad &#x1F641 </lable>

			</div>
		</div>

<br><br>

		<div style="display: flex;">

			<div style="margin-left: 5%;">

				<p> Q. How would you rate the User Interface ? </p>

				<input type="radio" name="UI_rating" value="excellent" >
				<lable for="UI_rating" style="font-size: 20px;
				line-height: 1.6em;"> Awesome  &#x1F60E </lable><br>

				<input type="radio" name="UI_rating" value="good" >
				<lable for="UI_rating" style="font-size: 20px;
				line-height: 1.6em;"> Good  &#x1F603 </lable><br>

				<input type="radio"  name="UI_rating" value="okayish" >
				<lable for="UI_rating" style="font-size: 20px;
				line-height: 1.6em;"> Okayish &#x1F610 </lable><br>

				<input type="radio" name="UI_rating" value= "poor" >
				<lable for="UI_rating" style="font-size: 20px;
				line-height: 1.6em;"> Bad &#x1F641 </lable>

			</div>

			<div style="margin-left: 30%;">
				<p> Q. Would you recommend the sofware to others ? </p>

				<input type="radio" name="recommend_rating" value= "absolutely">
				<lable for="excellent" style="font-size: 20px;
				line-height: 1.6em;"> Absolutely  &#x1F607 </lable><br>

				<input type="radio" name="recommend_rating" value="yes">
				<lable for="4" style="font-size: 20px;
				line-height: 1.6em;"> Yes  &#x1F642 </lable><br>

				<input type="radio" name="recommend_rating" value="maybe">
				<lable for="okayish" style="font-size: 20px;
				line-height: 1.6em;"> Maybe &#x1F641 </lable><br>

				<input type="radio" name="recommend_rating" value="no">
				<lable for="poor" style="font-size: 20px;
				line-height: 1.6em;"> Never &#x1F47F </lable>

			</div>
		
		</div>

<br><hr><br>

		<input type="submit" name="submit" value="submit" style="padding: 5px; background-color: #48D1CC; font-weight: bold; font-size: 17px; margin-left:5%; ">

	</form>



</fieldset>
<br><br>
<button class="homepage_button1" style="margin-left:1200px;"><a href="http://localhost/folder/html/home.html"><img src="./images/back_button.png" width="100" class="homepage_button2" class="button_img"></a></button>
<br><br>

</body>
</html>

<?php
	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn,'retail_store');

	$customer_name="";
	$email="";
	$age=0;
	$helpful_rating="";
	$UX_rating="";
	$UI_rating="";
	$recommend_rating="";
	



		$query = "INSERT INTO feedback (customer_name, email, age, helpful_rating, UX_rating, UI_rating, recommend_rating) VALUES ('$customer_name', '$email', '$age', '$helpful_rating', '$UX_rating','UI_rating', '$recommend_rating')"; 

		
		$results = mysqli_query($conn,$query); 


if($results == TRUE && isset($_POST['submit']) == TRUE)
	{	
		$customer_name = $_POST['customer_name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$helpful_rating = $_POST['helpful_rating'];
		$UX_rating = $_POST['UX_rating'];
		$UI_rating = $_POST['UI_rating'];
		$recommend_rating = $_POST['recommend_rating'];

		if(mysqli_query($conn, $query))
		{
			echo "Error : Data not inserted ".mysqli_error($conn);

		}
		else
		{
			echo "<h3> Data Inserted </h3>";
		}
		mysqli_close($conn);
	}

