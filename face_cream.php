<!DOCTYPE html>
<html>
<head>

<style>
  body{
  background-color:#D6EAF8 ;
}

.page_title {
  font-size: 2.5em;
  font-family: sans-serif;   /* font change required */ 
  text-align: center;
  background-color: #48D1CC;
  padding: 5px;
  margin-left:3%;
  margin-right:3%;

}

#myTable {
  border-collapse: separate;
  width: 80%;
  color: #024a37;
  font-family: monospace;
  font-size: 25px;
  text-align: left;
  margin-left: auto;
  margin-right: auto;
  border: 1px solid black;

}

th {
  background-color: #024a37;
  color: white;
  
}

tr:nth-child(even) {
  background-color: #f2f2f2
  
}

#myInput {
  background-image: url("../images/search_icon.png");
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 3px solid black;
  margin-bottom: 12px;
  margin-right: auto;
  margin-left: auto;
}


.button_img {
  border:50px solid black;
}

.homepage_button1 {
  border-radius: 9px;
  background-color: #BAD7EC;
  margin-left: 1335px;
  border:2px solid black

}


.homepage_button2 {
  background-color: #BAD7EC;
</style>

<link rel="stylesheet" type="text/css" href="../css/style3.css">

</head>
<body>

<h1 class="page_title">The Retail Store...</h1>
  <hr><br>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Product name.." title="Type in a name" style="width:76%; margin-left:150px;">

<br><br>

<table id="myTable">
  <tr class="header">
    <th><h3 style="text-align:center;">Product Name</h3></th>
    <th><h3 style="text-align:center;">Price per piece</h3> </th>
    <th><h3 style="text-align:center;">Number of pieces</h3> </th>
  </tr>
  

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

  $sql = "SELECT name, price, quantity FROM face_cream";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) 
  {
    // output data of each row
    while($row = $result->fetch_assoc()) 
      {
        echo  "</td><td>" . $row["name"] . "</td><td>"
         . $row["price"]."</td><td>" . $row["quantity"] ."</td></tr>";
      }
  echo "</table>";
  }   

  else 
  { 
    echo " Not Available"; 
  }

  $conn->close();
?>

</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<br><br><br>
<button class="homepage_button1"><a href="http://localhost/folder/html/home.html"><img src="../folder/images/back_button.png" width="135" class="homepage_button2" class="button_img"></a></button>
<br><br><br>

</body>
</html>
