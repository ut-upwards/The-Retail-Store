<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>



<body>



<h1 class="page_title">The Retail Store...</h1>
  <hr><br>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for fruit names.." title="Type in a name" style="width:76%; margin-left:150px;">

<br><br>

<table id="myTable">
  <tr class="header">
    <th><h3 style="text-align:center;">Available fruit</h3></th>
    <th><h3 style="text-align:center;">Quantity in kg</h3> </th>
    <th><h3 style="text-align:center;">Price per kg</h3> </th>
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

  $sql = "SELECT fruit_name, quantity, price FROM fruits";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) 
  {
    // output data of each row
    while($row = $result->fetch_assoc()) 
      {
        echo  "</td><td>" . $row["fruit_name"] . "</td><td>"
        .$row["quantity"]."</td><td>" . $row["price"]."</td></tr>";
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
<button class="homepage_button1"><a href="../html/home.html"><img src="../images/back_button.png" width="135" class="homepage_button2" class="button_img"></a></button>
<br><br><br>

</body>
</html>
