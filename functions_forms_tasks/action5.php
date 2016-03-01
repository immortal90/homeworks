<?php
function myFunction($dir,$dir2)
{
    $files = scandir($dir);
    foreach ($files as $value) {
        echo $value . "</br>";
    }
    foreach (glob($dir2) as $filename) {
        echo "$filename размер " . filesize($filename) . "</br>\n";
    }
}

myFunction($dir = '/xampp/htdocs',$dir2= "*.php");