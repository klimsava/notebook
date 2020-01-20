<?php

$PDO = new PDO('mysql:host=localhost; dbname=test', 'root', '');
$sql = "DELETE FROM tasks WHERE id = :id";
$statement = $PDO -> prepare($sql);
$statement ->bindParam(':id', $_GET['id']);
$statement -> execute();

header('Location: /'); exit;
?>