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
    <td><a href="./radar/radar.php">Click Here</td>
  </tr>
  <tr>
    <td>2</td>
    <td>5</td>
    <td>32/36</td>
    <td>20/36</td>
    <td>20/36</td>
    <td>72/108</td>
    <td>108</td>
    <td><a href="./radar/radar.phpp">Click Here</td>
  </tr>
  <tr>
    <td>3</td>
    <td>3</td>
    <td>28/36</td>
    <td>32/36</td>
    <td>32/36</td>
    <td>92/108</td>
    <td>108</td>
    <td><a href="./radar/radar.php">Click Here</td>
  </tr>
  <tr>
    <td>4</td>
    <td>1</td>
    <td>36/36</td>
    <td>20/36</td>
    <td>36/36</td>
    <td>92/108</td>
    <td>108</td>
    <td><a href="./radar/radar.php">Click Here</td>
  </tr>
  <tr>
    <td>5</td>
    <td>1</td>
    <td>29/36</td>
    <td>33/36</td>
    <td>36/36</td>
    <td>98/108</td>
    <td>108</td>
    <td><a href="./radar/radar.php">Click Here</td>
  </tr>
  <tr>
    <td>6</td>
    <td>16</td>
    <td>21/36</td>
    <td>29/36</td>
    <td>22/36</td>
    <td>89/108</td>
    <td>108</td>
    <td><a href="./radar/radar.php">Click Here</td>
  </tr>

  <!-- //Regression Code -->
  <?php
$data = array(
    array(1,89),
    array(2,89 ),
    array(3,78),
    array(4,100),
    array(5,81),
    array(6,58)
);
function hypothesis($intercept, $gradient) {
    return function($x) use ($intercept, $gradient) {
        return $intercept + ($x * $gradient);
    };
}
function score($data, $hypothesis) {
  $score = 0;
  foreach($data as $row) {
    $score += pow($hypothesis($row[0]) - $row[1], 2);
  }
  return $score;
}
function step($data, $parameters, $min) {
  $minParams = null;
  
  $matrix = array(
    array(0.25, 0),
    array(-0.25, 0),
    array(0, 0.25),
    array(0, -0.25),
  );
  
  foreach($matrix as $row) {
    $hypothesis = hypothesis($parameters[0] + $row[0], $parameters[1] + $row[1]);
    $score = score($data, $hypothesis);
    if( $min === null || $score <= $min) {
      $minParams = array($parameters[0] + $row[0], $parameters[1] + $row[1]);
      $min = $score;
      //echo "New Min: ", $min, "\n";
    } 
  }
  
  return array($minParams, $min);
}
function deriv($data, $hypothesis) {
  $i_res = 0;
  $g_res = 0;
  foreach($data as $row) {
    $i_res += $hypothesis($row[0]) - $row[1];
    $g_res += ($hypothesis($row[0]) - $row[1]) * $row[0];
  }
  
  $out_i = 1/count($data) * $i_res;
  $out_g = 1/count($data) * $g_res;
  
  return array($out_i, $out_g);
}
function gradient($data, $parameters) {
  $learn_rate = 0.01;
  $hypothesis = hypothesis($parameters[0], $parameters[1]);
  $deriv = deriv($data, $hypothesis);
  $score = score($data, $hypothesis);
  $parameters[0] = $parameters[0] - ($learn_rate * $deriv[0]);
  $parameters[1] = $parameters[1] - ($learn_rate * $deriv[1]);
  
  $hypothesis = hypothesis($parameters[0], $parameters[1]);
  if($score < score($data, $hypothesis)) {
    return false;
  }
  
  return $parameters;
}
$parameters = array(0, 0);
$min = null;
do{
  list($minParams, $min) = step($data, $parameters, $min);
} while( $minParams != null && $parameters = $minParams);
$x=$parameters[0];
$y=$parameters[1];
$parameters = array(1, 3);
$last_parameters = false;
do {
  $last_parameters = $parameters;
  $parameters = gradient($data, $parameters);
} while($parameters != false);
$a=($y*7)+$x;
$a=round($a*0.36,0,PHP_ROUND_HALF_DOWN);
echo "<tr>
    <td>7 (Predicted) </td>
    <td></td>
    <td>$a/42</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>"
?>
<td><a href="finalMultigraph.php">Click Here</td>
</tr>
 <!-- var_dump($last_parameters); -->
  <!--
  <tr>
    <td>8</td>
    <td>12</td>
    <td>18/36</td>
    <td>24/36</td>
    <td>25/36</td>
    <td>67/108</td>
    <td>108</td>
    <td><a href="finalMultigraph.php">Click Here</td>
  </tr>
  <tr>
    <td>9</td>
    <td>14</td>
    <td>36/36</td>
    <td>36/36</td>
    <td>20/36</td>
    <td>92/108</td>
    <td>108</td>
    <td><a href="finalMultigraph.php">Click Here</td>
  </tr>
  <tr>
    <td>10</td>
    <td>8</td>
    <td>29/48</td>
    <td>28/48</td>
    <td>30/48</td>
    <td>87/144</td>
    <td>144</td>
    <td><a href="finalMultigraph.php">Click Here</td>d>
  </tr>
  <tr>
    <td>11</td>
    <td>12</td>
    <td>28/36</td>
    <td>20/36</td>
    <td>36/36</td>
    <td>84/108</td>
    <td>108</td>
    <td><a href="finalMultigraph.php">Click Here</td>
  </tr>
  <tr>
    <td>12</td>
    <td>7</td>
    <td>32/36</td>
    <td>24/36</td>
    <td>28/36</td>
    <td>84/108</td>
    <td>108</td>
    <td><a href="finalMultigraph.php">Click Here</td>
  </tr>
  <tr>
    <td>13</td>
    <td>2</td>
    <td>24/36</td>
    <td>36/36</td>
    <td>36/36</td>
    <td>96/108</td>
    <td>108</td>
    <td><a href="finalMultigraph.php">Click Here</td>
  </tr> -->
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
