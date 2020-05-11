<?php
    session_start();
    unset($_SESSION['user']);
    setcookie('auth', '', time()-1, '/', null, false, true);
    header("Location: index.php");
?>

