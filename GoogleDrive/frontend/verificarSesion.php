<?php
    session_start();
    if (!isset($_SESSION["token"]))
        header("Location: cerrarSesion.php");
    if (!isset($_COOKIE["token"]))
        header("Location: cerrarSesion.php");
    if ($_SESSION["token"] != $_COOKIE["token"])
        header("Location: cerrarSesion.php");
?>