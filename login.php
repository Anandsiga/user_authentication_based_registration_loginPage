<?php include('includes/header.php'); ?>

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