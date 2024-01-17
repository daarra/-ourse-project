<?php require("./elements/header.php");
require("./queries/session.php");
?>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/data.png" class="img-fluid d-none d-lg-block" alt="Фотография1-Большие устройства">
            <img src="img/slide.png" class="img-fluid d-lg-none" alt="Фотография1-Маленькие устройства">
            <div class="container">
                <div class="carousel-caption text-end" style="color: grey;">
                    <h1 class="mb-2">Этот раздел предназначен для работы с датасетом.</h1>
                    <p class="mb-1">Обращаем Ваше внимание, что доступ разрешен только авторизированным пользователям.</p>
                </div>
            </div>
        </div>
    </div>
<main>
<?php
    // Проверяем, авторизован ли пользователь
    if(isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] > 2) {
    ?>
    <div class="container">
        <div class="featurette text-center">
            <h2 class="featurette-heading">Датасет "Визиты пользователь на портал mos.ru"</h2>
            <p class="lead">Данные о визитах пользователей на портал mos.ru. В рамках одного визита пользователь может производить несколько просмотров (ограничение – 500 просмотров). Каждая запись в датасете – характеристика одного визита на портал</p>
            <p class="lead">Так как данные представлены в текстовом формате, их необходимо перед кластеризацией перенести в технические числовые метки. Вы можете воспользоваться кнопкой "Сменить формат метки", чтобы посмотреть как выглядит датасет после обработки</p>
            <?php require("./queries/view.php"); ?>
            <p class="lead">Теперь попробуем провести кластеризацию данных, используя алгоритм k-means. За атрибуты будем брать время посещения пользователя на портале, количество просмотренных страниц и страницу входа</p>
            <p class="lead">Получаем следующий результат:</p>
            <div class="row">
  <div class="col-md-6">
    <figure>
      <img src="/img/k-means-15.png" alt="Изображение 1" class="img-fluid">
      <figcaption>Кластеризация на 15 кластеров</figcaption>
    </figure>
  </div>
    <div class="col-md-6">
      <figure>
        <img src="/img/k_means-8.png" alt="Изображение 2" class="img-fluid">
        <figcaption>Кластеризация на 8 кластеров</figcaption>
      </figure>
    </div>

    </div>

    <?php require("./queries/centroids.php"); ?>
    <p class="lead">Проанализируем значения, которые мы получили в процессе кластеризации:</p>
    <?php require("./queries/segment_cent.php"); ?>
          </div> <div style="margin-bottom: 20px;"></div>
      </div>
      <?php
      } else {
          echo '<div class="container">';
          echo '<div class="featurette text-center">';
          echo '<h2 class="featurette-heading">Вам отказано в доступе</h2>';
          echo '</div>';
          echo '</div>';
      }
      ?>
</main>

<?php require("./elements/footer.php"); ?>