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
    if(isset($_SESSION["user"]) && $_SESSION["user"]["role_id"] > 1) {
    ?>
    <div class="container">
        <div class="featurette text-center">
            <h2 class="featurette-heading">Авторизировано</h2>
            <p class="lead">Вы можете просматривать содержимое страницы для авторизированных пользователей.</p>
        </div>
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