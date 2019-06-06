<?php
require_once '../start.php';
$errMSG = ""; 
/*--Check Login pass--*/

$password = $users->getInfoUser($_SESSION['id_user']);

/**--Check password match--*/
if(isset($_POST)){
    if ($_POST['password_updt'] != $_POST['confirm_pass_updt']) {
        $errMSG .= "<li>Passwords do not match.</li>";
    } 
    if (password_verify($_POST['password_updt'], $password['password']) == true){
        $errMSG .= "<li>Passwords no change.</li>";
    }

    if(empty($errMSG)){
        echo json_encode(true); 
        $users->updatePass(hash('ripemd160',$_POST['password_updt'] . "si tu aimes la wac tape dans tes mains"), $_SESSION['id_user']);
        exit;
    } else {
        echo json_encode($errMSG); 
    }
}

