<?php
require_once '../start.php';

if (isset($_SESSION)) {
    $tweets_data = $tweets->get_tweets($_SESSION['id_user']);
    echo json_encode($tweets_data);
}