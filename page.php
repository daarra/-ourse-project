<?php require("./elements/header.php"); ?>
<main>
<?php
require("./queries/info.php");
    // Проверяем, авторизован ли пользователь
    
    ?>
  <div class="container">
    <div class="text-center text-justify">
      <h2 class="featurette-heading"><?php echo $row['title']; ?></h2>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="mb-3">
          <h4><?php echo $row['brief']; ?></h4>
        </div>
        <div class="mb-3">
          <p><?php echo $row['content']; ?></p>
        </div>
      </div>
    </div>
  </div>
  

  <div class="text-center mb-5">
    <h1 class="featurette-heading">Комментарии</h1>
  </div>
  <?php include './queries/old_comments.php'; ?>


  <?php if(isset($_SESSION["user"])) { ?>
  <div class="row justify-content-center">
  <div class="col-lg-6" style="margin-top: 20px;">
    <form method="POST" action="./queries/comments.php">
    <input type="hidden" name="page_id" value="<?php echo $_GET['id']; ?>">
      <div class="form-group">
        <label for="name" class="lead">ФИО</label>
        <input type="text" class="form-control" id="name" name="name" style="border-radius: 0;" required>
      </div>

      <div class="form-group">
        <label for="text" class="lead">Текст комментария</label>
        <textarea class="form-control" id="text" name="text" rows="4" style="border-radius: 0;" required></textarea>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="btn btn-custom btn-lg rounded-1">Отправить отзыв</button>
      </div>
    </form>
  </div>
</div>


<?php } else {
        echo '<div class="container">';
        echo '<div class="featurette text-center">';
        echo '<h2 class="featurette-heading">Авторизируйтесь, чтобы оставлять отзывы</h2>';
        echo '</div>';
        echo '</div>';
    }
?>
</main>
<?php require("./elements/footer.php"); ?>
</body>
</html>
