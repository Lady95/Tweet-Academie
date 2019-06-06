<?php
require_once '../start.php';

if (!empty($_SESSION)){
    header('Location: user_profile.php');
    exit();
}