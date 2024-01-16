<?php require("./elements/header.php") ?>
<main>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="text-center">
        <h2 class="featurette-heading">Личный кабинет</h2>
      </div>
    </div>
  </div>
</div>

<?php require("./queries/user.php") ?>
<div class="container" style='border: none; text-align: center;'>
    <div class="card " style='border: none;'>
      <div class="card-body">
        <h3 class="card-subtitle mb-2">Имя пользователя:</h3>
        <p class="card-text" style="font-size: 18px;"><?php echo $userName; ?></p>
        <h3 class="card-subtitle mb-2">Логин:</h3>
        <p class="card-text" style="font-size: 18px;"><?php echo $userLogin; ?></p>
        <h3 class="card-subtitle mb-2">Статус на сайте:</h3>
        <p class="card-text" style="font-size: 18px;"><?php echo $userRole; ?></p>
      </div>
    </div>

    <div style="margin-top: 20px;">
      <div class="row justify-content-center">
        <div class="col-md-4">
        <a href="edit_profile.php" class="btn btn-lg btn-custom btn-block mt-3">Редактировать данные</a>
          <a href="./queries/logout.php" class="btn btn-lg btn-custom btn-block mt-3">Выйти из профиля</a>
        </div>
      </div>
    </div>

    <div style="margin-bottom: 180px;"></div>
  </div>
</body>

</main>
<?php require("./elements/footer.php") ?>