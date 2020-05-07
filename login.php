<?php
    require "login/db.php";
    $data = $_POST;
    
    if (isset($_SESSION['logged_user'])) {
        header("Location: /account.php");
    }
    
    if (isset($data['do_login'])){
        $errors = array();
        $user = R::findOne('users', 'email = ?', array($data['email']));
        if ($user){
            if (password_verify($data['password'], $user->password)){
                $_SESSION['logged_user'] = $user;
                echo "<div style='color: green;'>Вы авторизованы!<br/>
                        Можете перейти на <a href='/login'> Главную </a></div><hr>";
                header("Location: /account.php");
            } else {
                $errors[] = "Неверный пароль!";
            }
        } else {
            $errors[] = "Пользователь с таким логином не найден!";
        }
        if (!empty($errors)){
            echo array_shift($errors);
        }
    }
    
    if ( isset($data['do_signup']) ){
        $errors = array();
        
        if (trim($data['login'] == '')){
            $errors[] = 'Введите логин!';
        }
        if (trim($data['email'] == '')){
            $errors[] = 'Введите email!';
        }
        if (trim($data['password'] == '')){
            $errors[] = 'Введите пароль!';
        }
        if (R::count('users', "login = ?", array($data['login'])) > 0){
            $errors[] = 'Пользователь с таким логином уже существует!';
        }
        if (R::count('users', "email = ?", array($data['email'])) > 0){
            $errors[] = 'Пользователь с таким email уже существует!';
        }
        if (empty($errors)){
            $user = R::dispense('users');
            $user->login = $data['login']; 
            $user->email = $data['email'];
            $user->adress = $data['adress'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            $user->test_point = -1;
            $id = (string)R::store($user);
            
            $forum = R::dispense($id);
            $forum->login = "Администратор";
            $forum->text = "Можете начать диалог)";
            R::store($forum);

            $_SESSION['logged_user'] = $user;
            header("Location: /account.php");
            echo '<div style="color:green;"> Success </div><hr>';
        } else {
            echo '<div style="color:red;">' .array_shift($errors). '</div><hr>';
        }
    }
    
    
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>re.Treat</title>
    <link rel="stylesheet" href="style_login.css">
    <link href="css/style_login.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<style>.hidden{opacity:0;} .container{padding-top:10px;} .btn.btn-secondary{background-color: #23D7E5;padding: 10px; margin-bottom:15px;margin-right:8px;} .btn.btn-secondary.active{background-color: #1556D2 !important;}</style>
    <section class="wellcome_area clearfix" id="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-12 col-md-6 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Авторизация</h5>
                    <form class="form-signin" action="/login.php" method="POST">
                      <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" value="<?php echo @$data['email']; ?>" required autofocus>
                        <label for="inputEmail">Email</label>
                      </div>
        
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                        <label for="inputPassword">Пароль</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="do_login">Вход</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-sm-9 col-12 col-md-6 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Регистрация</h5>
                    <div class="btn-group-lg" role="group" aria-label="Basic example">
                    <!--
                    <button type="radio" id="bb1" class="btn btn-secondary active">Физ. лицо</button>
                    <button type="radio" id="bb2" class="btn btn-secondary">Юр. лицо</button>
                    <button type="radio" id="bb3" class="btn btn-secondary">Работникам</button>
                    -->
                    
                    <div class="btn-group btn-group-toggle text-center" data-toggle="buttons">
                      <label class="btn btn-secondary active">
                        <input id="bb1" type="radio" name="options" id="option1" autocomplete="off" checked> Физ. лицо
                      </label>
                      <label class="btn btn-secondary">
                        <input id="bb2" type="radio" name="options" id="option2" autocomplete="off"> Юр. лицо
                      </label>
                      <label class="btn btn-secondary">
                        <input id="bb3" type="radio" name="options" id="option3" autocomplete="off"> Вакансии
                    </label>
                      
                    </div>
                    
                </div>
                    <form id="form1" class="form-signin" action="/login.php" method="POST">
                        <div class="form-label-group">
                            <input type="name" id="inputNamee" class="form-control" name="login" placeholder="Name" value="<?php echo @$data['login']; ?>" required autofocus>
                            <label for="inputNamee">Имя</label>
                        </div>
                      <div class="form-label-group">
                        <input type="email" id="inputEmaill" class="form-control" name="email" placeholder="Email" value="<?php echo @$data['email']; ?>" required autofocus>
                        <label for="inputEmaill">Email</label>
                      </div>
                      <div class="form-label-group">
                        <input type="adress" id="inputAdress" class="form-control" name="adress" placeholder="Adress" required autofocus>
                        <label for="inputAdress">Адрес проживания</label>
                      </div>
                      <div class="form-label-group">
                        <input type="password" id="inputPasswordd" class="form-control" name="password" placeholder="Password" required>
                        <label for="inputPasswordd">Пароль</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="do_signup">Регистрация</button>
                    </form>
                    
                    <form id="form2" class="form-signin" action="/login.php" method="POST">
                        <div class="form-label-group">
                            <input type="name" id="inputNamee" class="form-control" name="login" placeholder="Name" value="<?php echo @$data['login']; ?>" required autofocus>
                            <label for="inputNamee">Имя</label>
                        </div>
                      <div class="form-label-group">
                        <input type="email" id="inputEmaill" class="form-control" name="email" placeholder="Email" value="<?php echo @$data['email']; ?>" required autofocus>
                        <label for="inputEmaill">Email</label>
                      </div>
                      <div class="form-label-group">
                        <input type="adress" id="inputAdress" class="form-control" name="adress" placeholder="Adress" required autofocus>
                        <label for="inputAdress">Адрес проживания</label>
                      </div>
                      <div class="form-label-group">
                        <input type="password" id="inputPasswordd" class="form-control" name="password" placeholder="Password" required>
                        <label for="inputPasswordd">Пароль</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="do_signup">Регистрация</button>
                    </form>
                    
                    <form id="form3" class="form-signin" action="/login.php" method="POST">
                        <div class="form-label-group">
                            <input type="name" id="inputNamee" class="form-control" name="login" placeholder="Name" value="<?php echo @$data['login']; ?>" required autofocus>
                            <label for="inputNamee">Имя</label>
                        </div>
                      <div class="form-label-group">
                        <input type="email" id="inputEmaill" class="form-control" name="email" placeholder="Email" value="<?php echo @$data['email']; ?>" required autofocus>
                        <label for="inputEmaill">Email</label>
                      </div>
                      <div class="form-label-group">
                        <input type="adress" id="inputAdress" class="form-control" name="adress" placeholder="Adress" required autofocus>
                        <label for="inputAdress">Адрес проживания</label>
                      </div>
                      <div class="form-label-group">
                        <input type="password" id="inputPasswordd" class="form-control" name="password" placeholder="Password" required>
                        <label for="inputPasswordd">Пароль</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="do_signup">Регистрация</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
    </section>
    




    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#form2").hide();
            $("#form3").hide();
            $("#bb1").click(function(){
                $("#form1").show();
                $("#form2").hide();
                $("#form3").hide();
            });
            
            $("#bb2").click(function(){
                $("#form2").show();
                $("#form1").hide();
                $("#form3").hide();
            });
            
            $("#bb3").click(function(){
                $("#form3").show();
                $("#form1").hide();
                $("#form3").hide();
            });
        });
    </script>

</body>
</html>