<?php require("./elements/header.php") ?>

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

<?php require("./elements/footer.php") ?>


