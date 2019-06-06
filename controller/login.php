<?php
require_once '../start.php';
$errMSG = "";
if (isset($_POST)) {
    /*--Check Login info--*/
    $user_info = $users->login($_POST['email'], $_POST['password']);
    if ($user_info == false) {
        $errMSG .= "<li>Email or password incorrect</li>";
    } else {
        $users->set_session($user_info);
    }
    if (empty($errMSG)) {
        if ($user_info[0]['status_account'] == 0) {
            echo json_encode("desac");
        } else {
            echo json_encode(['code' => true,
                                    'user_id' => $user_info[0]['id_user']]);
        }
    } else {
        echo json_encode($errMSG);
    }
}
