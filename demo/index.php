<?php
global $conn;
require "config.php";
?>

<?php
$user = $conn->query("SELECT * FROM user");
$user ->execute();
$users = $user->fetchAll(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>CRUD</title>
</head>
<body>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4 d-inline">Categories</h5>
                <a  href="create-category.html" class="btn btn-primary mb-4 text-center float-right">Create Categories</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <th scope="row"><?php echo $user-> id ?></th>
                            <td><?php echo $user-> name ?></td>
                            <td><?php echo $user-> email ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>