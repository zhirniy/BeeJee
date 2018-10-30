<?php
session_start();
require 'autoload.php';
try{

$controler = new BeeJee\Controler\Task();
//$action = $_GET['action'] ? $_GET['action'] : 'Index';
$action = 'Index';

$controler->action($action);
} catch(\BeeJee\Exception\Core $ex) {
	echo 'Проблема компонента отображения ';
}
   catch(\BeeJee\Exception\Connect $ex) {
	echo 'Нет соединения с базой';
}

?>