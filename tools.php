<!-- HEADER -->
<?php require("./elements/header.php") ?>
<main>

<div class="carousel-inner">
  <div class="carousel-item active">
  <img src="img/tools.png" class="img-fluid d-none d-lg-block" alt="Фотография1-Большие устройства">
    <img src="img/slide.png" class="img-fluid d-lg-none" alt="Фотография1-Маленькие устройства">
    <div class="container">
      <div class="carousel-caption text-start" style="color: grey;">
        <h1 class="mb-2">Этот раздел предназначен для ознакомления с информацией об инструментах для работы с данными.</h1>
        <p class="mb-4">Если у Вас останутся вопросы по изложенному материалу, то будем рады ответить на них в комментариях к статье.</p>
      </div>
    </div>
  </div>
  </main>
<?php
require("./queries/connectdb.php");

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
        echo "<p class=\"card-text\">" . $row["brief"] . "</p>";
        
        // Ссылка на страницу с ID
        echo "<a href=\"page.php?id=" . $row["id"] . "\" class=\"btn btn-custom\">";
        echo "Перейти к статье";
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

    <?php require("./elements/footer.php") ?>
</body>
</html>
