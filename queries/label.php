<?php
require("connectdb.php");

if (isset($_GET['type']) && $_GET['type'] == 'data' && isset($_GET['label'])) {
    $selectedLabel = $_GET['label'];

  
    // Запрос к базе данных для извлечения информации
    $dataQuery = "SELECT * FROM data WHERE label = '$selectedLabel' ORDER BY RAND() LIMIT 10";
    $dataResult = mysqli_query($connect, $dataQuery);

    if (mysqli_num_rows($dataResult) > 0) {
        echo '<table class="dataset-table">';
        echo '<colgroup>';
        echo '<col style="width: auto;">'; // ID столбца
        echo '<col style="width: auto;">'; // Время посещения
        echo '<col style="width: auto;">'; // Страница входа
        echo '<col style="width: auto;">'; // Страница выхода
        echo '<col style="width: auto;">'; // Количество просмотренных страниц
        echo '</colgroup>';
        echo '<thead>';
        echo '<tr>';
        echo '<th class="header-cell">ID</th>';
        echo '<th class="header-cell">Время посещения</th>';
        echo '<th class="header-cell">Страница входа</th>';
        echo '<th class="header-cell">Страница выхода</th>';
        echo '<th class="header-cell">Количество просмотренных страниц</th>';
        echo '</tr>';
        echo '</thead>';

        echo '<tbody>';
        while ($row = mysqli_fetch_assoc($dataResult)) {
            echo '<tr>';
            echo '<td class="data-cell">' . $row['id'] . '</td>';
            echo '<td class="data-cell">' . $row['start_url'] . '</td>';
            echo '<td class="data-cell">' . $row['end_url'] . '</td>';
            echo '<td class="data-cell">' . $row['page_views'] . '</td>';
            echo '<td class="data-cell">' . $row['visit_duration'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';

        echo '</table>';

    } else {
        echo 'Нет данных для выбранного значения label.';
    }
}

mysqli_close($connect);
?>
