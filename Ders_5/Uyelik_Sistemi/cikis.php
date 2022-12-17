<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Session Üyelik Sistemi Giriş - Örnek -1</title>
</head>
<?php
// cikis.php sayfası

session_start();
session_destroy();
header("location: giris.php");

?>