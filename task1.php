<?php
$arr=array(20,5,10,11,9);
$min=$arr[0];
$max=$arr[0];
$count=count($arr);
for($i=1;$i<$count;$i++){
    if($arr[$i]<$min)
    {
$min=$arr[$i];
    }
    elseif($arr[$i]>$max){
        $max=$arr[$i];
    }
}
echo "array elements:20,5,10,11,9";
echo "<br>";
echo "Smaller number is=".$min;
echo "<br>";
echo "Larger number is=".$max;
?>