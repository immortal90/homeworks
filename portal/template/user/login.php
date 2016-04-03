<?php
?>
<form method="POST" id="form">
    Логин <input name="User[user_login]" type="text"><br>
    Пароль <input name="User[user_password]" type="password"><br>
    Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip"><br>
    <input name="submit" type="submit" value="Войти">
</form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<?= $err ?>