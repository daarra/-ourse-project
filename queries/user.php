<?php
include 'connectdb.php';
include 'session.php';
$userId = $_SESSION["user"]["id"];
$result = mysqli_query($connect, "SELECT users.name AS name,roles.name AS role, login FROM users JOIN roles ON roles.id = users.role_id WHERE users.id='$userId'");
if ($result && mysqli_num_rows($result) > 0) { 
  $user = mysqli_fetch_assoc($result);
  $userName = $user['name'];
  $userRole = $user['role'];
  $userLogin = $user['login'];
}
?>