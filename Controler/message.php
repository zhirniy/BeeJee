<?php

  namespace BeeJee\Controler;
  
  require './autoload.php';


 //Создаём соединение с базой данных с таблицей указаной в классе
 $message = new \BeeJee\Model\Message();
 //Получаем общее колличество записей в таблице
 $posts = $message::count();
 //Указываем кол-во сообщений которые будут выводится на одной странице
 $num = 3;
 if(isset($_GET['page'])){
   $page = 0;
 }else{
   $page = intval($_GET['page']);
}
 //var_dump($page);
 //var_dump($page);
 $total = intval((($posts - 1) / $num) + 1);
  // Определяем начало сообщений для текущей страницы
  // Если значение $page меньше единицы или отрицательно
  // переходим на первую страницу
  // А если слишком большое, то переходим на последнюю
 if(empty($page) or $page < 0) $page = 1;
//var_dump($page);
  if($page > $total) $page = $total;
// Вычисляем начиная с какого номера
// следует выводить сообщения
 $start = $page * $num - $num;
 //var_dump($total);


$option = $_POST['option'] ? $_POST['option'] : null;
$username = $_POST['username'] ? $_POST['username'] : null;
$email = $_POST['email'] ? $_POST['email'] : null;
$comment = $_POST['comment'] ? $_POST['comment'] : null;
$image = $_POST['comment'] ? $_POST['comment'] : null;
if(!empty($_FILES)){
  $image = $_FILES['file'];
  $name_file = $image['name'];


if($image['error'] == 0){
  move_uploaded_file(
    $image['tmp_name'], 
    __DIR__.'/../images/'.$name_file
    );
  }
}


include 'sort_add.php';
$params = [$sort, $start, $num, $total, $page];



if(!empty($_FILES)){
  $image = $_FILES['file'];
  $name_file = $image['name'];


if($image['error'] == 0){
  move_uploaded_file(
    $image['tmp_name'], 
    __DIR__.'/images/'.$name_file
    );
  }
}

?>

