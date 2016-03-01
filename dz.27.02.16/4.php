<?php
$value = 'щось десь';
setcookie("TestCookie", $value, time()+3600);
echo $_COOKIE["TestCookie" ];
setcookie("TestCookie", $value, time() - 1);