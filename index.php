<?php 
if (!isset($_SESSION)) session_start();

require_once 'app/init.php';
// header('location:'.BASE_URL);

if (isset($_GET['action'])) 
    require_once 'app/action/main.php';
else 
    require_once isset($_SESSION['login']) ? 'app/layout/main.php' : 'app/layout/auth.php';