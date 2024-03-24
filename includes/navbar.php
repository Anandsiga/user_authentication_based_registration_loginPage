<?php
session_start();
?>
<nav class="navbar nav-item dropdown">
    <?php if(isset($_SESSION['auth_user'])){ ?>
      <a href="home.php" class="nav-logo">BrightWay</a>
   <?php } ?>

    <div class="nav-items">
     
      <?php 
        if(isset($_SESSION['auth_user'])) {
      ?>    
           
            <a href="logout.php">Logout</a>
            <a href="service.php">Services</a>
            <a href="about.php">About</a>
            <a href="#contact">Contact</a>
            <a href="home.php">Home</a>
            
            <a href="logout.php">Logout <?= $_SESSION['auth_user_data']['name'] ?></a>
      <?php
        } else {
      ?>
            
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
            <a href="index.php">Home</a>
      <?php
        }
      ?>
      
    </div>
</nav>
