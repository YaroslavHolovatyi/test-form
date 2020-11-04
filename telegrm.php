<?php


/*https://api.telegram.org/bot1497703162:AAEXfd-PkhpfkXb96Si_hDjujZYP3RlIwg4/getUpdates*/

$name = $_POST['name'];
$email = $_POST['email'];
$token = "1497703162:AAEXfd-PkhpfkXb96Si_hDjujZYP3RlIwg4";
$chat_id = "-1001189578588";
$arr = array(
    'Ім\'я користувача'  => $name,
    'Email' => $email
);

foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTeegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
    &parse_mode=html&text={$txt}", "r");
?>