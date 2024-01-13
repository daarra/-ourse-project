<!-- HEADER -->
<?php require("./elements/header.php") ?>

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

  <div class="text-center text-justify">
  <h2 class="featurette-heading">Добро пожаловать! <span class="text-muted">Вы попали в пространство data insights</span></h2>
  <p class="lead">На нашем сайте Вы сможете ознакомиться с некоторыми инструментами для работы с данными. <br/> Мы предлагаем Вам возможность изучения и экспериментирования с данными, а также обмена опытом с другими специалистами в области.</p>
  <p class="lead">Во вкладке <strong>«Инструменты»</strong> расположены статьи, которые позволят ознакомить Вас с концепциями, определениями, 
  <br/> математическим аппаратом, который представляет интерес создателя сайта при работе с данными. Дополнением к изложенному материалу
  <br/>является вкладка <strong>«Датасеты»</strong>. Она визуализирует непосредственное применение методов к конкретным задачам.
  <br/> Хотим обратить Ваше внимание, что данный раздел доступен только <strong>авторизированным</strong> пользователям.</p>
</div>


<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/invertslide.png" class="img-fluid" alt="Фотография1-Большие устройства">

  </div>
</div>


<?php require("./elements/footer.php") ?>
