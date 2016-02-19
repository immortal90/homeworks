<?php
function getTable($cols=10, $rows=10, $color='yellow'){
    echo "<table border='1' align='center'>";
    for($tr=1;$tr<=$rows;$tr++) {
        echo "<tr>";
        for($td=1;$td<=$cols;$td++){
            if($tr==1 or $td==1)
                echo "<th style='background:$color'>".$tr*$td."</th>";
            else
                echo "<td>".$tr*$td."</td>";
        }
        echo "</tr>";
    }
}
getTable(10,10,'green');
