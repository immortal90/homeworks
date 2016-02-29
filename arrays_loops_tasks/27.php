<?php
function getTable($cols, $rows)
{
    echo "<table border='1' align='center'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";

        for ($td = 1; $td <= $cols; $td++) {

            $colors = array('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green',"");
            $rand_keys = array_rand($colors, 2);
            $r = $colors [$rand_keys[0]];


            echo "<td style='background: $r;'>";
            echo rand();
        }
        echo "</tr>";
    }
}

getTable(5,5);


