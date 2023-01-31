<?php
  
$mess = $_POST['name'];

$mess = htmlspecialchars($mess);

$mess = urldecode($mess);

$mess = trim($mess);

if (mail("maxgamesapk@gmail.com",
         "новое писымо",
         "star of heroes: ".$mess, 
         "From: no-reply@mydomain.com /r/n")
) {
  echo('голос отправлено');
}

else {
  echo('ошибка');
}
  
?>