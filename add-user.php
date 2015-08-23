
<?php
include 'db-settings.php';

$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$role = $_GET["role"];

//execute the SQL query and return records
mysql_query("insert into " . $tableUser . " (firstname, lastname, role) values ('". $firstname ."', '".$lastname."', '".$role."')");

header('Location: index.php');
exit();
?>