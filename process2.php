<?php 
// GET 
if (isset($_GET['user'])) { 
    echo "GET: " . htmlspecialchars($_GET['user']) . "<br>"; 
} 
 
// POST 
if (isset($_POST['user'])) { 
    echo "POST: " . htmlspecialchars($_POST['user']) . "<br>"; 
} 
 
// REQUEST 
if (isset($_REQUEST['user'])) { 
    echo "REQUEST: " . htmlspecialchars($_REQUEST['user']) . "<br>"; 
} 
 
// COOKIE 
if (isset($_COOKIE['user'])) { 
    echo "COOKIE: " . $_COOKIE['user'] . "<br>"; 
} 
 
// SESSION (must call session_start()) 
session_start(); 
$_SESSION['user'] = "Ashik"; 
echo "SESSION: " . $_SESSION['user'] . "<br>"; 
 
// SERVER 
echo "SERVER (Your IP): " . $_SERVER['REMOTE_ADDR'] . "<br>"; 
?>