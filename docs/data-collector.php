<?php
session_start();

$lastPageID = $_POST["lastPageID"];

$_SESSION[$lastPageID] = $_POST;

// DEVONLY
echo '<pre>';
print_r($_SESSION);
echo '<pre>';
?>