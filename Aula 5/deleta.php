<?php
$con = mysqli_connect('localhost', 'root', '', 'teste');
if (!$con) die(mysqli_error($con));

$id = filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM produto WHERE id = $id";

$result = mysqli_query($con, $sql);
if (!$result) die(mysqli_error($con));

header('location: banco.php')
?>