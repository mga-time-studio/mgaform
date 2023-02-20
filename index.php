<?php
// Функція, що додає нове повідомлення до файлу
function addMessage($message) {
  $fp = fopen("chat.txt", "a"); // відкриваємо файл у режимі дописування
  fwrite($fp, $message . "\n"); // додаємо повідомлення до файлу, розділені символом нового рядка
  fclose($fp); // закриваємо файл
}

// Якщо користувач відправив повідомлення, додаємо його до файлу
if (isset($_POST['message'])) {
  $message = $_POST['message'];
  addMessage($message);
}

// Функція, що повертає масив всіх повідомлень з файлу
function getMessages() {
  $messages = array();
  $fp = fopen("chat.txt", "r"); // відкриваємо файл у режимі читання
  while (!feof($fp)) { // читаємо файл по рядках, поки не дійдемо до кінця
    $message = fgets($fp);
    if ($message !== false) {
      $messages[] = $message; // додаємо повідомлення до масиву
    }
  }
  fclose($fp); // закриваємо файл
  return $messages;
}

// Виводимо всі повідомлення з файлу
$messages = getMessages();
foreach ($messages as $message) {
  echo $message . "<br>"; // виводимо повідомлення на сторінку, розділені HTML-тегом <br>
}
?>

<!-- Форма для відправки нового повідомлення -->
<form method="post">
  <input type="text" name="message">
  <input type="submit" value="Send">
</form>
