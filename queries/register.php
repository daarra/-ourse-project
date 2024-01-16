<?php
require("connectdb.php");

if (!empty($_POST)) {
    $login = $_POST['login'];

    // Подготовка запроса SELECT
    $stmt = mysqli_prepare($connect, "SELECT * FROM users WHERE login=?");
    mysqli_stmt_bind_param($stmt, "s", $login);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        header("Location: ../signup.php?error=1");
        return;
    }

    $name = $_POST["name"];
    $password = md5($_POST["password"]);

    // Подготовка запроса INSERT
    $stmt = mysqli_prepare($connect, "INSERT INTO users (name, login, password, role_id) VALUES (?, ?, ?, 2)");
    mysqli_stmt_bind_param($stmt, "sss", $name, $login, $password);
    mysqli_stmt_execute($stmt);

    // Подготовка запроса SELECT для получения вставленной записи
    $stmt = mysqli_prepare($connect, "SELECT * FROM users WHERE login=?");
    mysqli_stmt_bind_param($stmt, "s", $login);
    mysqli_stmt_execute($stmt);
    $results = mysqli_stmt_get_result($stmt);
    
    if ($results && mysqli_num_rows($results) > 0) {
        session_start();
        $_SESSION["user"] = mysqli_fetch_assoc($results);

        header("Location: ../index.php?id=".$_SESSION["user"]["id"]);
    }
}
