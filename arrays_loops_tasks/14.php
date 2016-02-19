<?php
$arr = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr as $e) {
    if ($e == 2 or 3 or 4) {
        echo "Є такий елемент";
        break;
    } else {
        echo "Немає такого елемента";
    }
}