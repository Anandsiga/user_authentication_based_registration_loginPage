<?php include('../config/db.php'); ?>
<?php
session_start();
if(isset($_POST['register_btn'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $cpassword= mysqli_real_escape_string($conn,$_POST['cpassword']);

    $check_duplicate_email_qurey="select * from users where email='$email'";
    $checkemail_res=mysqli_query($conn,$check_duplicate_email_qurey);
    if(mysqli_num_rows($checkemail_res)>0){
        $_SESSION['message']="this email is already exist";
        header('Location: ../register.php');
    }
    else{
        if($password==$cpassword)
        {
            $sql_query="INSERT INTO users(name,email,phone,password) values('$name','$email','$phone','$password')";
            $insert_query_res= mysqli_query($conn,$sql_query);
            if($insert_query_res)
            {
                $_SESSION['message']="registered successfully";
                header('Location: ../login.php');
            }
            else{
                $_SESSION['message']="something went wrong";
                header('Location: ../register.php');
            }
        }
        else{
            $_SESSION['message']="Don't match the password that you have entered";
            header('Location: ../register.php');
        }
    }

    }

else if(isset($_POST['login_btn'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);

        $login_check_query="select * from users where email='$email' and password='$password'";
        $login_check_res= mysqli_query($conn,$login_check_query);


        if(mysqli_num_rows($login_check_res)>0){
            $_SESSION['auth']=true;
            $userdata=mysqli_fetch_array($login_check_res);
            $user_name=$userdata['name'];
            $email=$userdata['email'];
            $role=$userdata['role'];
            $_SESSION['auth_user']=
            [
                'name'=>$user_name,
                'email'=>$email
            ];
            if($role==1){
                $_SESSION['message']="you are about to loged in for admin";
                header('Location: ../admin/index.php');
            }
            else{
                $_SESSION['message']="you are about to loged in for users";
                header('Location: ../home.php');
            }

        }
        else{
            $_SESSION['messsage']="invalid credential";
            header('Location: ../login.php');
        }
    }
   
?>