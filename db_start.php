<?php
$dbconf = array ('host' => '127.0.0.1',
    'username' => 'root',
    'password' => 'root',
    'dbname' => 'tweet_academy');

try {
    $db = new PDO("mysql:host=" . $dbconf['host'] . ";dbname=" . $dbconf['dbname'], $dbconf['username'], $dbconf['password']);
} catch (PDOException $e) {
    echo "Connexion echouee : " . $e->getMessage();
}