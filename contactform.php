<?php

if (isset($_POST['submit'])) {
    // 1. Ги преземаме податоците од формата
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    // 2. Твојот е-маил каде што сакаш да стигне пораката
    $mailTo = "rickomassum2026@gmail.com"; 

    // 3. Форматирање на насловот и содржината
    $headers = "From: rickomassum2026@gmail.com " . $mailFrom;
    $txt = "Добивте е-маил од " . $name . ".\n\n" . $message;

    // 4. Испраќање на меилот
    // Функцијата mail() ги испраќа податоците
    if (mail($mailTo, $subject, $txt, $headers)) {
        // Ако е успешно, врати го корисникот назад со порака за успех
        header("Location: index.php?mailsend=success");
    } else {
        // Ако има грешка
        header("Location: index.php?mailsend=error");
    }
} else {
    // Ако некој се обиде да пристапи директно до фајлот без формата
    header("Location: index.php");
    exit();
}
?>