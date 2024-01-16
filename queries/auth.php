<?php
require("connectdb.php");
require("session.php");

// Подготовка запроса SELECT с подстановкой параметров
$stmt = mysqli_prepare($connect, "SELECT * FROM users WHERE login=? AND password=?");
mysqli_stmt_bind_param($stmt, "ss", $_POST["login"], md5($_POST["password"]));
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result || mysqli_num_rows($result) == 0) {
    header("Location: ../signin.php?error=1");
    exit;
}

session_start();
$_SESSION["user"] = mysqli_fetch_assoc($result);

header("Location: ../index.php?id=".$_SESSION["user"]["id"]);

?>