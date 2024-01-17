<?php
require("connectdb.php");
// Запрос для выборки данных с использованием LIMIT и OFFSET
$result = mysqli_query($connect, "SELECT * FROM centroids");

if (mysqli_num_rows($result) > 0) {
    // Создание HTML-таблицы и заголовков столбцов с CSS классами
    echo '<table class="dataset-table">';
    echo '<tr><th class="header-cell text-center">ID</th><th class="header-cell text-center">X</th><th class="header-cell text-center">Y</th><th class="header-cell text-center">Z</th></tr>';


    // Вывод данных в таблицу
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td class="data-cell">' . $row['id'] . '</td>';
        echo '<td class="data-cell">' . $row['x'] . '</td>';
        echo '<td class="data-cell">' . $row['y'] . '</td>';
        echo '<td class="data-cell">' . $row['z'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'Данные не найдены';
}
mysqli_close($connect);
?>
