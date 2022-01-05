<?php
/**
 * Basic Routing use IF Statement
 */
$uri = $_SERVER['REQUEST_URI'];
$page = "";

if ($uri === "/") 
{
    $page = "Home.php";
    $title = "My Home";
} elseif ($uri === "/logic") 
{
    $page = "Logic.php";
    $title = "Algrithm Implementation";
} elseif ($uri === "/my5plans") 
{
    $page = "InProcess.php";
    $title = "In Development Process";
} elseif ($uri === "/device") 
{
    $page = "Device.php";
    $title = "My Arch";
} else 
{
    $page = "404.php";
    $title = "[404] Not Found";
}

/**
 * Views
 */
require "./Parts/Header.php";
include "./Views/$page";
require "./Parts/Footer.php";
?>