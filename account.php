<?php
    require "login/db.php";
    
    if (!isset($_SESSION['logged_user'])) {
        header("Location: /login.php");
    }
    $data = $_POST;
    $user = $_SESSION['logged_user'];
    
    
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberDucks</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    <link rel="icon" href="img/favicon.ico">
    </head>

<body>


    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__text">
                        deep.Work
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                            <li ><a href="/login/logout.php">Выход</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>

    <section class="hero-section">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5>Онлайн сервис неотложной it помощи!</h5>
                                <h2>Здравствуйте, <?php echo $_SESSION['logged_user']->login ?></h2>
                                <a href="#register" class="primary-btn">Свяжитесь с нами</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img">
                                <img src="img/hero/analogues.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="register-domain spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="register__text">
                        <div class="section-title">
                            <h3>Начните сейчас!</h3>
                        </div>
                        
                            <div class="card-deck">
                                
                                    <div class="card" style="width: 18rem;">
                                      <img src="https://databy.com/uploads/posts/2014-07/1405333765_zachem-nuzhna-operacionnaya-sistema.jpg" class="card-img-top">
                                      <div class="card-body">
                                        <h5 class="card-title">Установка ОС</h5>
                                        <p class="card-text">Установим или переустановим Linux, Windows или Mac OS. Стоимость лицензии Windows - 2000р.</p>
                                        <br>
                                        <h5 class="card-title">Цена: 1000руб.</h5>
                                         <a href="https://money.yandex.ru/to/4100111727579162/1000" class="btn btn-primary">Заказать</a>
                                        <!--<iframe src="https://money.yandex.ru/quickpay/button-widget?targets=%D0%A3%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BA%D0%B0%20%D0%9E%D0%A1&default-sum=1000&button-text=11&any-card-payment-type=on&button-size=m&button-color=white&successURL=&quickpay=small&account=4100111727579162&" width="184" height="36" frameborder="0" allowtransparency="true" scrolling="no"></iframe> -->
                                      </div>
                                    </div>
                                
                                
                                
                                <div class="card" style="width: 18rem;">
                                  <img src="https://www.icover.ru/upload/resize_cache/iblock/581/1300_700_1/5813cb824c6a98aa684d624c320d8077.jpg" class="card-img-top">
                                  <div class="card-body">
                                    <h5 class="card-title">Настройка WiFi роутера</h5>
                                    <p class="card-text"></p>
                                    <br>
                                    <h5 class="card-title">Цена: 500руб.</h5>
                                    <a href="https://money.yandex.ru/to/4100111727579162/500" class="btn btn-primary">Заказать</a>
                                  </div>
                                </div>
                                
                                
                                
                                <div class="card" style="width: 18rem;">
                                  <img src="https://lh3.googleusercontent.com/proxy/oFP3OOaw3Nn20F5pFjpyYoGgI1bIwZGvohVe_0FIabhpTcDWj_gJER9934TdPHI72XC9xxLI0fI2ZSFgggCrnjn7TgycS-qeT4sGNspUzbs" class="card-img-top">
                                  <div class="card-body">
                                    <h5 class="card-title">Диагностика неисправности</h5>
                                    <p class="card-text">Проведем диагностику компьютера и выявим неисправность.</p>
                                    <br>
                                    <h5 class="card-title">Цена: 700руб.</h5>
                                    <a href="https://money.yandex.ru/to/4100111727579162/700" class="btn btn-primary">Заказать</a>
                                  </div>
                                </div>
                                
                                
                            </div>
                            <br>
                            <div class="card-deck">
                                <div class="card" style="width: 18rem;">
                                  <img src="https://ru.gecid.com/data/ittech/201701180804-46925/img/00.jpg" class="card-img-top">
                                  <div class="card-body">
                                    <h5 class="card-title">Сборка ПК</h5>
                                    <p class="card-text">Соберем ваш компьютер, а также установим ОС и произведем первоначальные настройки.</p>
                                    <br>
                                    <h5 class="card-title">Цена: 3000руб.</h5>
                                    <a href="https://money.yandex.ru/to/4100111727579162/3000" class="btn btn-primary">Заказать</a>
                                  </div>
                                </div>
                                
                                
                                
                                <div class="card" style="width: 18rem;">
                                  <img src="https://upload.wikimedia.org/wikipedia/commons/d/d0/Supermicro_SBI-7228R-T2X_blade_server.jpg" class="card-img-top">
                                  <div class="card-body">
                                    <h5 class="card-title">Настройка сервера</h5>
                                    <p class="card-text">Настроем удаленный сервер под ваши задачи: 1С, перенос сайта, хранилище данных и пр.</p>
                                    <br>
                                    <h5 class="card-title">Цена: от 5000руб.</h5>
                                    <a href="https://money.yandex.ru/to/4100111727579162/5000" class="btn btn-primary">Заказать</a>
                                  </div>
                                </div>
                                
                                
                                
                                <div class="card" style="width: 18rem;">
                                  <img src="https://cache.kwork.ru/pics/t3/74/281755-1.jpg" class="card-img-top">
                                  <div class="card-body">
                                    <h5 class="card-title">Оптимизация ПК</h5>
                                    <p class="card-text">Установка необходимых драйверов и укорение работы системы.</p>
                                    <br>
                                    <h5 class="card-title">Цена: 1000руб.</h5>
                                    <a href="https://money.yandex.ru/to/4100111727579162/1000" class="btn btn-primary">Заказать</a>
                                  </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            
                            
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section id="register" class="register-domain spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="register__text">
                        <div class="section-title">
                            <h3>Задайте вопрос нашему боту!</h3>
                        </div>
<iframe
allow="microphone;"
width="350"
height="430"
src="https://console.dialogflow.com/api-client/demo/embedded/705789fe-e188-41b4-8b59-33fb682663894231421424134">
</iframe>
            </div></div>
        </div>
    <section>

    
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Связаться с нами</h3>
                    <form action="send1.php" method="post">
                        <div class="input-list">
                            <input type="text" name="fio" placeholder="Имя" required>
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <textarea name="text" placeholder="Опишите подробно вашу проблему" required></textarea>
                        <button type="submit" class="site-btn">Начать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    </body>

</html>