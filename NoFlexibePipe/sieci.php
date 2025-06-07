<?php include_once './includes/send_message.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Oferta sieci</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/pictures/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/sieci.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>
    <?php include './includes/header.php'; ?>
</nav>
<section class="hero">
    <div class="hero-content">
        <h1>Profesjonalne Projektowanie Sieci Komputerowych</h1>
        <p>Oferujemy kompleksowe rozwiązania w zakresie projektowania i wdrażania sieci komputerowych dostosowanych do
            potrzeb Twojej firmy.</p>
    </div>
    <hr>
</section>

<section class="services">
    <div class="service">
        <h2>Nasze Usługi Projektowania Sieci</h2>
        <p>Specjalizujemy się w projektowaniu zaawansowanych sieci komputerowych dla firm każdej wielkości. Nasze
            rozwiązania są skalowalne, bezpieczne i wydajne. Wykorzystujemy najnowsze technologie i standardy branżowe,
            aby zapewnić niezawodną infrastrukturę sieciową.</p>
        <p>Każdy projekt rozpoczynamy od dokładnej analizy potrzeb klienta, uwzględniając zarówno obecne wymagania, jak
            i potencjał przyszłego rozwoju. Nasze projekty obejmują kompleksowe rozwiązania od warstwy fizycznej po
            aplikacyjną.</p>
    </div>
</section>


<div class="contact-us">
<section class="contact-data">
    <h2>Dane kontaktowe</h2>
    <p><i style="font-size:24px" class="fa">&#xf041;</i> &nbsp;Targ Drzewny 9/11 </p>
    <p><i style="font-size:24px" class="fa">&#xf095;&nbsp;</i><a href="tel:+48">+48 622 356 203</a></p>
    <p><i style="font-size:24px" class="fa">&#xf0e0;&nbsp;</i><a href="mailto:s32942@pjwstk.edu.pl">s32942@pjwstk.edu.pl</a></p>
</section>
<section class="form">
    <h2>Skontaktuj Się z Nami</h2>
    <p>Jesteś zainteresowany naszymi usługami? Skontaktuj się z nami, aby omówić szczegóły Twojego projektu.</p>

    <div class="contact-form">
        <form id="contactForm" method="post" action="sieci.php">
            <div class="form-group">
               <div class="form-inputs">
                   <div class="form-input">
                <label for="name">Imię i nazwisko*</label>
                <input type="text" id="name" name="name" placeholder="Imię i nazwisko" >
                   </div>
                   <div class="form-input">
                <label for="email">Adres E-mail*</label>
                <input type="email" id="email" name="email" placeholder="E-mail" >
               </div>
                   <div class="form-input">
                       <label for="subject">Temat wiadomości*</label>
                       <input type="text" id="subject" name="subject" placeholder="Temat wiadomości" >
                   </div>
               </div>
            </div>
            <div class="form-group">
                <label for="message">Wiadomość*</label>
                <textarea id="message" name="message" placeholder="Wiadomość" ></textarea>
            </div>
            <div class="policy-privacy">
                <label>
            <input type="checkbox" id="policy-privacy" name="policy-privacy" >
            <p> Zapoznałem się z Polityką prywatności NoFlexibePipe oraz wyrażam zgodę na przetwarzanie przez NFPM, udostępnionych przeze mnie danych osobowych na zasadach opisanych w Polityce prywatności dostępnej w Serwisie. Oświadczam, że są mi znane cele przetwarzania danych oraz moje uprawnienia. Niniejsza zgoda może być wycofana w dowolnym czasie poprzez kontakt z Administratorem pod adresem s32942@pjwstk.edu.pl, bez wpływu na zgodność z prawem przetwarzania, którego dokonano na podstawie zgody przed jej cofnięciem.
            </p>
                </label>
            </div>
            <button type="submit" class="submit-btn">Wyślij</button>
        </form>
    </div>
    <div id="notification" class="notification">
        <?php displayMessage($errors);?>
    </div>
</section>
</div>
<?php include './includes/footer.php'; ?>
</body>
</html>
