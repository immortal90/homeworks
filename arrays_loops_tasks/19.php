<?php
$arr = array("1" => "Понеділок",
    "2" => "Вівторок",
    "3" => "Середа",
    "4" => "Четвер",
    "5" => "Пятниця",
    "6" => "Субота",
    "7" => "Неділя");
$day = $arr[date('N')];
foreach ($arr as $key => $value) {
    if ($value !== $arr[date('N')]) {
        echo $value;
        echo "</br>\n";
    } else {
        echo "<i>$value</i>";
        echo "</br>\n";
    }
}

