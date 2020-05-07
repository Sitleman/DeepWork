<?php
    require "login/db.php";
    $data = $_POST;
    
?>

<form action="/doctor.php" method="POST">
    <div class="form-group">
        <p>
            <strong>Ваше имя:</strong> <input type="text" name="nik" value="<?php echo @$data['nik']; ?>"/>
        </p>
        
        <p>
            <label for="Form1">Выбирите пользователя</label>
            <select class="form-control" name="login" value="<?php echo @$data['login']; ?>"id="Form1">
                <?php
                    $m = R::findAll('users');
                    foreach($m as $mes){
                        if ($mes->login == @$data['login'])
                            echo "<option selected>" . $mes->login . "</option>";
                        else
                            echo "<option>" . $mes->login . "</option>";
                    }
                ?>
            </select>
            <button type="submit" name="do_select">Выбрать</button>
        </p>
  </div>
  <div class="container">
    <?php
        if (isset($data['login'])){
            $user = R::findOne('users', 'login = ?', array($data['login']));
            $m = R::findAll((string)$user->id);
            foreach($m as $mes){
                if ($mes->login == $data['nik']){
                    echo "<div class='alert alert-success'>" .$mes->login . ":   " . $mes->text . "</div>";
                } else {
                    echo "<div class='alert alert-danger'>" .$mes->login . ":   " . $mes->text . "</div>";
                }
                    
            }
        }
        if (isset($data['send_mes'])){
                $mes = R::dispense((string)$user->id);
                $mes->login = $data['nik'];
                $mes->text = $data['mes'];
                R::store($mes);
        }    
    ?>
            <form action="/doctor.php" method="POST">
                <input type="text" name="mes"/>
                <button type="submit" name="send_mes">Send</button>
                <button action="#">Обновить</button>
            </form>
    
  </div>
</form>