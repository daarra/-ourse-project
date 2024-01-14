<?php require("./elements/header.php") ?>
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
    <form name="log_in" action="./queries/process_form.php" enctype="multipart/form-data" method="post" class="form">
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
        <div style="margin-bottom: 10px;"></div>
    </form>
</div>
</main>
<?php require("./elements/footer.php") ?>
