<!DOCTYPE html>
<html>
<head>
<style>
  a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  align="right";
}


a:hover, a:active {
  background-color: red;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  <?php
    echo "hi";
    echo $_POST["uname"];
    echo $_POST["psw"];
   ?>
  
<h1 style="text-align: center;">PROFILE</h1><br><br>
<h2 style="text-align: left;">PERSONAL DETAILS</h2><br>
<h3 style="text-align: left;">Name: </h3>
<h3 style="text-align: left;">Enrollment Number: </h3><br>
<h2 style="text-align: center;">ANALYSIS REPORT</h2><br>
<table>
  <tr>
    <th>TEST NO.</th>
    <th>RANK</th>
    <th>PHYSICS</th>
    <th>CHEMISTRY</th>
    <th>MATHS</th>
    <th>TOTAL</th>
    <th>M.M.</th>
    <th>DETAILED ANALYSIS</th>
    
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
</table>
<h2 style="text-align: center">GRAPHICAL ANALYSIS</h2>
<div class="submit" align="center">
<a href="graph.php" target="_blank" align="center" style="text-align: center">GRAPHS</a> 
</div>


</body>
</html>
