<?php
if (!isset($_SESSION)) {
    session_start();
}

$session_user = (isset($_SESSION["user"])) ? $_SESSION["user"] : false;
?>
