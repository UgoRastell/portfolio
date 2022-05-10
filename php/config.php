<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

try {
    $db = new PDO ('mysql:host;'$dbname, $username, $password);
} catch (PDOException $e) {
    print "Erreur: ". $e->getMessage()."<br/>";
    die;
}

?>






