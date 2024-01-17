<?php
require("./queries/connectdb.php");

if (!isset($_GET['id'])) {
  echo "Укажите id статьи.";
  exit;
}

$id = mysqli_real_escape_string($connect, $_GET['id']);

$result = mysqli_query($connect, "SELECT * FROM pages WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if (!$row) {
  echo "Статьи с указанным id не найдено.";
  mysqli_close($connect);
  exit;
}

mysqli_close($connect);
