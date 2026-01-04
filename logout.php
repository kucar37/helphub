<?php

session_start();

$_SESSION = [];

// destroy the session
session_destroy();

// rdirect to login
header("Location: login.php");
exit;
