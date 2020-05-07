<?php
    require "login/db.php";
    
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
                            <li class="active"><a href="./index.php">Главная</a></li>
                            <li class="nav-item"><a class="nav-link" href="#feature-section">Преимущества</a></li>
                            <li><a href="#team-section">О нас</a></li>
                            <li><a href="login.php">Начать</a></li>
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
                                <h5>Мы можем решить Ваши проблемы!</h5>
                                <h2>Онлайн сервис неотложной it помощи</h2>
                                <a href="login.php" class="primary-btn">Начните сейчас</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img">
                                <img src="img/hero/hero-right.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h5>Мы предоставляем обучение и место работы для студентов!</h5>
                                <h2>Хотите работать у нас?</h2>
                                <a href="login.php" class="primary-btn">Начните сейчас</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero__img">
                                <img src="img/hero/hero-right.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="register spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="register__text">
                        <div class="section-title">
                            <h3>Начните сайчас!</h3>
                        </div>
                        <div class="register__form">
                            <form action="#">
                                <input type="text" placeholder="email">
                                
                                <button type="submit" class="site-btn">Начать</button>
                            </form>
                        </div>
                        
                        <p>Введите ваш email и мы сможем оперативно связаться свами!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="feature-section" class="feature-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Наши преимущества</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 h-25">
                    <div class="feature__item">
                        <span class="fa fa-user-o"></span>
                        <h5>Для пользователей</h5>
                        <p>Оказания различных услуг для физических и юридических лиц, индивидуально подобранными под конкретную задачу.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="feature__item">
                        <span class="fa fa-user-o"></span>
                        <h5>Отличие от конкурентов</h5>
                        <p>Наш сервис ориентирована под РС(Я), что решает проблему часового пояса. Также сервис имеет систему поощрений добросовестных работников. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="feature__item">
                        <span class="fa fa-user-o"></span>
                        <h5>Для кадров</h5>
                        <p>Возможность заработка, который будет меняться в зависимости от качества оказываемых услуг.
</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="achievement-section set-bg spad" data-setbg="img/achievement-bg.svg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-user-o"></span>
                        <h2 class="achieve-counter"><?php echo R::count('users'); ?></h2>
                        <p>Физ. лиц</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-address-card"></span>
                        <h2 class="achieve-counter">1</h2>
                        <p>Юр. лиц</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <div class="achievement__item">
                        <span class="fa fa-street-view"></span>
                        <h2 class="achieve-counter">3</h2>
                        <p>Работников</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--
    <section class="work-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3>Убедитесь в роботоспособности нашего веб-ресурса!</h3>
                    </div>
                    <div class="work__text">
                        <div class="row">
                            <p>Здесь будет видео</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    
    <section class="minuses spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <img src="img/minuses.png" alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="plan__text">
                        <h3>Проблемы, которые решает наш сервис!</h3>
                        <ul>
                            <li><span class="fa fa-remove"></span> Существует проблема недостатка технического персонала в различных ОУ, предприятиях, а так-же проблема недостатка специалистов, которые могут быстро прийти на помощь</li>
                            <li><span class="fa fa-remove"></span> Невозможность получить оперативную помощь в сфере IT, а также недостаток технических специалистов на едином государственном экзамене.</li>
                        </ul>
                        <a href="#" class="primary-btn">Начните</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team-section" class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title normal-title">
                        <h3>Наша команда</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="team__item">
                        <div class="team__pic">
                            <img src="img/team/team-1.png" alt="">
                        </div>
                        <div class="team__text">
                            <h5>Никита Гуреев</h5>
                            <span>Программист</span>
                            <p>gureev6856@ gmail.com</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="team__item">
                        <div class="team__pic">
                            <img src="img/team/team-2.png" alt="">
                        </div>
                        <div class="team__text">
                            <h5>Денис Еремин</h5>
                            <span>Менеджер</span>
                            <p>denis130102130102@ gmail.com123123</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="team__item">
                        <div class="team__pic">
                            <img src="img/team/team-3.png" alt="">
                        </div>
                        <div class="team__text">
                            <h5>Ижик Владислав</h5>
                            <span>Дизайнер</span>
                            <p>Izhik.vlad<br>@gmail.com</p>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Связаться с нами</h3>
                    <form action="send.php" method="post">
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>