<?php
$str = $_POST['name'];
function getTopWords($str, $wordsNumber = 3) {
    $arr = explode(' ',$str);
    $arrByLength = array();
    foreach ($arr as $word) {
        $arrByLength[strlen($word)] = $word;
    }

    krsort($arrByLength);

    $topArr = array_slice($arrByLength, 0, $wordsNumber*1);
    $i = 1; $result = "";
    foreach ($topArr as $top) {
        $result .= $i.': '.$top.'; ';
        $i++;
    }

    return $result;
}
echo getTopWords($str);
