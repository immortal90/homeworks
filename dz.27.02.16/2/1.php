
<?php
/* Этот пример приведет к ошибке. Обратите внимание
 * на тэг вверху, который будет выведен до вызова header() */
header('Location: 2.php');
exit;
?>