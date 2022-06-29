<?php
/**
 * @var $pdo ;
 */
include "../config/connect.php";
$id = $_GET['id'];

$pdo->query("DELETE FROM `employees_contacts` WHERE `id` = '$id'");
header('Location:../contact.php');
?>