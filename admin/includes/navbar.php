<?php
session_start();
?>
<nav class="navbar nav-item dropdown">
    <a href="#home" class="nav-logo">Logo</a>
    <div class="nav-items">
     
      <?php 
        if(isset($_SESSION['auth_admin'])) {
      ?>    
            <a href="home.php">Home</a>
            <a href="Aboutus.php">Aboutus</a>
            <a href="../logout.php">Logout</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="../logout.php">Logout <?= $_SESSION['auth_admin_data']['name'] ?></a>
      <?php
        } else {
      ?>
            <a href="../register.php">Register</a>
            <a href="../login.php">Login</a>
      <?php
        }
      ?>
      
    </div>
</nav>
        <?php include('sidebar.php'); ?>
      </main>
        <?php include('footer.php'); ?>