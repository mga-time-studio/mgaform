<?php

move_uploaded_file($_FILES['file']['tmp_name'], "video/".$_FILES['file']['name']);
echo "спасибо ваше видео идёт на проверку"
  
?>