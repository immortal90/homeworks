<?php
$arr = array();
$i=0;
while ($i < 10) {
    $arr[] = rand(0,20);
    $i++;
}
foreach ($arr as $number) {
    echo $number.' | ';
}
$minPos = array_search(min($arr), $arr);
$maxPos = array_search(max($arr), $arr);
$maxVal = max($arr);
$minVal = min($arr);
$arr[$minPos] = $maxVal;
$arr[$maxPos] = $minVal;
echo ' ==> ';
foreach ($arr as $number) {
    echo $number.' | ';
}