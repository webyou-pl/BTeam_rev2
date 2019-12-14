<?php
session_start();
$myEmail = 'info.webyou@gmail.com';
$_SESSION["messageForUser-form"] = "";

if (isset($_POST['name']) && $_POST['title'] && $_POST['email'] && $_POST['message']) {
    $message = htmlentities("Imie: " . $_POST['name'] . "\n e- mail: " . $_POST['email'] .
        "\n Tresc: " . $_POST['message']);
    $title = "Wiadomość ze strony www.domena.pl - " . htmlentities($_POST['title']);
    if (mail($myEmail, $title, $message, "Wiadomość ze strony")){
        $_SESSION["messageForUser-form"] = '<p class="text-success">Dziekujęmy za wysłanie wiadomości. Odpowiemy na Twoją wiadomość najszybciej, jak to będzie możliwe.</p>';
        header('Location: ../index.php');
        exit();
    } else {
        $_SESSION["messageForUser-form"] = '<p class="text-danger">Wystąpił błąd. Napisz do nas wiadomość później lub zadzwoń do nas.</p>';
        header('Location: ../index.php');
        exit();
    }

    header('Location: ../index.php');
    exit();
} else {
    $_SESSION["messageForUser-form"] = '<p class="text-danger">Proszę o uzupełnienie wszystkich pól formularza.</p>';
    header('Location: ../index.php');
    exit();
}
?>