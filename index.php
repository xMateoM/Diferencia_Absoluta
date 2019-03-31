<?php

if(isset($_POST['submit'])){

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$num3 = $_POST['num3'];
	$num4 = $_POST['num4'];
	$num5 = $_POST['num5'];
	$num6 = $_POST['num6'];
	$num7 = $_POST['num7'];
	$num8 = $_POST['num8'];
	$num9 = $_POST['num9'];

	$matriz = array(
		array($num1, $num2, $num3),
		array($num4, $num5, $num6),
		array($num7, $num8, $num9),
	);

	$diferencia = DiagonalDiference($matriz);
}

function DiagonalDiference($matriz){
	$left_to_right = ($matriz[0][0] + $matriz[1][1]) + $matriz[2][2];
	$right_to_left = ($matriz[0][2] + $matriz[1][1]) + $matriz[2][0];

	if($left_to_right > $right_to_left){
		$diferencia = $left_to_right - $right_to_left;
	}else{
		$diferencia = $right_to_left - $left_to_right;
	}
	$diferencia = '<h3>La diferencia absoluta es: '.$diferencia.'</h3>';
	return $diferencia;
}
?>