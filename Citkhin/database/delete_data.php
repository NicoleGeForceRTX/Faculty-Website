<?php
/**
 * @var $pdo;
 */
include "../config/connect.php";
$id = $_GET['id'];

$pdo -> query("DELETE FROM `employees_data` WHERE `id` = '$id'");
header('Location:../about.php');

?>