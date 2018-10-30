<?php

//include 'Controler/controler.php';

?>

<?php

if($message !== null):

foreach ($message as $row):
	if($row->checkbox != null){$style ="admin";}else{$style = "user";}
    
   
   echo "<br>";
	echo  "<form action=\"index.php\" name=\"".$row->id."\" method=\"post\">";    
    echo  "<div class=\"row\" >"; 
    echo "<div class=\"col-md-2 col-md-push-3 ".$style."\" style='border:1px solid black''><label>Номер:</label> <input class=\"edit ".$style."\"  type =\"text\" name = \"edit\" disabled size=10px value= ".$row->id."></div>";
	echo "<div class=\"col-md-2 col-md-push-3 ".$style."\" style='border:1px solid black'>".'<label >Имя:&nbsp</label>'.$row->user."</div>";
	echo "<div class=\"col-md-2 col-md-push-3 ".$style."\" style='border:1px solid black'>".'<label>Email:&nbsp</label>'.$row->email."</div>";
	echo "</div>";
	echo  "<div class=\"row\">";
	echo "<div class=\"col-md-6 col-md-push-3 ".$style."\" style='border:1px solid black'><textarea class=\"textarea ".$style."\" name=\"textarea_edit\" disabled>".$row->note."</textarea>".$row->status."</div>";
	echo "</div>";
if($row->image != null){
	echo  "<div class=\"row\">";
	echo "<div class=\"col-md-6 col-md-push-3 ".$style."\" style='border:1px solid black'><p><img class = \"image\" src=\"images/".$row->image."\"></p></div>";
	echo "</div>";
	}
	echo  "<div class=\"row\">";
	echo "<div class=\"col-md-6 col-md-push-3 ".$style."\" style='border:1px solid black'><label class=menu>Выполнено:</label>"."</div><input class=\"checkbox\" name=\"checkbox\" type=\"checkbox\" value=\"".$row->id."\" ".$row->checkbox."disabled />";
	echo "</div>" ;
	echo  "<div class=\"row\">";  
	echo "<div class=\"col-md-3 col-md-push-3 \" '>".'<a class=panel href="?del_id='.$row->id.'"><input class=del class=panel type=button value=Удалить></a>'."</div>";
	echo "<div class=\"col-md-3 col-md-push-3 \" '>"."<input type=submit class=submit name=\"".$row->id. '"value=Редактировать>'."</div>";
	echo "</div>";
	
	echo "</form>";
	echo  "<div class=\"row\">";
	echo "<div class=\"col-md-6 col-md-push-3\">";
	echo "<hr>";
	echo "</div>";
	echo "</div>";
	
endforeach;

else:
  echo  "<div class=\"row\">";
	  echo "<div class=\"col-md-6 col-md-push-3\" style='border:1px solid black''><h4 style =\"text-align:center\" >Список задач пуст.</h4></div>";
	echo "</div>";
endif;

?>



<?php
//$total=$this->total;
//var_dump($total);
//$page=$this->page;
//var_dump($page);

if ($page != 1) $pervpage = '<a href=index.php?page=1>Первая</a> | <a href=index.php?page='. ($page - 1) .'>Предыдущая</a> | ';
// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = ' | <a href=index.php?page='. ($page + 1) .'>Следующая</a> | <a href=index.php?page=' .$total. '>Последняя</a>';

// Находим две ближайшие станицы с обоих краев, если они есть
if($page - 5 > 0) $page5left = ' <a href=index.php?page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
if($page - 4 > 0) $page4left = ' <a href=index.php?page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
if($page - 3 > 0) $page3left = ' <a href=index.php?page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
if($page - 2 > 0) $page2left = ' <a href=index.php?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href=index.php?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

if($page + 5 <= $total) $page5right = ' | <a href=index.php?page='. ($page + 5) .'>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' | <a href=index.php?page='. ($page + 4) .'>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' | <a href=index.php?page='. ($page + 3) .'>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' | <a href=index.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=index.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>';

// Вывод меню если страниц больше одной

if ($total > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"pstrnav\">";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</div>";
}

 ?>