<?php
$num = 123;
$summ = 0;

if(is_int($num)){
    for ($i = 0, $cnt = strlen($num); $i < $cnt; $i++) {
        $summ += substr($num, $i, 1);
}   }else{
    echo"В переміній num не цифри";
}
echo $summ;