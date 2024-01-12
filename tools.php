<!-- HEADER -->
<?php require("./elements/header.php") ?>
<main>
    <?php
require("connectdb.php");

// Выполнение запроса
$sql = "SELECT * FROM pages";
$result = $connect->query($sql);

// Вывод результатов
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Оформление контейнера каждой записи с отступом от хедера
        echo "<div class=\"card mt-3\">";
        echo "<div class=\"card-body\">";
        
        // Заголовок
        echo "<h2 class=\"card-title\">" . $row["title"] . "</h2>";
        
        // Содержимое
        echo "<p class=\"card-text\">" . $row["content"] . "</p>";
        
        // Ссылка на страницу с ID
        echo "<a href=\"page.php?id=" . $row["id"] . "\" class=\"btn btn-primary\">";
        echo "Author: " . $row["user_id"];
        echo "</a>";
        
        echo "</div>";
        echo "</div>";
        
        // Пустая строка для разделения записей
        echo "<br>";
    }
} else {
    echo "No results found.";
}


$connect->close();

?>
    </main>
</body>
</html>
