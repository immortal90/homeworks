<?php
$arr = [2, 5, 9, 15, 0, 4];
foreach($arr as $key => $value){
    if ($value<10 and $value>3){
        echo "</br>\n";
        echo $value ;
    }
}