<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];

    $to = "iuriejuve2022@gmail.com"; // Замените на свой адрес электронной почты
    $subject = "Бронирование";
    $message = "Имя: $name\n";
    $message .= "Email: $email\n";
    $message .= "Дата: $date\n";

    // Отправка письма
    if (mail($to, $subject, $message)) {
        echo "Ваше бронирование успешно отправлено.";
    } else {
        echo "Ошибка при отправке бронирования.";
    }
} else {
    echo "Ошибка: доступ запрещен.";
}
?>
