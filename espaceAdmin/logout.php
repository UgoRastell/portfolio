<?php 
session_start();
$_SESSION = array();
session_destroy();
header("Location: http://localhost/portfolio/espaceAdmin/connexion.php");
?>