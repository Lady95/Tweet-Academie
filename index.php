<?php include 'redirection.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style/bootstrap.css" />
    </head>
    <body>
    <main class="container-fluid">
        <div class="row">
            <div class="bg-secondary  text-white p-5 col-md-6 vh-100 d-inline-block">
                <div>
                <h1 class="p-2 font-weight-bold">Welcome to Tweet Academy</h1>
                    <div class="my-2 py-3">
                        <p>Discover and follow new interests.</p>
                        <p>See what we're talking about.</p>
                        <p>Join the community</p>
                    </div>
                </div>
            </div>
            <div class="bg-light text-center p-5 col-md-6  vh-100 d-inline-block">
                <h3 class="p-2 font-weight-bold">See what's happening, what's popping !</h3>

                <p>Join Tweet Academy today !</p>
                <a class="btn btn-primary btn-lg" href="views/login.php">Log in</a>
                <br>
                <a class=" btn btn-outline-success btn-lg mt-2" href="views/register.php">Register</a>
            </div>
        </div>
    </main>
    <footer>
        <div class="col-md-12">
            <p> Tweet Academy 2019 &copy; </p>
        </div>
    </footer>
    </body>
</html>