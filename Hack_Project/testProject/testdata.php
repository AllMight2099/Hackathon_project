<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT testno, p, c, m, t FROM st2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Test No</th><th>Physics</th><th>Chemistry</th><th>Math</th><th>Total</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["testno"]. "</td><td>" . $row["p"]. "</td><td>" . $row["c"]. "</td><td>" . $row["m"]."</td><td>"  . $row["t"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>