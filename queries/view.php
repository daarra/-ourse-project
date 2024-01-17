<?php
require("connectdb.php");

// Определяем начальное значение start
$start = 0;
$limit = 10;

// Если была отправлена форма с параметром start
if (isset($_POST['start'])) {
    $start = (int)$_POST['start'];
}

// Выполняем запрос к базе данных с использованием LIMIT и OFFSET
$result = mysqli_query($connect, "SELECT * FROM data LIMIT $limit OFFSET $start");

if (mysqli_num_rows($result) > 0) {
    // Создаем HTML-таблицу и заголовки столбцов с CSS классами
    echo '<table class="dataset-table">';
    echo '<tr><th class="header-cell">ID</th><th class="header-cell">Время посещения</th><th class="header-cell">Страница входа</th><th class="header-cell">Страница выхода</th><th class="header-cell">Количество просмотренных страниц</th></tr>';

    // Выводим данные в таблицу со стилями
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td class="data-cell">' . $row['id'] . '</td>';
        echo '<td class="data-cell">' . $row['date'] . '</td>';
        echo '<td class="data-cell">' . $row['start_url'] . '</td>';
        echo '<td class="data-cell">' . $row['end_url'] . '</td>';
        echo '<td class="data-cell">' . $row['page_views'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    // Выводим кнопку для загрузки следующих записей, если есть еще записи
    if (mysqli_num_rows($result) == $limit) {
        $next_start = $start + $limit;
        echo '<form method="post" action="">';
        echo '<input type="hidden" name="start" value="' . $next_start . '">';
        echo '<button type="submit">Next</button>';
        echo '</form>';
    }
} else {
    echo 'Датасет не найден';
}

mysqli_close($connect);
?>