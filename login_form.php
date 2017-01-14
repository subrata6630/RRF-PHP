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
        if (isset($_POST['update']) && !empty($_GET['id'])) {
            $password = trim($_POST['password']);

            if (strlen($password) < 6) {
                echo 'password must be at least 6 chars<br/>';
            } else {
                $temp = explode('.', $_FILES['photo']['name']);
                $file_ext = end($temp);
                $file_name = time() . '.' . $file_ext;
                $upload = move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' . $file_name);

                require_once __DIR__ . '/connection.php';
                // update data into the database
                $password = sha1($password);

                $st = $connection->prepare('UPDATE users SET password = :password WHERE id = :id');
                $st->bindValue('password', $password);
                $st->bindValue('id', $_GET['id'], PDO::PARAM_INT);
                $st->execute();

                if ($upload === true) {
                    $st = $connection->prepare('UPDATE users SET photo = :photo WHERE id = :id');
                    $st->bindValue('photo', $file_name);
                    $st->bindValue('id', $_GET['id'], PDO::PARAM_INT);
                    $st->execute();
                }

                echo 'Update successful.<br/>';
            }
        }
        ?>

        <?php
        if (isset($_POST['login'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo 'invalid email<br/>';
            }

            if (strlen($password) < 6) {
                echo 'password must be at least 6 chars<br/>';
            }

            // login
            $password = sha1($password);
            require_once __DIR__ . '/connection.php';
            $st = $connection->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
            $st->bindValue('email', $email);
            $st->bindValue('password', $password);
            $data = $st->execute();
            if ($st->rowCount() === 1) {
                $data = $st->fetch();
                echo '<div class="alert alert-success">Logged in as, ' . $data['email'] . '</div>';
                require_once __DIR__ . '/update.php';
            } else {
                echo '<div class="alert alert-warning">Invalid email or password</div>';
                echo '<a href="login_form.php">Back to Login</a>';
            }
        } else {
            require_once __DIR__ . '/login.php';
        }
        ?>
    </div>
</div>
</body>
</html>
