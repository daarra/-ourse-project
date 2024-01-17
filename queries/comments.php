<?php
require("connectdb.php");


if (isset($_SESSION['user'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userId = $_SESSION['user']['id'];;
        $userName = $_POST['name'];
        $text = $_POST['text'];
        $pageId = $_POST['page_id'];

        
        $query = "INSERT INTO comments (page_id, username, text) VALUES (?, ?, ?)";
        $stmt = $connect->prepare($query);
        $stmt->bind_param('iss', $pageId, $userName, $text);
        $stmt->execute();
        
        
        if ($stmt) {
            header("Location: ".$_SERVER["PHP_SELF"]);
            exit;
        } else {
            echo $connect->error;
        }
        
    } else {
        echo "Недопустимый метод запроса.";
    }
} else {
    header("Location: ../page.php"); 
    exit;
}
?>
