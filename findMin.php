<?php
function findMin($arr) {
	$min = $arr[0];
	for ($i = 1; $i < count($arr); ++$i) {
		if ($arr[$i] < $min) {
			$min = $arr[$i];
		}
	}
	return $min;
}
$nums = [91,78,98,51,62,85,16,1,3,4,5,0,4,12,11,18,19,17];
for($i = 0; $i < 100; ++$i){
	$nums[$i] = rand(1, 101);
}
foreach($nums as $num) {
	echo $num . " ";
}
$minValue = findMin($nums);
echo "</br>";
echo "The mininum value is: " . $minValue;



?>