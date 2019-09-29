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
<h1 style="text-align: center;">PROFILE</h1><br><br>
<h2 style="text-align: left;">PERSONAL DETAILS</h2><br>
<!-- <h3 style="text-align: left;">Name: </h3> -->
<h3 style="text-align: left;">Enrollment Number:<?php echo $_POST["uname"]?> </h3><br>
<h2 style="text-align: center;">ANALYSIS REPORT</h2><br>
<table>
  <tr>
    <th>Test No.</th>
    <th>Rank</th>
    <th>Physics</th>
    <th>Chemistry</th>
    <th>Maths</th>
    <th>Total</th>
    <th>M.M.</th>
    <th>Detailed Analysis</th>
    
  </tr>
  <tr>
    <td>1</td>
    <td>3</td>
    <td>32/36</td>
    <td>12/36</td>
    <td>23/36</td>
    <td>67/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>2</td>
    <td>5</td>
    <td>32/36</td>
    <td>20/36</td>
    <td>20/36</td>
    <td>72/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>3</td>
    <td>3</td>
    <td>28/36</td>
    <td>32/36</td>
    <td>32/36</td>
    <td>92/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>4</td>
    <td>1</td>
    <td>36/36</td>
    <td>20/36</td>
    <td>36/36</td>
    <td>92/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>5</td>
    <td>1</td>
    <td>29/36</td>
    <td>33/36</td>
    <td>36/36</td>
    <td>98/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>6</td>
    <td>16</td>
    <td>21/36</td>
    <td>29/36</td>
    <td>22/36</td>
    <td>89/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>7</td>
    <td>5</td>
    <td>19/42</td>
    <td>29/42</td>
    <td>22/42</td>
    <td>70/126</td>
    <td>126</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>8</td>
    <td>12</td>
    <td>18/36</td>
    <td>24/36</td>
    <td>25/36</td>
    <td>67/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>9</td>
    <td>14</td>
    <td>36/36</td>
    <td>36/36</td>
    <td>20/36</td>
    <td>92/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>10</td>
    <td>8</td>
    <td>29/36</td>
    <td>28/36</td>
    <td>30/36</td>
    <td>87/144</td>
    <td>144</td>
    <td><a href="graph1.php">Click Here</td>d>
  </tr>
  <tr>
    <td>11</td>
    <td>12</td>
    <td>28/36</td>
    <td>20/36</td>
    <td>36/36</td>
    <td>84/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>12</td>
    <td>7</td>
    <td>32/36</td>
    <td>24/36</td>
    <td>28/36</td>
    <td>84/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
  <tr>
    <td>13</td>
    <td>2</td>
    <td>24/36</td>
    <td>36/36</td>
    <td>36/36</td>
    <td>96/108</td>
    <td>108</td>
    <td><a href="graph1.php">Click Here</td>
  </tr>
<!--   <tr>
    <td>14</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr> -->
</table>

<h2 style="text-align: center">GRAPHICAL ANALYSIS</h2>
<div class="submit" align="center">
<a href="finalMultigraph.php" target="_blank" align="center" style="text-align: center">GRAPHS</a> 
</div>


</body>
</html>
