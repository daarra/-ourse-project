<?php
require("connectdb.php");

// Получение комментариев для определенной страницы по ее ID
$pageId = $_GET['id'];

$query = "SELECT * FROM comments WHERE page_id = ? ORDER BY id DESC";
$stmt = $connect->prepare($query);
$stmt->bind_param('i', $pageId);
$stmt->execute();
$result = $stmt->get_result();

// Отображение комментариев на странице
while ($row = $result->fetch_assoc()) {
    echo "<div class='comment'>";
    echo "<p class='comment-name'>" . $row['username'] . "</p>";
    echo "<p class='comment-text'>" . $row['text'] . "</p>";
    echo "</div>";
}

$stmt->close();
$connect->close();
?>
