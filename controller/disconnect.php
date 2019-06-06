<?php
require_once '../start.php';

session_destroy();
header("location: ../index.php");