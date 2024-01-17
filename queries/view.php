<?php
require("connectdb.php");

// Количество записей на странице
$limit = 10;

// Определение текущей страницы
$currentPage = isset($_GET['start']) ? $_GET['start']/$limit + 1 : 1;

// Запрос для получения общего количества записей
$totalRecordsQuery = "SELECT COUNT(*) AS total FROM data";
$totalRecordsResult = mysqli_query($connect, $totalRecordsQuery);
$totalRecords = mysqli_fetch_assoc($totalRecordsResult)['total'];

// Вычисление общего количества страниц
$totalPages = ceil($totalRecords / $limit);

// Вычисление смещения для запроса
$start = ($currentPage - 1) * $limit;

// Запрос для выборки данных с использованием LIMIT и OFFSET
$result = mysqli_query($connect, "SELECT * FROM data LIMIT $limit OFFSET $start");

if (mysqli_num_rows($result) > 0) {
    // Создание HTML-таблицы и заголовков столбцов с CSS классами
    echo '<table class="dataset-table">';
    echo '<tr><th class="header-cell">ID</th><th class="header-cell">Время посещения</th><th class="header-cell">Страница входа</th><th class="header-cell">Страница выхода</th><th class="header-cell">Количество просмотренных страниц</th></tr>';

    // Вывод данных в таблицу
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td class="data-cell">' . $row['id'] . '</td>';
        echo '<td class="data-cell">' . $row['start_url'] . '</td>';
        echo '<td class="data-cell">' . $row['end_url'] . '</td>';
        echo '<td class="data-cell">' . $row['page_views'] . '</td>';
        echo '<td class="data-cell">' . $row['visit_duration'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    // Вывод пагинации
    echo '<nav aria-label="Page navigation">';
    echo '<ul class="pagination justify-content-center">';
    // Кнопка "Первая страница"
    if ($currentPage > 1) {
      echo '<li class="page-item"><a class="page-link" href="?start=0">Первая страница</a></li>';
    }

    // Кнопка "Предыдущая страница" 
    if ($currentPage > 1) {
      $prevPage = $currentPage - 1;
      echo '<li class="page-item"><a class="page-link" href="?start=' . (($prevPage - 1) * $limit) . '">Предыдущая</a></li>';
    }

    // Кнопка "Следующая страница"
    if ($currentPage < $totalPages) {
      $nextPage = $currentPage + 1;
      echo '<li class="page-item"><a class="page-link" href="?start=' . (($nextPage - 1) * $limit) . '">Следующая</a></li>';
    }
  
    // Кнопка "Последняя страница"
    if ($currentPage < $totalPages) {
      echo '<li class="page-item"><a class="page-link" href="?start=' . (($totalPages - 1) * $limit) . '">Последняя страница</a></li>';
    }
    
    echo '</ul>';
    echo '</nav>';
} else {
    echo 'Датасет не найден';
}

mysqli_close($connect);
?>
