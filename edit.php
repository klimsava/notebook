<?php

$PDO = new PDO("mysql:host = localhost; dbname=test", 'root', '');
$sql = "SELECT * FROM tasks WHERE id=:id";
$statement = $PDO -> prepare($sql);
$statement -> bindParam(":id", $_GET['id']);
$statement -> execute();
$task = $statement -> fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Task</h1>
            <form action="update.php?id=<?= $task['id']; ?>" method="POST">

                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="<?= $task['title'] ?>">
                </div>

                <div class="form-group">
                    <textarea name="content" class="form-control"><?= $task['content'] ?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>