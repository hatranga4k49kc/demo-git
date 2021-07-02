<?php 
	$arr_1 = array(1,3,5,6,7,8);
	$arr_2 = array(0,5,4,1,8.10);
	$arr = NULL;
	for($i = 0; $i <count($arr_1); $i++){
		$arr[]= $arr_1[$i];
	};
	for($j = 0; $j < count($arr_2); $j++){
		$arr[]= $arr_2[$j];
	};
	print_r( $arr);
 ?>