<?php
require("connectdb.php");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Получение данных из формы
$userName = $_POST['name'];
$text = $_POST['text'];
$pageId = $_POST['page_id'];

$query = "INSERT INTO comments (page_id, username, text) VALUES (?, ?, ?)";
$stmt = $connect->prepare($query);
$stmt->bind_param('iss', $pageId, $userName, $text);
$stmt->execute();

if ($stmt) {
    header("Location: ../page.php?id=" . $pageId);
    exit();
} else {
    echo "Ошибка: " . $stmt->error;
}

$stmt->close();
$connect->close();
?>
