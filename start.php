<?php
session_start();
require_once 'db_start.php';
require_once 'classes/Tweets.php';
require_once 'classes/Users.php';

$users = new Users($db);
$tweets = new Tweets($db);
