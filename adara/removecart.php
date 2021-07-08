<?php session_start();
    $pid = $_GET['pid'];
    unset($_SESSION['cart'][$pid]);
    header('location:'.$_SERVER['HTTP_REFERER']);
?>