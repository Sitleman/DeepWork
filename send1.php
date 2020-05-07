<?php
    $data = $_POST;
    if(isset($data['fio']) and isset($data['email']) and isset($data['text'])){
         $fio = $data['fio'];
         $email = $data['email'];
         $text = $data['text'];
         
         $fio = htmlspecialchars($fio);
         $email = htmlspecialchars($email);
         $fio = urldecode($fio);
         $email = urldecode($email);
         $fio = trim($fio);
         $email = trim($email);
         if (mail("gureev6856@gmail.com", "Заявка с сайта", "ФИО: ".$fio."\nE-mail: ".$email. "\nCообщение: " .$text,"From: info@sxmurxe.ru \r\n")
            and mail($email, "Заявка c сайта deepwork.ru", "Ваш запрос: '". $text ."' успешно отправлен. \nМы отработаем его в ближайшее время.","From: info@sxmurxe.ru \r\n")){ 
         echo "<h2 style='color: green;'>Сообщение успешно отправлено</h2>"; 
         } else { 
         echo "<h2 style='color: red;'>При отправке сообщения возникли ошибки</h2>";
         }
    } else {
        echo "<h2 style='color: red;'>Пожалуйста, заполните все поля!</h2>";
    }
?>
  
<?php header('Refresh: 5; URL=http://deep.work.sxmurxe.ru/account.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="index, follow" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Редирект с задержкой и обратным отсчетом времени.</title>
</head>
 
<body onLoad="tiktak();">
            <div>
            <script language="JavaScript" type="text/javascript">
                        // значение начальной секунды
                        var second=5;
                        function tiktak()
                        {
                         if(second<=9){second="0" + second;}
                         if(document.getElementById){timer.innerHTML=second;}
                         if(second==00){return false;}
                         second--;
                         setTimeout("tiktak()", 1000);
                        }
            </script>
            Вы будете перенаправлены через <span id="timer"></span> секунд на страницу личного кабинета.
            </div>
</body>
</html>





