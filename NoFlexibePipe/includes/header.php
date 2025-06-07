
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="/pictures/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/headerStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title> Nawigacja </title>

</head>
<nav>
    <a><img src="/pictures/NoFlexibePipeLogo.jpg" alt="Logo"></a>
    <p> Zawodowcy z pasją</p>
    <button class="menu-button" onclick="document.querySelector('.menu').classList.toggle('active')">
    <span class="material-icons">menu</span>
    </button>
    <div class="menu">
        <a href="./index.php"> Strona główna </a>
        <a href="./helpdesk.php">Usługi helpdesk</a>
        <a href="./sieci.php">Projekty sieci</a>
        <a href="./szkolenia.php">Szkolenia</a>
        <a href="./kontakt.php">Kontakt</a>
    </div>
</nav>
</html>

