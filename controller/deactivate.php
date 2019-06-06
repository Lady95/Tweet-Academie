<?php

require_once '../start.php';
$users->deactivate($_SESSION['id_user']);
session_unset();
session_destroy();
header("location: ../index.php");