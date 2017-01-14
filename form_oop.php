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
        include_once __DIR__ . '/class.php';

        if (isset($_POST['register'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);

            $user = new User($email, $password);
            // user register
            $user->register();

            echo 'Confirmation email sent to ' . $user->getEmail();
        }
        ?>
        <form action='' method='post' enctype="multipart/form-data">
            <div class="form-group">
                <label for='number'>Email Address: </label>
                <input type='text' class='form-control' name='email'>
            </div>

            <div class="form-group">
                <label for='number'>Password: </label>
                <input type='password' class='form-control' name='password'>
            </div>

            <div class="form-group">
                <label for='number'>Photo: </label>
                <input type='file' class='form-control' name='photo'>
            </div>

            <div class="form-group">
                <button type='submit' class='btn btn-success' name='register'>Register</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
