<?php

$errors = [];
$email_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (empty($_POST['name'])) {
        $errors[] = "Pole 'Imię i nazwisko' jest wymagane";
    }

    if (empty($_POST['email'])) {
        $errors[] = "Pole 'Email' jest wymagane";
    } elseif (!preg_match($email_pattern, $_POST['email'])) {
        $errors[] = "Nieprawidłowy format adresu email";
    }


    if (empty($_POST['subject'])) {
        $errors[] = "Pole 'Temat wiadomości' jest wymagane";
    }


    if (empty($_POST['message'])) {
        $errors[] = "Pole 'Wiadomość' jest wymagane";
    }


    if (!isset($_POST['policy-privacy'])) {
        $errors[] = "Musisz zaakceptować politykę prywatności";
    }

    if (empty($errors)) {
        addMessage();
    }


}


function addMessage()
{
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'NoFlexibePipe';

    try {
        $connection = new PDO("mysql:host=". $db_host . ";dbname=" . $db_name,$db_user , $db_pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $connection->query("INSERT INTO  messages (name, email, subject, message) 
VALUES ('$_POST[name]', '$_POST[email]', '$_POST[subject]', '$_POST[message]')");
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

function displayMessage(array $errors = []): void
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
        } else {
            echo '<p class="no-error">' . 'Wiadomość wysłana pomyślnie. Potwierdzenie wysłano na podany adres e-mail.' . '</p>';
        }

    }
}