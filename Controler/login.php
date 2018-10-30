<?php 
namespace BeeJee\Controler;


  $login = $_SESSION['login'] ? $_SESSION['login'] : null;
  $password = $_SESSION['password'] ?  $_SESSION['password'] : null;
  $autorization = file("Controler/autorization.php");
  $login_ = trim($autorization[1]); 
  $password_ = trim($autorization[2]);
 




//ЕСЛИ СОВПАДАЮТ ДАЁМ ДОСТУП
if($login == $login_ && $password == $password_ ){
  echo '<script>
  window.onload = function (){
  load();
  on();
             }
             </script>';
}



//ЕСЛИ НЕСОВПАДАЮТ НО ПОЛЬЗОВАТЕЛЬ ВВЁЛ ПРАВИЛЬНЫЕ ДАННЫЕ ДЛЯ ВХОДА
else if($_POST['enter'] && $_POST['login']==$login_ && $_POST['password']==$password_){
   $_SESSION['login'] = $login_;
   $_SESSION['password'] = $password_;

    echo '<script>alert("Вход")</script>';
     echo '<script>
   window.onload = function (){
    load();
    on();
            }
    </script>';

}
//ЕСЛИ НЕСОВПАДАЮТ
else if($_POST['enter'] && ($login != $login_  ||  $password != $password_)) {
      echo '<script>
      window.onload = function (){
        load();
        off();
        }
     </script>';
    echo '<script>alert("Неправильный логин или пароль");</script>';
  }
 else if($login != $login_  ||  $password != $password_) {
      echo '<script>
      window.onload = function (){
        load();
        off();
        }
     </script>';
    
  }

  //ЕСЛИ ПОЛЬЗОВАТЕЛЬ НАЖАЛ ВЫХОД ТО УДАЛЯЕМ ЛОГИ И ПАРОЛЬ С ФОРМЫ
 if (isset($_GET['off'])) { //проверяем, есть ли переменная
   $_SESSION['login'] = null;
   $_SESSION['password'] = null;


      echo '<script>
      window.onload = function (){
        load();
        off();
        }
              </script>';
     echo '<script>alert("Выход");</script>'; //удаляем строку из таблицы
       
}      

?>