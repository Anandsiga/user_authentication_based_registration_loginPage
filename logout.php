<?php 
    session_start();
if(isset($_SESSION['auth_user'])){
    unset($_SESSION['auth_user']);
    unset($_SESSION['auth_user_data']);
}
elseif(isset($_SESSION['auth_admin'])){
    unset($_SESSION['auth_admin']);
    unset($_SESSION['auth_admin_data']);
}
header('Location: index.php');

?>
