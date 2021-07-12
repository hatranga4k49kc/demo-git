<?php 
function selectionSort($mang)
{
    // Đếm tổng số phần tử của mảng
    $sophantu = count($mang);
  
    // Lặp để sắp xếp
    for ($i = 0; $i < $sophantu - 1; $i++)
    {
        // Tìm vị trí phần tử nhỏ nhất
        $min = $i;
        for ($j = $i + 1; $j < $sophantu; $j++){
            if ($mang[$j] < $mang[$min]){
                $min = $j;
            }
        }
  
        // Sau khi có vị trí nhỏ nhất thì hoán vị
        // với vị trí thứ $i
        $temp = $mang[$i];
        $mang[$i] = $mang[$min];
        $mang[$min] = $temp;
    }
  
    // Trả về mảng đã sắp xếp
    return $mang;
}
$arr = array(1, 9, 4.5, 6.6, 5.7, -4.5);
$arr_sort = selectionSort($arr);
echo implode(",", $arr_sort);


 ?>