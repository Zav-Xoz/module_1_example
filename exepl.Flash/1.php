<?php
// Старт   сессии
session_start();
require 'functions.php';
$_SESSION['user'] = 'User';
output($_SESSION['user']);