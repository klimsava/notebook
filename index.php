<?php

    $PDO = new PDO("mysql:host=localhost; dbname=test;", "root", "");
    $sql = "SELECT * FROM tasks";
    $statement = $PDO -> prepare($sql);
    $result = $statement -> execute();
    $tasks = $statement-> fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notebook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All tasks</h1>
                <a href="create.php" class="btn btn-success">Add tasks</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= $task['id'] ?></td>
                            <td><?= $task['title'] ?></td>
                            <td><?= $task['content'] ?></td>
                            <td>
                                <a href="show.php?id=<?= $task['id']; ?>" class="btn btn-info">Show</a>
                                <a href="edit.php?id=<?= $task['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?= $task['id'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>