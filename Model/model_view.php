<?php
namespace BeeJee\Model;
//include 'Controler/controler.php';

$num = 3;
$page = $_GET['page'];
// Определяем общее число сообщений в базе данных
//$result2 = $dbh->query("SELECT COUNT(*) FROM mytable");
//foreach($result2 as $temp){
	//print_r($row);
//}
//echo $row[0];
//print_r($result2);
//$temp = PDO::fetchAll($result2);
//$posts = $temp[0];
// Находим общее число страниц
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
// Определяем начало сообщений для текущей страницы
$page = intval($page);
// Если значение $page меньше единицы или отрицательно
// переходим на первую страницу
// А если слишком большое, то переходим на последнюю
if(empty($page) or $page < 0) $page = 1;
  if($page > $total) $page = $total;
// Вычисляем начиная с какого номера
// следует выводить сообщения
$start = $page * $num - $num;
var_dump($start);

// Выбираем $num сообщений начиная с номера $start


//

