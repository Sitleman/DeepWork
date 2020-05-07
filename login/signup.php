<?php
    require "db.php";
    $data = $_POST;
    
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
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($user);
            echo '<div style="color:green;"> Success </div><hr>';
        } else {
            echo '<div style="color:red;">' .array_shift($errors). '</div><hr>';
        }
    }
    
?>

<form action="/login/signup.php" method="POST"> 
    <p>
        <p><strong>Ваш логин</strong>:</p>
        <input type="text" name="login" value="<?php echo @$data['login']; ?>">
    </p>
    
    <p>
        <p><strong>Ваш Email</strong>:</p>
        <input type="email" name="email" value="<?php echo @$data['email']; ?>">
    </p>
    
    <p>
        <p><strong>Ваш Пароль</strong>:</p>
        <input type="password" name="password">
    </p>
    
    <p>
        <button type="submit" name="do_signup">Зарегистрироваться</button>
    </p>

</form>