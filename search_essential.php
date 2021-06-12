<!DOCTYPE html>
<html>
<head>
  <title> Search Personal Essentials </title>
  <link rel="stylesheet" type="text/css" href="./css/style3.css">
</head>

<body>
  <h1 class="page_title"> The Retail Store...</h1>



  <fieldset style="margin-left: 5%; margin-right: 5%; background-color: #BAD7EC;">
    <h2> Write the product name you want to search</h2>
  
    <form action="search_essential.php" method="POST">
        <input type="text" name="name" placeholder="Type in the name of product you want to find..." style="width: 30%;">
        <br><hr>
      
      <h2> Select the sub-categeory </h2> 

      
        <input type="radio" name="category" value="deodorants">
         <label for="category" style="font-size: 22px;">Deodorants &emsp; &emsp;</label>

        <input type="radio" name="category" value="soaps">
        <label for="category" style="font-size: 22px;">Soaps &emsp; &emsp;</label>

        <input type="radio" name="category" value="hair_care">
         <label for="category" style="font-size: 22px;">Hair Care &emsp; &emsp;</label>

         <input type="radio" name="category" value="body_lotion">
         <label for="category" style="font-size: 22px;">Body Lotion &emsp; &emsp;</label>


         <input type="radio" name="category" value="shampoo">
         <label for="category" style="font-size: 22px;">Shampoo &emsp; &emsp;</label>

         <input type="radio" name="category" value="face_cream">
         <label for="category" style="font-size: 22px;">Face Cream &emsp; &emsp;</label>

         <input type="radio" name="category" value="face_wash">
         <label for="category" style="font-size: 22px;">Face wash &emsp; &emsp;</label><br><br><br>&emsp; 

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

    if($category == 'deodorants')
    { 
      
      $query = "SELECT * FROM deodrants WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');

      if(mysqli_num_rows($data) > 0)
        { 
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product name</p></th>
              <th><p style="text-align:center;">Company name</p></th>
              <th><p style="text-align:center;">Price per item</p> </th>
              <th><p style="text-align:center;">Quantity in stock</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['name'];
              $company_name = $row['name'];
              $price = $row['price'];
              $quantity = $row['quantity'];

             echo '<tr>
              <td> '.$name.'</td>
              <td> '.$company_name.'</td>
              <td>'. $price.' </td>
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


    if($category == 'soaps')
    {
      
      $query = "SELECT * FROM soaps WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Price per item</p> </th>
              <th><p style="text-align:center;">Quantity in stock</p> </th>
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




    if($category == 'hair_care')
    {
      
      $query = "SELECT * FROM hair_care WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Price per item</p> </th>
              <th><p style="text-align:center;">Quantity in stock</p> </th>
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


    if($category == 'body_lotion')
    {
      
      $query = "SELECT * FROM body_lotion WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Price per item</p> </th>
              <th><p style="text-align:center;">Quantity in stock</p> </th>
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

    
    if($category == 'shampoo')
    {
      
      $query = "SELECT * FROM shampoo WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Price per item</p> </th>
              <th><p style="text-align:center;">Quantity in stock</p> </th>
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

    
    if($category == 'face_cream')
    {
      
      $query = "SELECT * FROM face_cream WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Price per item</p> </th>
              <th><p style="text-align:center;">Quantity in stock</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['name'];
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


    if($category == 'face_wash')
    {
      
      $query = "SELECT * FROM face_wash WHERE name LIKE '%$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Product Name </p></th>
              <th><p style="text-align:center;">Price per item</p> </th>
              <th><p style="text-align:center;">Quantity in stock</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['name'];
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
     mysqli_close($conn);
}


?>








  