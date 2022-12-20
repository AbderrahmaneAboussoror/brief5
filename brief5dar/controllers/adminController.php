<?php
class adminController{
    public function fetchAdmin(){
        $admins = admin::getAdmins();
        foreach($admins as $admin)
            if($_POST['email'] == $admin['email'] and $_POST['password'] == $admin['password']){
                $_SESSION['login'] = true;
                header('location:dashboard');
            }else $_SESSION['login'] = false;
    }
}
?>