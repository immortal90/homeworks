<?php
function getTable($cols=10, $rows=10){
    echo "<table border='1' align='center'>";
    for($tr=1;$tr<=$rows;$tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            if ($tr == 1 or $td == 1)
                echo "<th>" . $tr * $td . "</th>";
            else
                echo "<td>" . $tr * $td . "</td>";
        }
        echo "</tr>";
    }
}
getTable();