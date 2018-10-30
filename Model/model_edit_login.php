<?php
//namespace Model;
//УДАЛЕНИЕ СООБЩЕНИЯ
if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
     $sql = $dbh->query('DELETE FROM `mytable` WHERE `ID` = '.$_GET['del_id']); //удаляем строку из таблицы
       
}
//СТАВИМ ОТМЕТКУ ВЫПОЛНЕНИЯ
if (isset($_GET['enter_id'])) { //проверяем, есть ли переменная
     $sql = $dbh->query('UPDATE `mytable` SET checkbox = "checked=\"checked\"" WHERE `ID` = '.$_GET['enter_id']); //
     
       
}
//УБИРАЕМ ОТМЕТКУ ВЫПОЛНЕНИЯ
if (isset($_GET['exit_id'])) { //проверяем, есть ли переменная
     $sql = $dbh->query('UPDATE `mytable` SET checkbox = "" WHERE `ID` = '.$_GET['exit_id']); //удаляем строку из таблицы
       
}

//ИЗМЕНЯЕМ СООБЩЕНИЕ ПОЛЬЗОВАТЕЛЯ
if (isset($_POST['edit'])) { //проверяем, есть ли переменная
    

     $sql = $dbh->query("UPDATE mytable SET note = '".$_POST['textarea_edit']."' WHERE id =".$_POST['edit']); //

       
}
?>