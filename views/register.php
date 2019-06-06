<?php include 'redirection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../style/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="../style/style.css"/>
</head>
<body>
<main class="container">
    <div class="border border-dark border-5 p-5 rounded m-5">
        <h2>Register to Tweet Academy</h2>
        <form method="post">
            <div class="form-group">
                <label for="username">Username (@)</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>

            <div class="form-group">
                <label for="display_name">Display name</label>
                <input type="text" class="form-control" name="display_name" id="display_name">
            </div>

            <div class="form-group">
                <label for="date_birth">Date of birth</label>
                <input type="date" class="form-control" name="birthdate" id="date_birth">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" name="password" id="pass">
            </div>

            <div class="form-group">
                <label for="confirm_pass">Confirm password</label>
                <input type="password" class="form-control" name="rpt_password" id="confirm_pass">
            </div>
            <input type="submit" name="submit_register" class="btn btn-lg btn-info">
        </form>
        <p class="mt-3">
            Already have an account ?<a href="login.php"> Login now !</a>
        </p>
        <div class="hide alert alert-danger" id="display-error"></div>
    </div>
</main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../assets/scripts/register_script.js"></script>
</html>