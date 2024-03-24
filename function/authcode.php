<?php include('../config/db.php'); ?>
<?php
session_start();
if(isset($_POST['register_btn'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $cpassword= mysqli_real_escape_string($conn,$_POST['cpassword']);
    $role = $_POST['role'];

    $check_duplicate_email_qurey="select * from users where email='$email'";
    $checkemail_res=mysqli_query($conn,$check_duplicate_email_qurey);
    if(mysqli_num_rows($checkemail_res)>0){
        $_SESSION['message']="this email is already exist";
        header('Location: ../register.php');
    }
    else{
        if($password==$cpassword)
        {
            $sql_query="INSERT INTO users (name,email,phone,password,role) values('$name','$email','$phone','$password','$role')";
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
        $role_login = $_POST['role'];
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password= mysqli_real_escape_string($conn,$_POST['password']);

        $login_check_query="select * from users where email='$email' and password='$password' and role=1 ";
        $login_check_res= mysqli_query($conn,$login_check_query);
        $login_check_query_user= "select * from users where email='$email' and password='$password' and role=0";
        $login_check_res_user= mysqli_query($conn,$login_check_query_user);


        if(mysqli_num_rows($login_check_res)>0 ){
            $_SESSION['auth_admin']=true;
            $admindata=mysqli_fetch_array($login_check_res);
            $admin_name=$admindata['name'];
            $admin_email=$admindata['email'];
            $role=$admindata['role'];
            $password_fetched= $admindata['password'];
            $_SESSION['auth_admin_data']=
            [
                'name'=>$admin_name,
                'email'=>$admin_email
            ];
            
                $_SESSION['message']="you are about to loged in for admin";
                    header('Location: ../admin/home.php');
        }           
                
                
        else if(mysqli_num_rows($login_check_res_user)>0){
                    $_SESSION['auth_user']=true;
                    $userdata=mysqli_fetch_array($login_check_res_user);
                    $user_name=$userdata['name'];
                    $user_email=$userdata['email'];
                    $role=$userdata['role'];
                    $user_password_fetched= $userdata['password'];
                    $_SESSION['auth_user_data']=
                    [
                        'name'=>$user_name,
                        'email'=>$user_email
                    ];
                    $_SESSION['message']= "you are about to logged in for users";
                    header('Location: ../home.php');

            }

            else{
                $_SESSION['messsage']="invalid credential";
                header('Location: ../login.php');
            }
    }
?>