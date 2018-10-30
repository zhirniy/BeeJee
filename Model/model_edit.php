<?php
//namespace Model;
if($sort==null){
$sort = "id";}
if ($option=="user1" && !$username){
$sort = "user";
}

else if ($option=="email1" && !$username){
$sort = "email";
}
else if ($option=="status" && !$username){
$sort = "checkbox";
}
else if ($username!=null && $email!=null && $comment!=null){
  $dbh->query("INSERT INTO mytable (user , email, note, image) VALUES ('$username', '$email', '$comment', '$name_file')");
}
?>