<?php 
	$arr = array(
		array(1,3,5,7),
		array(2,4,6,8),
		array(3,5,0,-1),

	);


	$max = null;
	$index_1 = null;
	$index_2 = null;
	for($i = 0; $i < count($arr); $i++){
		for($j = 0; $j < count($arr); $j++){
			if($arr[$i][$j] ==null){
				$max = $arr[$i][$j];
				$index_1 = $i;
				$index_2 = $j;
			}
			else{
				if($arr[$i][$j]>$max){
					$max = $arr[$i][$j];
					$index_1 = $i ;
					$index_2=$j;
				}
			}
		}


	}
echo "Giá trị nhỏ là $max, nằm tại vị trí [$index_1,$index_2]";
 ?>