<!DOCTYPE html>
<html>
<head>
  <title> Grocery </title>
  <link rel="stylesheet" type="text/css" href="./css/style3.css">
</head>

<body>
  <h1 class="page_title"> The Retail Store...</h1>



  <fieldset style="margin-left: 5%; margin-right: 5%; background-color: #BAD7EC;">
    <h2> Write the product name you want to search</h2>
  
    <form action="grocery.php" method="POST">
        <input type="text" name="name" placeholder="Type in the name of product you want to find..." style="width: 30%;">
        <br><hr>
      
      <h2> Select the sub-categeory </h2> 

      
        <input type="radio" name="category" value="spices">
         <label for="category" style="font-size: 22px;">Spices &emsp; &emsp;</label>

        <input type="radio" name="category" value="flours">
        <label for="category" style="font-size: 22px;">Flours &emsp; &emsp;</label>

        <input type="radio" name="category" value="snacks">
         <label for="category" style="font-size: 22px;">Snacks &emsp; &emsp;</label>

         <input type="radio" name="category" value="rice_pulses">
         <label for="category" style="font-size: 22px;">Rice-Pulses &emsp; &emsp;</label>


         <input type="radio" name="category" value="dryfruits">
         <label for="category" style="font-size: 22px;">Dryfruits &emsp; &emsp;</label>

         <input type="radio" name="category" value="cooking_oil">
         <label for="category" style="font-size: 22px;">Cooking oil &emsp; &emsp;</label>

         <input type="radio" name="category" value="kitchen_utensils">
         <label for="category" style="font-size: 22px;">Kitchen utensil &emsp; &emsp;</label><br><br><br>&emsp; 

        <input type="submit" name ="submit" value="submit" style="padding: 5px; background-color: #48D1CC; font-weight: bold; font-size: 17px;">
</form>

<button class="homepage_button1" style="margin-left:1200px;"><a href="http://localhost/folder/html/home.html"><img src="./images/back_button.png" width="100" class="homepage_button2" class="button_img"></a></button>

</fieldset>
<br><hr>
    </body>
</html>


<?php

$servername = "localhost";
  $username = "root";
  $password = "";
  $database_name = "retail_store";

  //Establishing Connection
  $conn = mysqli_connect($servername, $username, $password, $database_name);

  // Checking connection
  if(mysqli_connect_error()) 
  {
    echo "<h1>Failed to connect</h1>";
    echo "<br>";
    echo "<h1> Sorry for the inconvenience caused</h1>";
    exit();
  }


if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $category = $_POST['category'];
  
    
    $data = "";

    if($category == 'spices')
    { 
      
      $query = "SELECT * FROM spices WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');

      if(mysqli_num_rows($data) > 0)
        { 
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product name</p></th>
              <th><p style="text-align:center;">Price per item </p></th>
              <th><p style="text-align:center;">Company name</p> </th>
              <th><p style="text-align:center;">Quantity in stock</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['name'];;
              $price = $row['price'];
              $comapny_name = $row['company_name'];
              $quantity = $row['quantity'];

             echo '<tr>
              <td> '.$name.'</td>
              <td>'. $price.' </td>
              <td>'. $comapny_name.' </td>
              <td>'. $quantity.' </td>
              </tr>';
            }
        }

      else
        { ?>
          
            <tr>
              <td> <h1 style="text-align: center;"> Item not available.</h1> </td>
            </tr>
            <?php
        }
    
    }


    if($category == 'flours')
    {
      
      $query = "SELECT * FROM flours WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Price per kg</p> </th>
              <th><p style="text-align:center;">Quantity in kg</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['name'];;
              $price = $row['price'];
              $quantity = $row['quantity'];
          
            echo '<tr>
              <td>'.$name.'</td>
              <td>'.$price.' </td>
              <td>'. $quantity.'</td>
            </tr>';
            }
        }

      else
        { ?>
          
            <tr>
              <td> <h1 style="text-align: center;"> Item not available.</h1> </td>
            </tr>
            <?php
        }

    }


    if($category == 'snacks')
    {
      
      $query = "SELECT * FROM snacks WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Weight in grams</p> </th>
              <th><p style="text-align:center;">Price</p> </th>
              <th><p style="text-align:center;">Quantity</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['name'];;
              $weight = $row['weight'];
              $price = $row['price'];
              $quantity = $row['quantity'];
          
            echo '<tr>
              <td>'.$name.'</td>
              <td>'.$weight.' </td>
              <td>'.$price.' </td>
              <td>'. $quantity.'</td>
            </tr>';
            }
        }

      else
        { ?>
          
            <tr>
              <td> <h1 style="text-align: center;"> Item not available.</h1> </td>
            </tr>
            <?php
        }

    }

    if($category == 'rice_pulses')
    {
      
      $query = "SELECT * FROM rice_pulses WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Price per kg</p> </th>
              <th><p style="text-align:center;">Quantity in kg</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['name'];;
              $price = $row['price'];
              $quantity = $row['quantity'];
          
            echo '<tr>
              <td>'.$name.'</td>
              <td>'.$price.' </td>
              <td>'. $quantity.'</td>
            </tr>';
            }
        }

      else
        { ?>
          
            <tr>
              <td> <h1 style="text-align: center;"> Item not available.</h1> </td>
            </tr>
            <?php
        }

    }

    
    if($category == 'dryfruits')
    {
      
      $query = "SELECT * FROM dryfruits WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Price per kg</p> </th>
              <th><p style="text-align:center;">Quantity in kg</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['name'];;
              $price = $row['price'];
              $quantity = $row['quantity'];
          
            echo '<tr>
              <td>'.$name.'</td>
              <td>'.$price.' </td>
              <td>'. $quantity.'</td>
            </tr>';
            }
        }

      else
        { ?>
          
            <tr>
              <td> <h1 style="text-align: center;"> Item not available.</h1> </td>
            </tr>
            <?php
        }

    }

    
    if($category == 'cooking_oil')
    {
      
      $query = "SELECT * FROM cooking_oil WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Company Name </p></th>
              <th><p style="text-align:center;">Price per packet</p> </th>
              <th><p style="text-align:center;">Quantity in stock</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['name'];
              $comapny_name = $row['company_name'];
              $price = $row['price'];
              $quantity = $row['quantity'];
          
            echo '<tr>
              <td>'.$name.'</td>
              <td>'.$comapny_name.'</td>
              <td>'.$price.' </td>
              <td>'. $quantity.'</td>
            </tr>';
            }
        }

      else
        { ?>
          
            <tr>
              <td> <h1 style="text-align: center;"> Item not available.</h1> </td>
            </tr>
            <?php
        }

    }


    if($category == 'kitchen_utensils')
    {
      
      $query = "SELECT * FROM kitchen_utensils WHERE utensil_name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;"> Material </p></th>
              <th><p style="text-align:center;">Price per kg</p> </th>
              <th><p style="text-align:center;">Quantity in kg</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['utensil_name'];
              $material = $row['material'];
              $price = $row['price'];
              $quantity = $row['quantity'];
          
            echo '<tr>
              <td>'.$name.'</td>
              <td>'.$material.'</td>
              <td>'.$price.' </td>
              <td>'. $quantity.'</td>
            </tr>';
            }
        }

      else
        { ?>
          
            <tr>
              <td> <h1 style="text-align: center;"> Item not available.</h1> </td>
            </tr>
            <?php
        }

    }
}


?>








  