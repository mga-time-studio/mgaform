<?php
  
$mess = $_POST['names'];

$mess = htmlspecialchars($mess);

$mess = urldecode($mess);

$mess = trim($mess);

if (mail("maxgamesapk@gmail.com",
         "новое писымо",
         "dynamic legends: ".$mess, 
         "From: no-reply@mydomain.com /r/n")
) {
  echo('голос отправлено');
}

else {
  echo('ошибка');
}
  
?>