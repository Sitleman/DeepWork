<?php
    require "db.php";
    $data = $_POST;
    if (isset($data['do_login'])){
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if ($user){
            if (password_verify($data['password'], $user->password)){
                $_SESSION['logged_user'] = $user;
                echo "<div style='color: green;'>Вы авторизованы!<br/>
                        Можете перейти на <a href='/login'> Главную </a></div><hr>";
                
            }
        } else {
            $errors[] = "Пользователь с таким логином не найден!";
        }
        
    }
?>

<form action="/login/login.php" method="POST">
    <p>
        <p><strong>Логин</strong>:</p>
        <input type="text" name="login" value="<?php echo @$data['login']; ?>">
    </p>
    
    <p>
        <p><strong>Пароль</strong>:</p>
        <input type="text" name="password" value="">
    </p>
    <p>
        <button type="submit" name="do_login">Войти</button>
    </p>
</form>