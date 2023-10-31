<?php
session_start();
$name = $_POST['name'];
require_once("database.php");
$db = new Database();
$db->updateUserName($_SESSION['email'], $name)
$db->updateIcon($_SESSION['email'], $icon)
?>