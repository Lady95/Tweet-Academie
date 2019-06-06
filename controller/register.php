<?php
require_once '../start.php';
$aValid = array('_', '-');
$errMSG = "";
$empty = 0;

if (isset($_POST)) {
/**--Check empty and valid--*/
    foreach ($_POST as $key => $item) {
        if (trim($item) == "" || empty($item)) {
            $empty = 1;
        }
        if ($key == 'username' && !empty($item)) {
            if (!ctype_alnum(str_replace($aValid, '', $item))) {
                $errMSG .= "<li>" . ucwords($key) . " contains non allowed characters</li>";
            }
        }
        if ($key == "email") {
            if (!filter_var($item, FILTER_VALIDATE_EMAIL)) {
                $errMSG .= "<li>Invalid email format</li>";
            }
        }
    }
    if ($empty == 1) {
        $errMSG .= "<li> Fill any empty field.</li>";
    }
    /**--Check Age--*/
    $dob = new DateTime($_POST['birthdate']);
    $now = new DateTime();
    if ($now->diff($dob)->format("%R%a") >= 0) {
        $errMSG .= "<li>Somehow you were able to be born in the future ?</li>";
    } else {
        if ($now->diff($dob)->y < 16) {
            $errMSG .= "<li>You must be atleast 16 years old to join the website.</li>";
        }
    }
    /**--Check Email--*/
    if ($users->email_exists($_POST['email']) == true) {
        $errMSG .= "<li>Email already exists.</li>";
    }
    /**--Check Username--*/
    if ($users->username_exists($_POST['username']) == true) {
        $errMSG .= "<li>Username already exists.</li>";
    }
    /**--Check password match--*/
    if ($_POST['password'] != $_POST['rpt_password']) {
        $errMSG .= "<li>Passwords do not match.</li>";
    }
    if (empty($errMSG)) {
        echo json_encode(true);
        $users->register($_POST['username'], strip_tags($_POST['display_name']), $_POST['birthdate'], $_POST['email'], hash('ripemd160',$_POST['password'] . "si tu aimes la wac tape dans tes mains"));
        exit;
    } else {
        echo json_encode($errMSG);
    }
}