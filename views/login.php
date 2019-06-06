<?php include 'redirection.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Tweet academy - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="../style/style.css"/>
</head>
<body>
<div class="container">
    <div class="border border-dark border-5 p-5 rounded m-5">
        <div class="alert alert-danger hide" id="display-error"></div>
        <div class="alert alert-success hide" id="display-success"></div>
        <h2>Login</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="Login">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Your account's email">
            </div>
            <div class="form-group">
                <label for="password">Password</label><br>
                <input class="form-control" type="password" name="password" id="password"
                       placeholder="Your password">
            </div>
            <button type="submit" name="form_connect" class="btn btn-lg btn-info">Log in</button>
        </form>
        <p class="mt-3">
            New on twitter ?<a href="register.php"> Register now !</a>
        </p>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../assets/scripts/login_script.js"></script>
</body>
</html>