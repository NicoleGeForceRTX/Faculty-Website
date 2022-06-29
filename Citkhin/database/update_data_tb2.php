<?php
/**
 * @var $pdo;
 */
include "../config/connect.php";
$num = $_POST['number'];
$id = $_POST['id'];

$pdo -> query("UPDATE `employees_contacts` SET `number` = '$num' WHERE `id` ='$id'");
header('Location:../contact.php');
?>
