<?php
$arr = array();
$i = 0;
while ($i < 6) {
    $arr[] = rand(1, 100);
    $i++;
}
var_dump($arr);
echo "</br>";
$result = 1;
foreach ($arr as $key => $number) {
    if ($key % 2 == 0) {
        $result *= $number;
    }
    if ($key % 2 == 1) {
        echo $number . "<br>";
    }
}
var_dump($result);






