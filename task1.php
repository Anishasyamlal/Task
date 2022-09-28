<?php
$array=array(0,3,2);
$length=count($array);
$max=$array[0];

for($i=1;$i<$length;$i++){
    if($array[$i]>$max){
        $max=$array[$i];
    }
}
echo "bigger is".$max;
?>
