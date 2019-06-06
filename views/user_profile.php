<?php require_once '../start.php';
//print_r($_SESSION);?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <title>My_Twitter</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Twitter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Feed <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Mentions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Messages</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mb-2" id="">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class=" nav-link btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
            <a class="nav-link btn btn-danger text-white" href="../deconnexion.php">Deconnexion</a>
        </div>
    </nav>
</header>
<img style="height: 200px; width: 100%; display: block;"
     src=""
     alt="Card banner" class="bg-secondary">
<main class="container">
    <div class="row">
        <div class="col-md-4 mt-4">
            <!-- Profile Card -->
            <div class="card border-secondary text-secondary">
                <img style="height: 200px; width: 100%; display: block;"
                     src=""
                     alt="Card banner"
                     class="rounded bg-secondary">
                <div class="card-header">
                    <img class="rounded mr-3" width=50px height="50px" src="<?= $_SESSION['avatar']?>" alt="avatar" style="float:left;">
                    <a class="nav-link btn btn btn-outline-secondary" href="update_user.php" style="float: right;">Edit</a>
                    <a href="" class="text-secondary"><h5 class="card-title"><?= $_SESSION['display_name']?></h5></a>
                    <h6 class="card-subtitle mb-2 text-muted">@<?= $_SESSION['username']?></h6>
                </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Location</li>
                    </ul>
                    <div class="card-body">
                        <p class="card-text">Bio</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Tweets :</li>
                        <li class="list-group-item">Followers :</li>
                        <li class="list-group-item">Following :</li>
                    </ul>
                    <div class="card-footer text-muted">Member since </div>
            </div>
            <!---------------->
        </div>
        <div class="col-md-6 mt-4">
            <!-- Tweet Box -->
            <div id="tweet_box">
                <div class="card bg-secondary text-white border-secondary mb-2" style="max-width: 40rem;">
                    <div class="card-header">Tweet</div>
                    <div class="card-body">
                        <form method="post" id="add_tweet">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            <input class="btn btn-success text-white" id="tweet_btn" type="submit" name="tweet_submit" value="Tweeter" style="float:right;">
                        </form>
                    </div>
                </div>
            </div>
            <!---------------->
            <!-- Tweet Feed -->
            <div id="tweet_list"></div>
            <!---------------->
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../assets/scripts/user_profile.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>