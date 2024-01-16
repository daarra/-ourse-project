<?php
require("connectdb.php");

// Выполняем запрос к базе данных
$result = mysqli_query($connect, "SELECT * FROM data LIMIT 10");

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
} else {
    echo 'Датасет не найден';
}

mysqli_close($connect);
?>
