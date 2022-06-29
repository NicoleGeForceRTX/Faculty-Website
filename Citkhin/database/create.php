<?php
/**
 * @var $pdo;
 */
include "../config/connect.php";
$fname = $_POST['full_name'];
$pos = $_POST['positions_held'];

$pdo -> query( "INSERT INTO `employees_data` (`id`, `full_name`, `positions_held`) VALUES (NULL, '$fname', '$pos')");

header('Location:../about.php');
?>