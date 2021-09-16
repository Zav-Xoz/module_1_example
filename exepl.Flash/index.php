<?php
// Старт   сессии
session_start();
//session_destroy();

require 'Message.php';

//output($_SESSION['user']);
$user = isset($_SESSION['user']);
//output($user);
$message_output = new Message($user);
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2><?php  $message_output = new Message($user); ?></h2>

</body>
</html>


