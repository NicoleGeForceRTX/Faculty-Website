<?php
/**
 * @var $pdo;
 */
include "../config/connect.php";
$name_id = $_POST['person_id'];
$num = $_POST['number'];

$pdo -> query( "INSERT INTO `employees_contacts` (`id`, `person_id`, `number`) VALUES (NULL, '$name_id', '$num')");

header('Location:../contact.php');
?>
