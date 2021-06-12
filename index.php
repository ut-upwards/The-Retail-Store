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
?>