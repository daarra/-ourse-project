<?php
require("connectdb.php");
// Запрос для выборки данных с использованием LIMIT и OFFSET
$result = mysqli_query($connect, "SELECT centroids.id, centroids.x, data1.value, centroids.y, data2.value AS val, centroids.z
FROM centroids
JOIN dictionary_starlurl AS data1 ON centroids.x = data1.cod
JOIN dictionary_endurl AS data2 ON centroids.x = data2.cod");

if (mysqli_num_rows($result) > 0) {
    // Создание HTML-таблицы и заголовков столбцов с CSS классами
    echo '<table class="dataset-table">';
    echo '<tr><th class="header-cell text-center">ID</th><th class="header-cell text-center">Числовая метка</th><th class="header-cell text-center">Страница входа</th><th class="header-cell text-center">Y</th><th class="header-cell text-center">Страница выхода</th><th class="header-cell text-center">Количество просмотренных страниц</th></tr>';

    // Вывод данных в таблицу
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td class="data-cell">' . $row['id'] . '</td>';
    echo '<td class="data-cell">' . $row['x'] . '</td>';
    echo '<td class="data-cell">' . $row['value'] . '</td>';
    echo '<td class="data-cell">' . $row['y'] . '</td>';
    echo '<td class="data-cell">' . $row['val'] . '</td>';
    echo '<td class="data-cell">' . $row['z'] . '</td>';
    echo '</tr>';
}

    echo '</table>';
} else {
    echo 'Данные не найдены';
}
