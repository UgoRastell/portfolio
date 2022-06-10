<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "site_perso";

// se connecter à mysql
$conn = mysqli_connect($host, $username, $password, "$database");
if(!$conn){
    die(mysqli_error());
}

$sql = "DELETE FROM form WHERE id='" . $_GET['id'] . "'";
if(mysqli_query($conn, $sql)){
    header("Location: http://localhost/portfolio/admin/");
}else{
    echo 'Error' . mysqli_error($conn);
}

mysqli_close($conn);