<?php header('location 2.php; Content-Type: text/html; charset=utf-8'); ?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Result</title>
</head>
<?php
$path = dirname(__FILE__);
$fh = fopen($path . DIRECTORY_SEPARATOR . 'php.csv', 'r');
while ($row = fgetcsv($fh, 0, ';'))
    if (isset($_POST['usd'])) {
        $str = $row[0] . " " . $row[1] . " " . $row[2] . " " . "<br />";
        echo $str;
    } else {

        $str = $row[0] . " " . $row[1] . " " . $row[3] . " " . "<br />";
        echo $str;
    }
setcookie('Test',$str, time() + 3600, "/");
?>
</html>
