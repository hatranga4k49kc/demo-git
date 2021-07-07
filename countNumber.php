<?php 
function countNumber($arr,$number){
	$count = 0;
	for($i =0; $i<count($arr) ;$i++){
		if($arr[$i]==$number){
			$count++;
		}
	}
	return $count;

}

$nums = [];
for($i = 0; $i < 100; ++$i) {
   $nums[$i] = rand(1,101);
}
foreach($nums as $num) {
   echo $num . " ";
}


$count = countNumber($nums,4);
echo "<br/>";
echo "The count of value is: " . $count;
 ?>