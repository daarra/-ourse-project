<?php
require("connectdb.php");
require("session.php");

$result = mysqli_query($connect, "SELECT * FROM users WHERE
    login='".$_POST["login"]."' AND
    password='".md5($_POST["password"])."'
");

//echo $_POST["login"];
//echo md5($_POST["password"]);

if(!$result || mysqli_num_rows($result) == 0){
    header("Location: ../signin.php?error=1");
    exit;
}

session_start();
$_SESSION["user"] = mysqli_fetch_assoc($result);

header("Location: ../profile.php?id=".$_SESSION["user"]["id"]);

?>