<?php  
       session_start();
      include 'layouts/header.html'
?>
<nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
    <div class="container">
        <!-- Brand -->
        <a href="products.php" class="navbar-brand">
            <h1 class="h4 mb-0 text-uppercase">The company</h1>    
        </a>

        <!-- Link -->
        <ul class="navbar-nav">
            <li class="nav-item"><a href="./dashboard.php" class="nav-link">Dashboard</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="Edit-user.php" class="nav-link fw-bold"><?= $_SESSION['username'] ?> </a></li>
            <li class="nav-item"> <a href="Sign-in.php" class="nav-link">Logout</a></li>
        </ul>
    </div>
</nav>