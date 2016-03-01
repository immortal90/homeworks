<?php
function myFunction($dir)
{
    $files = scandir($dir);
    foreach ($files as $value) {
        echo $value . "</br>";
    }

}

myFunction($dir = '/xampp/htdocs');
