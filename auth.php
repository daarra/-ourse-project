<?php
require("connectdb.php");

$result = mysqli_query($connect, "SELECT * FROM users WHERE
    login='".$_POST["login"]."' AND
    password='".md5($_POST["password"])."'
");

//echo $_POST["login"];
//echo md5($_POST["password"]);

if(!$result || mysqli_num_rows($result) == 0){
    header("Location: error_signup.php");
    exit;
}

session_start();
$_SESSION["user"] = mysqli_fetch_assoc($result);

header("Location: user.php?id=".$_SESSION["user"]["id"]);

?>