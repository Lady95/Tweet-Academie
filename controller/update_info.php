<?php 
require_once '../start.php';
$errMSG = "";

if(isset($_POST)){
    /**--Check empty and valid--*/
    foreach ($_POST as $key => $value) {
        /** Check username */
        if($key == 'new_username' && !empty($value) ){
            if ($users->username_exists($value) == true) {
                $errMSG .= "<li>Username already exists.</li>";
            } else{
                $users->updateUsername(strip_tags(trim(strtolower($value))), $_SESSION['id_user']);
                $errMSG .= "<li> Username update.</li>";
            }
        }
        /** Check display name */
        if($key == 'display_name_updt' && !empty($value) ){
            $users->updateDisplayName(strip_tags(trim($value)), $_SESSION['id_user']);
            $errMSG .= "<li> Display name update.</li>";
        }
         /** Check  private account */        
        if( $key == 'private_account') {
            $users->updatePrivateAccount(strip_tags(trim($value)), $_SESSION['id_user']);
            if($value == 0) {
                $errMSG .= "<li> Mode private account.</li>";
            } else {
                $errMSG .= "<li> Mode public account.</li>";
            }
            
        }
         /** Check email */ 
        if($key == 'email_updt' && !empty($value)) {
            if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                if($users->email_exists($value) == false) {
                    $users->updateEmail(strip_tags(trim($value)), $_SESSION['id_user']);
                    $errMSG .= "<li> Email update .</li>";
                } else {
                    $errMSG .= "<li>Email already exists.</li>";
                }
            } else {
                $errMSG .= "<li>Invalid email format</li>";
            }
        }
         /** Check Phone */        
        if($key == 'phone' && !empty($value)){
            if (preg_match("`^0[0-9]([-. ]?\d{2}){4}[-. ]?$`", $value)){
                if($users->phone_exists($value) == false) {
                    $users->updatePhone(strip_tags(trim($value)), $_SESSION['id_user']);
                    $errMSG .= "<li> Phone update.</li>";
                } else {
                    $errMSG .= "<li>Phone already exists.</li>";
                }
            } else {
                $errMSG .= "<li>Phone is not valid.</li>";
            }
        }
        /** Check Bio */                
        if($key == 'bio'){
            if(!empty($value)) {
                $users->updateBio(strip_tags(trim($value)), $_SESSION['id_user']);
                $errMSG .= "<li> Biographie update.</li>";
            }
            
        }
        /** Check website */                
        if($key == 'website' && !empty($value)){
            $users->updateWebsite(strip_tags(trim($value)), $_SESSION['id_user']);
            $errMSG .= "<li> Website update.</li>";
        }
        /** Check Localisation */                
        if($key == 'localisation' && !empty($value)){
            if (!ctype_alnum($value)) {
                $users->updateLocation(strip_tags(trim($value)), $_SESSION['id_user']);
                $errMSG .= "<li> localisation update.</li>";
            } else {
                $errMSG .= "<li>" . ucwords($key) . " contains non allowed characters</li>";
            }
            
        }        
    }
}

echo json_encode($errMSG); 



