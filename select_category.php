<!DOCTYPE html>
<html>
<head>
	<title>Choose a Category</title>
	<link rel="stylesheet" type="text/css" href="./css/style7.css">
</head>

<body>
	<h1 class="page_title"> The Retail Store...</h1>
	<hr>
	<br><br>


	<fieldset style="margin-left: 5%; margin-right: 5%">
  
  <h2> Select a Category </h2>

		<form action="check_category.php">
<p style="text-decoration: underline;">
  <input type="radio" id="kitchen_grocery" name="category" value="kitchen_grocery">
  <label for="kitchen_grocery">Kitchen Grocery</label><br><br>

  <input type="radio" id="vegetable" name="categroy" value="vegetable">
  <label for="vegetable">Vegetable</label><br><br>

  <input type="radio" id="fruit" name="category" value="fruit">
  <label for="fruit">Fruit</label><br><br>

  <input type="radio" id="personal_essentials" name="category" value="personal_essentials">
  <label for="personal_essentials">Personal essentials</label><br><br>

<h2> Select the subcategory fo your product </h2>
  <label for="cars">Choose a car:</label>

  <select id="cars" name="cars">
    <option value="vegetables">Volvo</option>
    <option value="fruits">Saab</option>
    <option value="spices">Fiat</option>
    <option value="">Audi</option>
</select>


<br><br>
  <input type="submit" value="submit">
  <br>
</p>
</form>
	</fieldset>



</body>