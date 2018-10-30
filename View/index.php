<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title><?php echo $title; ?></title>
   <script src="View/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
   <link href='View/style.css' rel='stylesheet' type='text/css'>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body id="body">
<?php
//include 'Controler/controler.php';?>

<!--ПАНЕЛЬ АДМИНИСТРАТОРА -->

<div id="admin">
<form action="index.php" method="post" enctype="multipart/form-data">
<h4>ПАНЕЛЬ ВХОДА</h4>
<div class="row" id="login">
<div class="col-md-12" style='border:1px solid black'>
   <label class="class1" style="margin-right: 10px">
      Логин
      </label>
  <input style="float:right" type="text" name="login" size="10px" placeholder="Логин" />
</div>
</div>
<div class="row" id="password">
<div class="col-md-12" style='border:1px solid black'>
   <label class="class1" style="margin-right: 10px">
      Пароль
      </label>
  <input style="float:right" type="password" name="password" size="10px" placeholder="Пароль" />
</div>
</div>
<div class="row" id="enter">
<div class="col-md-12" style='border:1px solid black'>
   <label class="class1" style="margin-right: 10px">
      Вход
      </label>
  <input style="float:right" type="submit" name="enter" size="15px" value="Вход" />
</div>
</div>
<div class="row" id="exit" style="display:none">
<div class="col-md-12" style='border:1px solid black'>
   <label class="class1" style="margin-right: 10px">
      Выход
      </label>
 <a href="?off"> <input type=button value=Выйти></a>
</div>
</div>
</form>
</div>

<!--ПАНЕЛЬ ПРЕДВАРИТЕЛЬНОГО ПРОСМОТРА -->

<div id="prewiev">
<legend>ПРЕДВАРИТЕЛЬНЫЙ ПРОСМОТР</legend>
<div class="row">
<div class="col-md-6 col-md-push-3" style='border:1px solid black'>
   <label class="class1">
      Имя пользователя
      </label>
      <input id="username_prev" type="text" name="username_prev" disabled />
</div>
</div>
<div class="row">
<div class="col-md-6 col-md-push-3" style='border:1px solid black'>
      <label class="class1">
      Email*
         </label>
       <input id="email_prev" type="email" name="email" disabled/>
</div>
</div>
<div class="row">
<div class="col-md-6 col-lg-push-3" style='border:1px solid black'>
       <label class="class1">
      Заметка
         </label>
       <textarea id="comment_prev" name="comment" disabled></textarea>
</div>  
</div>
<div class="row">
<div class="col-md-6 col-lg-push-3" style='border:1px solid black'>
        <label class="class1">
        Картинка
         </label>
       <input type="text" name="file_prev" id="file_prev" disabled />
 </div>
  </div>
<div class="row">
 <div class="col-md-3 col-lg-push-3" style='border:1px solid black'>
       <input style="float:left" id="submit_prev" type="button" name="button" value="Опубликовать" />
</div>
 <div class="col-md-3 col-lg-push-3" style='border:1px solid black'>
       <input id="close" type="button" name="button" value="Закрыть" />
</div>
</div>
</div>

<!--ФОРМА -->

<div id="form1">
<form id="form" action="index.php" method="post" enctype="multipart/form-data">
<fieldset>
<h4>НОВАЯ ЗАДАЧА</h4>

<div class="row">
<div class="col-md-4 col-md-push-4" style='border:1px solid black'>
   <label class="class1">
      Имя пользователя
      </label>
      <input id="username" type="text" name="username" placeholder="Ваше имя" required pattern="[а-яА-Яa-zA-Z_0-9]{2,}"/>
</div>
</div>
<div class="row">
<div class="col-md-4 col-md-push-4" style='border:1px solid black'>
      <label class="class1">
      Email*
         </label>
       <input id="email" type="email" name="email" placeholder="Ваша почта" required/>
</div>
</div>
<div class="row">
<div class="col-md-4 col-lg-push-4" style='border:1px solid black'>
       <label class="class1">
      Текст задачи
         </label>
       <textarea id="comment" name="comment" placeholder="Текст задачи" required></textarea>
</div>
</div>
<div class="row">
<div class="col-md-4 col-lg-push-4" style='border:1px solid black'>
        <label class="class1">
        Добавить картинку(латиница)
         </label>
       <input type="file" id="file" name="file" accept="image/*,JPG/GIF/PNG" />
 </div>
  </div>
<div class="row">
 <div class="col-md-4 col-lg-push-4" style='border:1px solid black'>
      <label class="class1">
      Предварительный просмотр
         </label>
       <input id="open" type="button" name="button" value="Просмотр" />
</div>
</div>
<div class="row">
 <div class="col-md-4 col-lg-push-4" style='border:1px solid black'>
      <label class="class1">
      Опубликовать
         </label>
         <input id="submit" type="submit" name="submit" value="Опубликовать" />
</div>
</div>
<br>
<div class="row">
 <div class="col-md-6 col-lg-push-3">
  <label class="class1">
        Сортировать по:
    </label>
    <select id="option" name="option">
     <option value="user1" >Пользователю</option>
    <option value="email1" >Email</option>
     <option value="status" >Статусу</option>
      <option value="id" >Времени</option>
    </select>
    <input id="sort" type="submit" name="button" value="Сортировать" />
    </div>
    </div>
</div>
</fieldset>
</form>

<!--ВЫВОД СООБЩЕНИЙ -->
<div id="message"><?php  require 'message.php';    ?></div>
</body>
</html>