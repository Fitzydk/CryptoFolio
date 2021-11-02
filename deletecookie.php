<?php
    setcookie("user", "", time() - (86400 * 30), "/");
    header("location: register.php")
?>