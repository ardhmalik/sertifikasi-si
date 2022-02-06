<?php
/**
 * Basic Routing use SWITCH Statement
 */
$uri = $_SERVER['REQUEST_URI'];
$page = "";

switch ($uri) {
    case '/':
        $page = "Home.php";
        $title = "My Home";
        break;
    case '/logic':
        $page = "Logic.php";
        $title = "Algorithm Implementation";
        break;
    case '/mytyplan':
        $page = "Mytyplan.php";
        $title = "My This Year Plan";
        break;
    case '/device':
        $page = "Device.php";
        $title = "My Arch";
        break;
    default:
        $page = "404.php";
        $title = "[404] Not Found";
        break;
}

/**
 * Views
 */
require "./Parts/Header.php";
include "./Views/$page";
require "./Parts/Footer.php";
?>