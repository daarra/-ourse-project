<?php
require("./queries/connectdb.php");

$id = mysqli_real_escape_string($connect, $_POST['id']);
$title = mysqli_real_escape_string($connect, $_POST['title']);


$updateQuery = "UPDATE cluster_segmentation SET title = '$title' WHERE id = $id";


if (mysqli_query($connect, $updateQuery)) {
    header("Location: data.php");
    exit;
} else {
    echo "Ошибка при обновлении значения: " . mysqli_error($connect);
}


?>
