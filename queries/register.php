<?php
require("connectdb.php");
//require("session.php");

if (!empty($_POST)) {
    $result = mysqli_query($connect, "SELECT * FROM users WHERE login=\"" . $_POST['login'] . "\"");
    //echo mysqli_num_rows($result);
    if (mysqli_num_rows($result) == 0) {
        mysqli_query(
            $connect,
            "INSERT INTO users (name, login, password) VALUES (
            \"" . $_POST["name"] . "\", 
            \"" . $_POST["login"] . "\",
            \"" . md5($_POST["password"]) . "\"
            )"
        );
    }
    $results = mysqli_query($connect, "SELECT * FROM users WHERE login=\"" . $_POST['login'] . "\"");
    session_start();
    $_SESSION["user"] = mysqli_fetch_assoc($results);

    header("Location: user.php?id=" . $_SESSION["user"]["id"]);
}
