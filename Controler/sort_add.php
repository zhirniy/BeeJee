<?php 

namespace BeeJee\Controler;

if ($option == "user1" && !$usernmame){
$sort = "user";
$_SESSION['sort'] = 'user';  
}

else if ($option=="email1" && !$usernmame){
$sort = "email";
$_SESSION['sort']='email';
}

else if ($option=="status" && !$usernmame){
$sort = "checkbox";
$_SESSION['sort']='checkbox';
}

else if ($option == "id" && !$usernmame){
$sort = "id";
$_SESSION['sort']='id';
}

if($option == null && $_SESSION['sort'] == 'user' && !$usernmame){
  $sort='user';
}
else if($option == null && $_SESSION['sort'] == 'email' && !$usernmame){
   $sort='email';
 }
 else if($option == null && $_SESSION['sort'] == 'checkbox' && !$usernmame){
   $sort='checkbox';
 }
else if($option==null && $_SESSION['sort'] =='id' && !$usernmame){
   $sort='id';
 }
 else if($username && $email  && $comment)
{
	  $message->user = $usernmame;
	  $message->email = $email;
	  $message->note = $comment;
	  if($name_file){
	  $message->image = $name_file;
	  }
	  $message->insert();
	  $sort = 'id';


}



?>