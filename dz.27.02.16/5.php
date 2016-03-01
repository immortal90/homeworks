<?php
session_start();
$_SESSION['count'] = "Привіт світ";
echo $_SESSION['count'];
unset($_SESSION['count']);
echo $_SESSION['count'];
