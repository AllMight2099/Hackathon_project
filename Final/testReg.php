<?php
$data = array(
    array(1,89),
    array(2,89 ),
    array(3,78),
    array(4,100),
    array(5,81),
    array(6,58)
);
// Return a line function
function hypothesis($intercept, $gradient) {
    return function($x) use ($intercept, $gradient) {
        return $intercept + ($x * $gradient);
    };
}
// Return the sum of squared errors
function score($data, $hypothesis) {
	$score = 0;
	foreach($data as $row) {
		$score += pow($hypothesis($row[0]) - $row[1], 2);
	}
	return $score;
}
function step($data, $parameters, $min) {
	$minParams = null;
	
	// Lets calculate our possibilities
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
	
	// Create a new hypothesis to test our score
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
//var_dump($parameters);
$x=$parameters[0];
$y=$parameters[1];
var_dump($x);
var_dump($y);
$a=($y*7)+$x;
var_dump($a);
echo "====================\n";
$parameters = array(1, 3);
$last_parameters = false;
do {
	$last_parameters = $parameters;
	$parameters = gradient($data, $parameters);
} while($parameters != false);
// var_dump($last_parameters);