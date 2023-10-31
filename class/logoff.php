<?php
session_start();
session_destroy();
setcookie('PHPSESSID','',time() - 10,'/');

header('Location:/streaming/test/index.php');
?>