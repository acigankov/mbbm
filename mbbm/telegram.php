<?php
// токен бота
define('TELEGRAM_TOKEN', '5983589381:AAHOJ48o2oZtaJQe0LRWxLuPYrQa2V1d2pY');
// ваш внутренний ID
define('TELEGRAM_CHATID', '-872112878');
$message = str_replace("\n", ' ', strip_tags($body));
$ch = curl_init('https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage?chat_id=' . TELEGRAM_CHATID . '&text=' . $message); // URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Не возвращать ответ
curl_exec($ch); // Делаем запрос
curl_close($ch); // Завершаем сеанс cURL
?>