<?php
/**
 * @var $pdo;
 */
include "../config/connect.php";
$fname = $_POST['full_name'];
$pos = $_POST['positions_held'];
$id = $_POST['id'];

$pdo -> query("UPDATE `employees_data` SET `full_name` = '$fname', `positions_held` = '$pos' WHERE `id` ='$id'");
header('Location:../about.php');

?>