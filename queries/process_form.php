<?php
require("connectdb.php");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Получение данных из формы
$name = $_POST["name"];
$email = $_POST["email"];
$source = $_POST["source"];
$type = $_POST["type"];
$message = $_POST["message"];

// Готовим запрос для вставки данных в базу данных
$sql = "INSERT INTO formdata (name, email, source, type, message)
        VALUES ('$name', '$email', '$source', '$type', '$message')";

if ($connect->query($sql) === TRUE) {
    header("Location: ../success_page.php");
    exit();    
} else {
    echo "Ошибка: " . $sql . "<br>" . $connect->error;
}

$connect->close();
?>