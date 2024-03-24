<?php include('includes/header.php');
if(!isset($_SESSION['auth_admin'])){
    $_SESSION['message']= "1st you login to admin";
    header('Location: ../login.php');
}
elseif(isset($_SESSION['auth_user'])){
    $_SESSION['message']= "you are not autherized to access this area";
    header('Location: ../home.php');
}


?>
<h3>Home page</h3>
<?php include('includes/footer.php'); 
?>