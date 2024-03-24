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
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-primary text-white text-center">Login Form</h5>
                <div class="card-body">
                    <form action="function/authcode.php" method="POST">
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email" name="email">
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your password" name="password">
                        </div>

                        <select name="role" id="">
                            <option value="0">User</option>
                            <option value="1">Admin</option>
                        </select>


                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block" name="login_btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php'); ?>