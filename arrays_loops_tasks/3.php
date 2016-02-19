<?php
$arr = [26, 17, 136, 12, 79, 15];
foreach ($arr as $value) {
    $result =  array_sum($arr) * array_sum($arr) ;
}
echo $result;