<?php
session_start();

unset($_SESSION['nomUser']);
unset($_SESSION['password']);
header('Location: index.php');
?>