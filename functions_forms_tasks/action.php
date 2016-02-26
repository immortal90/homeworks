<?php
function getCommonWords()
{
    $a = htmlspecialchars($_POST['name']);
    $b = (int)$_POST['age'];
    $arr = array($a, $b);
    print_r($arr);
}
getCommonWords();