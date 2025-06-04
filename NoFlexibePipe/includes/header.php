
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/pictures/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/headerStyle.css">
    <title> Nawigacja </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<nav>
    <a><img src="/pictures/NoFlexibePipeLogo.jpg" alt="Logo"></a>
    <p> Zawodowcy z pasją</p>
    <button class="menu-button">
    <span class="material-icons">menu</span>
    </button>
    <div class="menu">
        <a href="./index.php"> Strona główna </a>
        <a href="./kontakt.php">Kontakt</a>
        <a href="./uslugi.php">Usługi</a>
    </div>
    <script>
        document.querySelector('.menu-button').addEventListener('click', function () {
            document.querySelector('.menu').classList.toggle('active');
        });
    </script>
</nav>
</html>

