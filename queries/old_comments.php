<?php
require("connectdb.php");

// Получение комментариев для определенной страницы по ее ID
$pageId = $_GET['id'];

$query = "SELECT * FROM comments WHERE page_id = ? ORDER BY id DESC";
$stmt = $connect->prepare($query);
$stmt->bind_param('i', $pageId);
$stmt->execute();
$result = $stmt->get_result();
?>

<div class="container-md  style="max-width: 20rem;>
  <?php
  while ($row = $result->fetch_assoc()) {
    echo '<div class="card comment mb-3">';
    echo '<div class="card-body p-2">';
    echo '<h5 class="card-title">' . $row['username'] . '</h5>';
    echo '<p class="lead">' . $row['text'] . '</p>';
    echo '</div>';
    echo '</div>';
  }
  ?>
</div>

<?php
$stmt->close();
$connect->close();
?>
