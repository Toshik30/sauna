<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$date = $_POST['date'];

$token = "1105538525:AAHzDbuxdGgqcwiKzPdNbAzdipZRjC9xJn0";
$chat_id = "-1001285851797";

$arr = array(
    'Имя' => $name,
    'Контакт' => $phone,
    'Дата' => $date,
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};
include '/fancybox/dist/locate.php';
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
    header('Location: Send.html');
} else {
    echo "Error";
}