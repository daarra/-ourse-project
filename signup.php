<?php require("./elements/header.php") ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="text-center">
        <h2 class="featurette-heading">Пройдите регистрацию, чтобы попасть в личный кабинет</h2>
      </div>
    </div>
  </div>
  
  <div class="row justify-content-center">
    <div class="col-lg-6" style="margin-top: 20px;">
      <form method="POST" action="register.php">
        <div class="form-group">
          <label for="name" class="lead">ФИО</label>
          <input type="text" class="form-control" id="name" name="name" style="border-radius: 0;">
        </div>
        
        <div class="form-group">
          <label for="login" class="lead">Логин</label>
          <input type="login" class="form-control" id="login" name="login" style="border-radius: 0;">
        </div>

        <div class="form-group">
          <label for="password" class="lead">Пароль</label>
          <input type="password" class="form-control" id="password" name="password" style="border-radius: 0;">
        </div>
        
        <div class="text-center mt-4">
          <div class="d-block">
            <a href="user.php" class="btn btn-custom1 btn-lg rounded-1">Зарегистироваться</a>
          </div>
          <div style="margin-bottom: 80px;"></div>
        </div>

      </form>
    </div>
  </div>
</div>
<?php require("./elements/footer.php") ?>

