<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RRF PHP 101</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">RRF PHP 101</h3>
    </div>

    <div class="jumbotron">
        <h1>RRF PHP 101</h1>
        <?php
        require_once __DIR__ . '/connection.php';

        if(isset($_GET['action']) && $_GET['action'] === 'delete' && !empty($_GET['id'])) {
            $st = $connection->prepare('DELETE FROM users WHERE id = :id');
            $st->bindValue('id', $_GET['id'], PDO::PARAM_INT);
            $st->execute();

            echo '<div class="alert alert-success">User deleted.</div>';
        }

        $st = $connection->prepare('SELECT * FROM users');
        $data = $st->execute();
        $results = $st->fetchAll();

        ?>
        <table class="table table-bordered">
            <thead>
                <td>Email</td>
                <td>Photo</td>
                <td>Action</td>
            </thead>
            <tbody>
            <?php
                foreach($results as $user) {
            ?>
                <tr>
                    <td><?php echo $user['email']; ?></td>
                    <td><a href="images/<?php echo $user['photo']; ?>">Photo</a></td>
                    <td><a href="?action=delete&id=<?php echo $user['id']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
            </tbody>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
