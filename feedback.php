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
  <div class="container pt-2">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="text-center">
          <h2 class="featurette-heading">Заполните форму для обратной связи</h2>
        </div>
      </div>
    </div>
  
  <div class="row justify-content-center">
    <div class="col-lg-6">
    <form name="log_in" action="process_form.php" enctype="multipart/form-data" method="post" class="form">
        <div class="form-group">
          <label for="name" class="lead">ФИО:</label>
          <input type="text" class="form-control" id="name" name="name" style="border-radius: 0;">
        </div>

        <div class="form-group">
            <label for="email" class="lead">Email:</label>
            <input type="email" class="form-control" id="email" name="email" tyle="border-radius: 0;">
        </div>

        <div class="form-group">
            <label class="form-label">Откуда узнали о нас:</label>
            <div class="form-check">
                <input type="radio" id="radio1" name="source" value="radio1" required class="form-check-input">
                <label for="radio1" class="form-check-label">Реклама</label>
            </div>
            <div class="form-check">
                <input type="radio" id="radio2" name="source" value="radio2" required class="form-check-input">
                <label for="radio2" class="form-check-label">Рекомендация</label>
            </div>
            <div class="form-check">
                <input type="radio" id="radio3" name="source" value="radio3" required class="form-check-input">
                <label for="radio3" class="form-check-label">СМИ</label>
            </div>
        </div>
        
        <div class="form-group">
        <label for="type" class="form-label">Тип обращения:</label>
            <select id="type" name="type" required class="form-select">
                <option value="" selected disabled>Выберите тип</option>
                <option value="complaint">Жалоба</option>
                <option value="suggestion">Предложение</option>
            </select>
        </div>

        <div class="form-group">
        <label for="message" class="form-label">Текст сообщения:</label>
            <textarea id="message" name="message" rows="5" required class="form-control"></textarea>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" id="consent" name="consent" required class="form-check-input">
            <label for="consent" class="form-check-label">Даю согласие на обработку персональных данных</label>
        </div>

        <button type="submit" class="btn btn-lg btn-custom">Отправить</button>
    </form>
</div>
</main>


<footer class="footer text-center custom-bg-color mt-5 py-2 fixed-bottom">
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
                <a href="#!" class="btn  btn-social mx-1"><img src="img/f_logo.svg" alt="Facebook"></a>
                <a href="#!" class="btn  btn-social mx-1"><img src="img/tw_logo.svg" alt="Twitter"></a>
                <a href="#!" class="btn  btn-social mx-1"><img src="img/t_logo.svg" alt="Telegram"></a>
            </div>
            <div class="col-lg-4">
                <p class="lead mb-4">
                    У вас есть предложения или вопросы?
                </p>
        
                <p><a class="btn btn-lg btn-custom" href="feedback.php">Обратная связь</a></p>
            </div>
        </div>
    </div>
    <div class="copyright py-4 text-center text-white custom-bg-color1 ">
    <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script>, data insights</p>
    <div class="container"><small>Для приложения были использованы данные, предоставленные порталом: <a href="https://ai.mos.ru/">https://ai.mos.ru/</a></small></div>
</div>
</footer>
      
  </body>
</html>
