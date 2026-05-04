<?php
session_start();
$_SESSION=Array();
session_destroy();
header("Location: ../Vista/login.php");
exit();
?>