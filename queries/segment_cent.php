<?php
require("connectdb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];

    // Здесь вы можете добавить код для обновления данных в таблице cluster_segmentation
    // Например:
    // mysqli_query($connect, "UPDATE cluster_segmentation SET title = '$title' WHERE id = $id");
}

// Запрос для выборки данных
$result = mysqli_query($connect, "SELECT * FROM cluster_segmentation");

if (mysqli_num_rows($result) > 0) {
    // Создание HTML-таблицы и заголовков столбцов с CSS классами
    echo '<table class="dataset-table">';
    echo '<tr><th class="header-cell text-center">ID</th><th class="header-cell text-center">Название кластера</th><th class="header-cell text-center">Действия</th></tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td class="data-cell">' . $row['id'] . '</td>';
        echo '<form method="POST" action="../change.php">';
        echo '<td class="data-cell"><input class="form-control" name="title" type="text" value="'.$row['title'].'"></td>';
        echo '<input type="hidden" name="id" value="'.$row['id'].'">';
        echo '<td class="data-cell"><button type="submit" class="btn btn-custom">Сохранить</button></td>';
        echo '</form>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo 'Данные не найдены';
}
?>
