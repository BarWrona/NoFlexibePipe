<?php include_once './includes/send_message.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Oferta sieci</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/pictures/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/kontakt.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>
    <?php include './includes/header.php'; ?>
</nav>
<section class="hero">
    <div class="hero-content">
        <h1>Masz jakieś pytania lub chcesz rozpocząć współpracę?</h1>
        <h2>Prześlij formularz kontaktowy!</h2>
    </div>
    <hr>
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

<section class="map">
    <h3>Znajdziesz nas tutaj!</h3>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2324.5924043332037!2d18.647227776679708!3d54.35010697410076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd73c9d37b1bc7%3A0x88ecd0742d8068f8!2sTarg%20Drzewny%209%2C%2080-886%20Gda%C5%84sk!5e0!3m2!1spl!2spl!4v1700414499077!5m2!1spl!2spl"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</section>

<?php include './includes/footer.php'; ?>
</body>
</html>
