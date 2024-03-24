<?php  
include('includes/header.php'); 
if(isset($_SESSION['auth_user'])){
    $_SESSION['message']="you are already logged in";
    header('Location: home.php');
}
elseif(isset($_SESSION['auth_admin'])){
    $_SESSION['message'] = "You are allready logged in to admin";
    header('Location: admin/home.php');
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <?php if(isset($_SESSION['message'])) {?>
                <h1> put here alert message</h1>
            <?php } ?>
            <div class="card">
                <div class="card-header">Registration from</div>
                <div class="card-body">
                <form action="function/authcode.php" method="POST">
                    <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" placeholder="enter your name" name="name">
                    </div>
                    
                    <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" placeholder="enter you email" name="email">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="text" placeholder="enter you password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="cpassword">Re-Password</label>
                        <input type="text" placeholder="Rewrite the password" name="cpassword">
                    </div>

                    <select name="role" id="">
                        <option value="1">Admin</option>
                        <option value="0">User</option>
                    </select>

                    <button type="submit" name="register_btn">submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
            

<?php include('includes/footer.php'); ?>