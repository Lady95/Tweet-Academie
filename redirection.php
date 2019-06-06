<?php
require_once 'start.php';

if (!empty($_SESSION)){
    header('Location: views/user_profile.php');
    exit();
}