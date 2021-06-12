<!DOCTYPE html>
<html>
<head>
  <title>Fruit & Vegetable</title>
  <link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>

<body>
  <h1 class="page_title"> The Retail Store...</h1>



  <fieldset style="margin-left: 5%; margin-right: 5%; background-color: #BAD7EC;">
    <h2> Write the name of fruit/vegetable to search</h2>
  
    <form action="fruit_vegetable.php" method="POST">
        <input type="text" name="name" placeholder="Type in the name of fruit or vegetable you want to find..." style="width: 30%;">
        <br><hr>
      
      <h2> Select the sub-categeory </h2> 
        <input type="radio" name="category" value="vegetables">
         <label for="category" style="font-size: 22px;">Vegetable</label><br>

        <input type="radio" name="category" value="fruits">
        <label for="category" style="font-size: 22px;">Fruit</label><br><hr><br>

        <input type="submit" name ="submit" value="submit" style="padding: 5px; background-color: #48D1CC; font-weight: bold; font-size: 17px;">

    </form>

<button class="homepage_button1" style="margin-left:1200px;"><a href="../html/home.html"><img src="../images/back_button.png" width="100" class="homepage_button2" class="button_img"></a></button>

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

    if($category == 'vegetables')
    { 
      
      $query = "SELECT * FROM vegetables WHERE vegetable_name LIKE '$name%';";

      $data = mysqli_query($conn, $query) or die('error');

      if(mysqli_num_rows($data) > 0)
        { 
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Available fruit/vegetable</p></th>
              <th><p style="text-align:center;">Price per kg</p> </th>
              <th><p style="text-align:center;">Quantity in kg</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['vegetable_name'];;
              $price = $row['price'];
              $quantity = $row['quantity'];

             echo '<tr>
              <td> '.$name.'</td>
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


    if($category == 'fruits')
    {
      
      $query = "SELECT * FROM fruits WHERE fruit_name LIKE '$name%';";

      $data = mysqli_query($conn, $query) or die('error');
  

      if(mysqli_num_rows($data) > 0)
        {
          echo '<table id="myTable">
              <tr class="header">
              <th><p style="text-align:center;">Available fruit/vegetable</p></th>
              <th><p style="text-align:center;">Price per kg</p> </th>
              <th><p style="text-align:center;">Quantity in kg</p> </th>
            </tr>';

          while($row = mysqli_fetch_assoc($data))
            {
              $name = $row['fruit_name'];;
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

}


?>








  