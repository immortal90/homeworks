<?php
$arr= [1, 2, 3, 4, 5, 6, 7, 8, 9];
$spisok = '';
$c=1;
foreach ($arr as $value) {
    $spisok .= (($c++ % 3) == 0) ? ($value . "<br>\n") : ($value);
}

echo $spisok;
