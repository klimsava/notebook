<?php

$PDO = new PDO("mysql:host=localhost; dbname=test;", "root", "");
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statement = $PDO->prepare($sql);
$statement -> bindParam(":title", $_POST['title']);
$statement -> bindParam(":content", $_POST['content']);
$statement ->execute();

header("location: /"); exit;

?>