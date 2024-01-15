<?php require("./elements/header.php"); ?>
<main>
<?php
require("./queries/connectdb.php");

if (!isset($_GET['id'])) {
  echo "Укажите id статьи.";
  exit;
}

$id = mysqli_real_escape_string($connect, $_GET['id']);

$result = mysqli_query($connect, "SELECT * FROM pages WHERE id='$id'");

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  
  foreach ($row as $key => $value) {
    echo $key . ": " . $value . "<br>";
  }
} else {
  echo "Статьи с указанным id не найдено.";
}

mysqli_close($connect);
?>



</main>
<?php require("./elements/footer.php"); ?>
</body>
</html>