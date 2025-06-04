<?php include "./includes/ProjectsLoader.php"; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>No Flexibe Pipe</title>
    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
<nav>
    <?php include "./includes/header.php"; ?>
</nav>
<section class="hero">
    <div class="hero-content">
        <h1>Profesjonalne Usługi IT dla Twojego Biznesu</h1>
        <p>Dostarczamy kompleksowe rozwiązania informatyczne, które pomogą Twojej firmie osiągnąć sukces w cyfrowym
            świecie.</p>
        <a href="kontakt.php" class="cta-button">Rozpocznij współpracę</a>
    </div>
</section>
<section class="about-us">
    <div class="about-grid">
        <div class="about-item">
            <h2>Historia firmy</h2>
            <p>Od 2010 roku No Flexible Pipe dostarcza najwyższej jakości usługi IT dla firm w całej Polsce. Nasza droga
                rozpoczęła się od małego zespołu pasjonatów, a dziś jesteśmy liderem w branży rozwiązań
                informatycznych. Po zmianie zarządu w 2015 roku nastąpił dynamiczny rózwój firmy. Oferta poszerzyła się
                o projekty sieci dla budynków użytku publicznego.</p>
        </div>
        <div class="about-item">
            <h2>Nasze usługi</h2>
            <p>Specjalizujemy się w profesjonalnym wsparciu helpdesk oraz kompleksowym projektowaniu i wdrażaniu
                infrastruktury sieciowej w budynkach. Nasz zespół ekspertów jest dostępny 24/7, zapewniając niezawodne
                wsparcie techniczne.</p>
        </div>
        <div class="about-item">
            <h2>Zarząd</h2>
            <p>Na czele firmy stoi Jacus Komputerowy - CEO z 15-letnim doświadczeniem w branży IT. Wraz z zespołem
                doświadczonych dyrektorów ds. technicznych i operacyjnych, tworzy wizję rozwoju firmy koncentrującą się
                na innowacji i zadowoleniu klienta.</p>
        </div>
    </div>
</section>

<section class="services">
    <div class="service">
        <img src="pictures/helpdesk.jpg" alt="Helpdesk">
        <h3>Usługi Helpdesk</h3>
        <a href="helpdesk.php" class="service-link">Dowiedz się więcej</a>
    </div>
    <div class="service">
        <img src="pictures/webService.png" alt="Sieci">
        <h3>Infrastruktura Sieciowa</h3>
        <a href="sieci.php" class="service-link">Dowiedz się więcej</a>
    </div>
</section>
<section class="management">
    <h2>Ponznaj nasz zarząd</h2>
    <div class="management-grid">
        <div class="ceo-card">
            <h2>Prezes Zarządu</h2>
            <img src="pictures/ceo.jpg" alt="ceo">

            <h3>Jacus Komputerowy</h3>
            <p class="employee-description">15 lat doświadczenia w zarządzaniu projektami IT. Certyfikowany Project
                Manager (PMP) z sukcesami w
                transformacji cyfrowej dużych przedsiębiorstw.</p>

        </div>
        <div class="director-card">
            <h3>Michaelini Schumacherini</h3>
            <img src="pictures/michael.jpg" alt="director">

            <p>Dyrektor ds. Technicznych</p>
            <p class="employee-description">10 lat doświadczenia w projektowaniu infrastruktury sieciowej. Ekspert w
                zakresie cyberbezpieczeństwa i
                systemów chmurowych.</p>

        </div>
        <div class="director-card">
            <h3>Sztefano Alvaro</h3>
            <img src="pictures/sztefan.jpg" alt="director">
            <p>Dyrektor ds. Operacyjnych</p>
            <p class="employee-description">12 lat w optymalizacji procesów IT. Specjalista ITIL z doświadczeniem w
                zarządzaniu zespołami wsparcia technicznego.</p>
        </div>
        <div class="director-card">
            <h3>Pjutert Poznansky</h3>
            <img src="pictures/pjutert.jpg" alt="director">
            <p>Dyrektor ds. Rozwoju</p>
            <p class="employee-description">12 lat w optymalizacji procesów IT. Specjalista ITIL z doświadczeniem w zarządzaniu zespołami wsparcia
                technicznego.</p>
        </div>
    </div>
</section>

<section class="gallery">
    <h2>Galeria naszych projektów</h2>
    <div class="gallery-container">
        <button class="gallery-btn prev-btn">&lt;</button>
        <div class="gallery-content">
            <div class="gallery-image">
                <img src="pictures/gallery1.jpg" alt="Galeria 1" id="currentImage">
            </div>
            <div class="gallery-description" id="currentDescription">
                <h3>Projekt Sieci dla Szpitala Wojewódzkiego</h3>
                <ul>
                    <li>Wdrożenie kompleksowej infrastruktury sieciowej</li>
                    <li>Instalacja 500+ punktów dostępowych</li>
                    <li>System monitoringu i bezpieczeństwa</li>
                    <li>Okres realizacji: 2020-2021</li>
                </ul>
            </div>
        </div>
        <button class="gallery-btn next-btn">&gt;</button>
    </div>
    <script>

        const projects = <?php echo json_encode($projectsLoader->getProjects()); ?>;
        let currentIndex = 0;
        const currentImage = document.getElementById('currentImage');
        const currentDescription = document.getElementById('currentDescription');
        let slideInterval;

        const nextSlide = () => {
            currentIndex = (currentIndex + 1) % projects.length;
            currentImage.src = projects[currentIndex].image;
            currentDescription.innerHTML = `<h3>${projects[currentIndex].title}</h3>${projects[currentIndex].details}`;
        };

        slideInterval = setInterval(nextSlide, 10000);

        document.querySelector('.prev-btn').addEventListener('click', () => {
            clearInterval(slideInterval);
            currentIndex = (currentIndex - 1 + projects.length) % projects.length;
            currentImage.src = projects[currentIndex].image;
            currentDescription.innerHTML = `<h3>${projects[currentIndex].title}</h3>${projects[currentIndex].details}`;
            slideInterval = setInterval(nextSlide, 10000);
        });

        document.querySelector('.next-btn').addEventListener('click', () => {
            clearInterval(slideInterval);
            currentIndex = (currentIndex + 1) % projects.length;
            currentImage.src = projects[currentIndex].image;
            currentDescription.innerHTML = `<h3>${projects[currentIndex].title}</h3>${projects[currentIndex].details}`;
            slideInterval = setInterval(nextSlide, 10000);
        });
    </script>
</section>

</body>
</html>
