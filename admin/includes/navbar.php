<?php
session_start();
?>
<nav class="navbar nav-item dropdown">
    <a href="#home" class="nav-logo">Logo</a>
    <div class="nav-items">
     
      <?php 
        if(isset($_SESSION['auth'])) {
      ?>    
            <a href="home.php">Home</a>
            <a href="logout.php">Logout</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">dropdown</a>
            <ul class="dropdown-menu" arial-labellebdy="navbarDropdownMenuLink">
              <li><a href="logout.php" class="dropdown-item">Logout</a></li>
              <li><a href="home.php" class="dropdown-item">Home</a></li>
              <li><a href="" class="dropdown-item">Service</a></li>
              <li><a href="" class="dropdown-item">Contact</a></li>
            </ul>
            </li>
            <a href="logout.php">Logout <?= $_SESSION['auth_user']['name'] ?></a>
      <?php
        } else {
      ?>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
      <?php
        }
      ?>
      
    </div>
</nav>
