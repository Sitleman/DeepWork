<?php
    require "db.php";
?>
<?php if (isset($_SESSION['logged_user'])) : ?>
    Авторизован!<br>
    Привет, <?php echo $_SESSION['logged_user']->login; ?>!
    <hr>
    <a href="logout.php">Выйти</a>
<?php else : ?>
    <a href="/login/login.php">Log in</a><br>
    <a href="/login/signup.php">Log up</a>
<?php endif; ?>