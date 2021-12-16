<?php session_start(); ?>

<h1>
    welcome
    <?php echo $_SESSION["username"];?>
</h1>


<a href="logout.php">logout!</a>