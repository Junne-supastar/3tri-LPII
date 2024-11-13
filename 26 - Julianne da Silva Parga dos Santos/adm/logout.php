<?php

session_start();
$_SESSION = array();
session_destroy();
header('location:/26 - Julianne da Silva Parga dos Santos/adm/login.php'); 
exit();



?>