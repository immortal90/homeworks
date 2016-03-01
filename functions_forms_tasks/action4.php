<?php
$dir = '/xampp/htdocs';
function myFunction($dir)
{
    $files = scandir($dir);
    foreach ($files as $value) {
        echo $value . "</br>";
    }
}

myFunction($dir);

