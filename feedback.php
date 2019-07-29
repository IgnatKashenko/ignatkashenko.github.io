<?php
  session_start ();
  $to = "sasha-lashov@rambler.ru";
  if(isset($_POST{"send"})) {
    $name =  htmlspecialchars($_POST["name"]);
    $from = htmlspecialchars ($_POST["from"]);
    $subject = htmlspecialchars ($_POST["subject"]);
    $message = htmlspecialchars ($_POST["message"]);
    $_SESSION["name"] = $name;
    $_SESSION["from"] = $from;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;
    $error_name = "";
    $error_from = "";
    $error_subject = "";
    $error_message = "";
    if(strlen($name) == 0) {
      $error_name = "Введите ваше имя";
      $error = true;
    }
    if($from == "" || !preg_match ("/@/", $from)) {
      $error_from = "Введите корректный email";
      $error = true;
    }
    if(strlen($subject) == 0) {
      $error_subject = "Введите тему сообщения";
      $error = true;
    }
    if(strlen($message) == 0) {
      $error_message = "Введите сообщение";
      $error = true;
    }
    if(!$error) {
      $subject = "=?utf-8?B?".base64_encode($subject)."?=";
      $headers = "From: $from\r\nReply-to: from\r\nContent-type: text/plain; charset=utf-8\r\n";
      mail ($to, $subject, $message, $headers);
      header ("Location: auth.html");
      exit;
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kashenko team</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="test, site, website" />
    <meta name="description" content="Ignata Kashchenko Website" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  </head>
  <body>
    <div id="page-wrap">
      <header>
        <center>
          <img src="img/favicon.png" alt="Изображение" title="Изображение" />
          <a href="index.html" title="На главную" id="logo">Kashenko team</a>
          <a href="news.html" title="Новости" id="news">Новости</a>
          <a href="about.html" title="О нас" id="about">Развлечения</a>
          <a href="feedback.php" title="Обратная связь" id="feedback">Обратная связь</a>
          <a href="auth.html" title="Вход" id="auth">Вход</a>
          <a href="reg.html" title="Регистрация" id="reg">Регистрация</a>
        </center>
      </header>
    <div class="clear"><br /></div>
<div id="wrapper">
  <div id="articles">
       <form action="" method="post">
          <label for="name">Введите ваше имя</label>
          <input type="text" name="name"  value="<?=$_SESSION["from"]?>" /></textarea><span style="color:red"><?=$error_name?></span><br>
          <label for="subject">Тема сообщений</label>
          <input type="text" name="subject" <?=$_SESSION["subject"]?> /><span style="color:red"><?=$error_subject?></span><br>
          <label for="email">Email</label>
          <input type="text" name="form" value="<?=$_SESSION["from"]?>" /><span style="color:red"><?=$error_from?></span><br>
          <label for="message">Введите ваше сообщение</label>
          <textarea name="message" cols="30" rows="10"><?=$_SESSION["message"]?></textarea><span style="color:red"><?=$error_message?></span><br>
          <input type="submit" name="send" value="Отправить" />
       </form>
  </div>
</div>
<footer>
<span class="left">Все права защищены &copy; 2019</span><span
class="right"><img src="img/vk.png" alt="Группа Вконтакте"
title="Группа Вконтакте" /> <img src="img/instagram.png" alt="Аккаунт Инстаграмм"
title="Страница в Инстаграмме" /> <img src="img/facebook.png" alt="Аккаунт Фейсбук"
title="Страница в Фейсбуке" /> <img src="img/skype.png" alt="Аккаунт Скайп"
title="Аккаунт в Скайпе" /> <img src="img/telegram.png" alt="Аккаунт Телеграм"
title="Аккаунт в Телеграме" /> <img src="img/twitter.png" alt="Аккаунт Твитер"
title="Аккаунт в Твитере" /></span>
</footer>
</body>
</html>
