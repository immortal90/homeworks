<?php
$arr = array("1" => "Понеділок",
    "2" => "Вівторок",
    "3" => "Середа",
    "4" => "Четвер",
    "5" => "Пятниця",
    "6" => "Субота",
    "7" => "Неділя");
foreach ($arr as $key => $value) {
    if ($value !== "Субота" and $value !== "Неділя") {
        echo $value;
        echo "</br>\n";
    } else {
        echo "<b>$value</b>";
        echo "</br>\n";
    }
}