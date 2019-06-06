<?php

class Users {

    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function register($username, $display_name, $birthdate, $email, $password) {
        $sql = $this->db->prepare("INSERT INTO users (username, display_name, birthdate, email, password) 
                                  VALUE (:username, :display_name, :birthdate, :email, :password)");
        $sql->bindValue(':username', $username);
        $sql->bindValue(':display_name', $display_name);
        $sql->bindValue(':birthdate', $birthdate);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', $password);
        $sql->execute();
    }

    public function login($email, $password) {
        $sql = $this->db->prepare("SELECT id_user, avatar, bio, username, display_name, email, theme, status_account, private_account FROM users WHERE email = :email AND password = :password");
        $sql->bindValue(':password', hash('ripemd160',$password . "si tu aimes la wac tape dans tes mains"));
        $sql->bindValue(':email', $email);
        $sql->execute();
        if ($sql->rowCount() != 1) {
            return false;
        } else {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function set_session($user_info) {
        $_SESSION['id_user'] = $user_info[0]['id_user'];
        $_SESSION['bio'] = $user_info[0]['bio'];
        $_SESSION['username'] = $user_info[0]['username'];
        $_SESSION['display_name'] = $user_info[0]['display_name'];
        $_SESSION['email'] = $user_info[0]['email'];
        $_SESSION['theme'] = $user_info[0]['theme'];
        $_SESSION['avatar'] = $user_info[0]['avatar'];
        $_SESSION['status_account'] = $user_info[0]['status_account'];
        $_SESSION['private_account'] = $user_info[0]['private_account'];
    }
    public function deactivate($id_user) {
        $sql = $this->db->prepare("UPDATE users SET status_account = 0 WHERE id_user = :id_user");
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }
    public function getInfoUser($id_user){
        $sql = $this->db->prepare("SELECT id_user, avatar, bio, username, 
        display_name, email, password, theme, status_account, private_account FROM users WHERE id_user = :id_user"); 
        $sql->bindValue(":id_user", $id_user);
        $sql->execute(); 
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function username_exists($username) {
        $sql = $this->db->prepare("SELECT username FROM users WHERE username = :username");
        $sql->bindValue(":username", $username);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function email_exists($email) {
        $sql = $this->db->prepare("SELECT email FROM users WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function phone_exists($phone) {
        $sql = $this->db->prepare("SELECT phone FROM users WHERE phone = :phone");
        $sql->bindValue(":phone", $phone);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUsername($username, $id_user){
        $sql = $this->db->prepare("UPDATE users SET username = :username WHERE id_user = :id_user");
        $sql->bindValue(":username", $username);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updateDisplayName($displayName, $id_user){
        $sql = $this->db->prepare("UPDATE users SET display_name = :display_name WHERE id_user = :id_user");
        $sql->bindValue(":display_name", $displayName);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updatePrivateAccount($private_acount, $id_user){
        $sql = $this->db->prepare("UPDATE users SET private_account = :private_account WHERE id_user = :id_user");
        $sql->bindValue(":private_account", $private_acount);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updateEmail($email, $id_user){
        $sql = $this->db->prepare("UPDATE users SET email = :email WHERE id_user = :id_user");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updatePhone($phone, $id_user){
        $sql = $this->db->prepare("UPDATE users SET phone = :phone WHERE id_user = :id_user");
        $sql->bindValue(":phone", $phone);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updateBio($bio, $id_user){
        $sql = $this->db->prepare("UPDATE users SET  bio = :bio WHERE id_user = :id_user");
        $sql->bindValue(":bio", $bio);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updateWebsite($website, $id_user){
        $sql = $this->db->prepare("UPDATE users SET website = :website WHERE id_user = :id_user");
        $sql->bindValue(":website", $website);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updateLocation($location, $id_user){
        $sql = $this->db->prepare("UPDATE users SET localisation = :localisation WHERE id_user = :id_user");
        $sql->bindValue(":localisation", $location);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

    public function updatePass($pass, $id_user){
        $sql = $this->db->prepare("UPDATE users SET password = :password WHERE id_user = :id_user"); 
        $sql->bindValue(":password", $pass);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
    }

}