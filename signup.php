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
            <a class="nav-link active" aria-current="page" href="#">Инструменты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Датасеты</a>
          </li>
        </ul>
        <form class="d-flex">
          <?php
          session_start();
          if (!empty($_SESSION['a'])) {
          ?>
          <a href="profile.php"><button class="btn btn-custom" type="button">Личный кабинет</button></a>
          <?php
          } else {
           ?>
          <a href="signup.php"><button class="btn btn-custom" type="button">Войти в личный кабинет</button></a>
        <?php
        }
        ?>
      </form>
      </div>
    </div>
  </nav>
</header>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="text-center">
        <h2 class="featurette-heading">Авторизируйтесь, чтобы попасть в личный кабинет</h2>
        <p class="lead">Если Вы впервые оказались на нашем сайте, то, пожалуйста, пройдите регистрацию.</p>
      </div>
    </div>
  </div>
  
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <form method="POST" action="auth.php">
        <div class="form-group">
          <label for="login" class="lead">Логин</label>
          <input type="text" class="form-control" id="login" name="login" style="border-radius: 0;">
        </div>
        
        <div class="form-group">
          <label for="password" class="lead">Пароль</label>
          <input type="password" class="form-control" id="password" name="password" style="border-radius: 0;">
        </div>
        
        <div class="text-center mt-4">
         <div class="d-block">
          <button type="submit" class="btn btn-custom btn-lg rounded-1">Войти в профиль</button>
         </div>
          <div class="d-block mt-4">
            <a href="signup.php" class="btn btn-custom1 btn-lg rounded-1">Регистрация</a>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

<?php
require("connectdb.php");
//require("session.php");

if (!empty($_POST)) {
    $result = mysqli_query($connect, "SELECT * FROM users WHERE login=\"" . $_POST['login'] . "\"");
    //echo mysqli_num_rows($result);
    if (mysqli_num_rows($result) == 0) {
        mysqli_query(
            $connect,
            "INSERT INTO users (name, login, password) VALUES (
            \"" . $_POST["name"] . "\", 
            \"" . $_POST["login"] . "\",
            \"" . md5($_POST["password"]) . "\"
            )"
        );
    }
    $results = mysqli_query($connect, "SELECT * FROM users WHERE login=\"" . $_POST['login'] . "\"");
    session_start();
    $_SESSION["user"] = mysqli_fetch_assoc($results);

    header("Location: user.php?id=" . $_SESSION["user"]["id"]);
}

?>
