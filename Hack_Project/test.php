<!DOCTYPE html>
<html>
<body>

<table style="width:100%">
  <tr>
    <th>testno</th>
    <th>p</th>
    <th>c</th>
    <th>m</th>
    <th>t</th>
  </tr>

  <tr>
    <td> 

    	  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT testno,p,c,m,t FROM st2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " testno " . $row["testno"]. " p " . $row["p"]. " c " . $row["c"]. " m ".$row["m"]." t ".$row["t"]."<br>"; 
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    	  
  </td>
  </tr>
</table>



</body>
</html>