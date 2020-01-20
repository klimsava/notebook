<?php

$PDO = new PDO('mysql:host=localhost; dbname=test', 'root', '');
$sql = "UPDATE tasks SET title=:title, content=:content WHERE id=:id";
$statement = $PDO -> prepare($sql);
$statement -> bindParam(":id", $_GET['id']);
$statement -> bindParam(":title", $_POST['title']);
$statement -> bindParam(':content', $_POST['content']);
$result = $statement -> execute();

header('Location: /'); exit;

?>