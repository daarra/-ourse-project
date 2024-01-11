<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Инструменты для обработки и анализа многомерных данных.">
    <title>Инструменты для анализа данных</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    
<header>
<nav class="navbar navbar-expand-xl navbar-dark fixed-top custom-bg-color custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">data insights</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Переключить навигацию">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="tools.php">Инструменты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="data.php">Датасеты</a>
          </li>
        </ul>
        <form class="d-flex">
          <?php
          session_start();
          if (!empty($_SESSION['user'])) {
          ?>
          <a href="profile.php"><button class="btn btn-custom" type="button">Личный кабинет</button></a>
          <?php
          } else {
           ?>
          <a href="signin.php"><button class="btn btn-custom" type="button">Войти в личный кабинет</button></a>
        <?php
        }
        ?>
      </form>
      </div>
    </div>
  </nav>
</header>

<main>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
   <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color: gray;"></button>
   <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: gray;"></button>
   <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" style="background-color: gray;"></button>
</div>

<div class="carousel-inner">
  <div class="carousel-item active">
  <img src="img/carousel_1.png" class="img-fluid d-none d-lg-block" alt="Фотография1-Большие устройства">
    <img src="img/slide.png" class="img-fluid d-lg-none" alt="Фотография1-Маленькие устройства">
    <div class="container">
      <div class="carousel-caption text-start" style="color: gray;">
        <h1 class="mb-2">Аналитика данных занимается</h1>
        <p class="mb-4">большими данными, которые можно обрабатывать и анализировать с применением математического аппарата.</p>
      </div>
    </div>
  </div>
  <div class="carousel-item">
    <img src="img/slide.png" class="d-block w-100 d-md-none" alt="Фотография2-Маленькие устройства">
    <img src="img/carousel_2.png" class="d-block w-100 d-md-block" alt="Фотография2-Большие устройства">
    <div class="container">
      <div class="carousel-caption" style="color: gray;">
        <h1 class="mb-2">Аналитика данных применяется,</h1>
        <p class="mb-4">когда нужно собрать, обработать и проанализировать значительный объем данных. Это помогает представить информацию в наглядном виде и сделать выводы.</p>
      </div>
    </div>
  </div>
  <div class="carousel-item">
  <img src="img/carousel_3.png" class="img-fluid d-none d-lg-block" alt="Фотография1-Большие устройства">
    <img src="img/slide.png" class="img-fluid d-lg-none" alt="Фотография1-Маленькие устройства">
    <div class="container">
      <div class="carousel-caption text-end" style="color: gray;">
        <h1 class="mb-2">Для аналитики данных существует </h1>
        <p class="mb-1">множество инструментов, выбор которых зависит от конкретных потребностей.</p>
        <p class="mb-4">Мы предлагаем ознакомиться с некоторыми из них.</p>
        <p><a class="btn btn-lg btn-custom" href="tools.php">Инструменты</a></p>
      </div>
    </div>
  </div>
</div>


    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev" style="margin-right: 5px;">
      <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
      <span class="visually-hidden" >Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next" style="margin-right: 5px;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Следующий</span>
    </button>
  </div>

<div class="text-center">
  <h2 class="featurette-heading">Добро пожаловать! <span class="text-muted">Вы попали в пространство data insights</span></h2>
  <p class="lead">На нашем сайте Вы сможете ознакомиться с некоторыми инструментами для работы с данными.</p>
</div>


<footer class="footer text-center custom-bg-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="mb-4">Контакты</h4>
                <p class="lead mb-0">
                    <strong>Данилкина Дарья Александровна</strong> <br>
                    d.a.danilkina@stud.mospolytech.ru
                </p>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="mb-4">Наше сообщество</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
            </div>
            <div class="col-lg-4">
                <h4 class="mb-4">Оставить обратную связь</h4>
                <p class="lead mb-4">
                    У вас есть предложения или вопросы?
                </p>
                <h4 class="mb-4">Вернуться в начало страницы</h4>
            </div>
        </div>
    </div>
</footer>
<div class="copyright py-4 text-center text-white custom-bg-color1">
    <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script>, data insights</p>
    <div class="container"><small>Для приложения были использованы данные, предоставленные порталом: <a href="https://ai.mos.ru/">https://ai.mos.ru/</a></small></div>
</div>

</main>
      
  </body>
</html>
