
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>No Flexibe Pipe</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" type="image/x-icon" href="/pictures/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
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
    <div class="service">
        <img src="pictures/szkolenie.png" alt="Szkolenia">
        <h3>Szkolenia</h3>
        <a href="szkolenia.php" class="service-link">Dowiedz się więcej</a>
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
            <p class="employee-description">12 lat w optymalizacji procesów IT. Specjalista ITIL z doświadczeniem w
                zarządzaniu zespołami wsparcia
                technicznego.</p>
        </div>
    </div>
</section>
<?php
include "./includes/ReviewsLoader.php";
$reviewsLoader = new ReviewsLoader();
$reviews = $reviewsLoader->getReviews();
?>
<section class="reviews">
    <div class="reviews-container">
    <button class="review-nav prev-review">&larr;</button>
    <button class="review-nav prev-review-small">&uarr;</button>
    <div class="review-item">

        <?php
        if (!empty($reviews)) {
            $currentReview = $reviews[0];
            echo '<img src="pictures/' . $currentReview->getProfileImage() . '" alt="review image">';
            echo '<div class="review-content">';
            echo '<h3>' . $currentReview->getReviewTitle() . '</h3>';
            echo '<p>' . $currentReview->getDescription() . '</p>';
            echo '</div>';
        }
        ?>

    </div>
    <div class="review-item">

        <?php
        if (!empty($reviews)) {
            $currentReview = $reviews[1];
            echo '<img src="pictures/' . $currentReview->getProfileImage() . '" alt="review image">';
            echo '<div class="review-content">';
            echo '<h3>' . $currentReview->getReviewTitle() . '</h3>';
            echo '<p>' . $currentReview->getDescription() . '</p>';
            echo '</div>';
        }
        ?>

    </div>
    <div class="review-item">

        <?php
        if (!empty($reviews)) {
            $currentReview = $reviews[2];
            echo '<img src="pictures/' . $currentReview->getProfileImage() . '" alt="review image">';
            echo '<div class="review-content">';
            echo '<h3>' . $currentReview->getReviewTitle() . '</h3>';
            echo '<p>' . $currentReview->getDescription() . '</p>';
            echo '</div>';
        }
        ?>

    </div>
    <button class="review-nav next-review">&rarr;</button>
    <button class="review-nav next-review-small">&darr;</button>
    </div>
        <script>
            let currentReviewIndex = 0;
            const reviews = <?php echo json_encode(array_map(function ($review) {
                return [
                    'reviewImage' => $review->getProfileImage(),
                    'reviewTitle' => $review->getReviewTitle(),
                    'description' => $review->getDescription()
                ];
            }, $reviews)); ?>;

            document.querySelectorAll('.prev-review, .prev-review-small').forEach(button => {
                button.addEventListener('click', () => {
                    currentReviewIndex = (currentReviewIndex - 1 + reviews.length) % reviews.length;
                    updateReviews();
                });
            });

            document.querySelectorAll('.next-review, .next-review-small').forEach(button => {
                button.addEventListener('click', () => {
                    currentReviewIndex = (currentReviewIndex + 1) % reviews.length;
                    updateReviews();
                });
            });

            function updateReviews() {
                const reviewItems = document.querySelectorAll('.review-item');

                reviewItems.forEach((reviewItem, index) => {
                    const reviewIndex = (currentReviewIndex + index) % reviews.length;

                    reviewItem.innerHTML = `
            <img src="pictures/${reviews[reviewIndex].reviewImage}" alt="review image">
            <div class="review-content">
                <h3>${reviews[reviewIndex].reviewTitle}</h3>
                <p>${reviews[reviewIndex].description}</p>
            </div>
        `;
                });
            }

        </script>
</section>

<section class="gallery">
    <hr>
    <h2> Nasze największe projekty</h2>
    <hr>
    <?php
    include "./includes/ProjectsLoader.php";
    $projectsLoader = new ProjectsLoader();
    $projects = $projectsLoader->getProjects();
    ?>
    <div class="projects-container">
        <button class="project-nav prev-project">&larr;</button>
        <div class="project-item">

            <?php
            if (!empty($projects)) {
                $currentProject = $projects[0];
                echo '<img src="pictures/' . $currentProject->getImage() . '" alt="project image">';
                echo '<div class="project-content">';
                echo '<h3>' . $currentProject->getTitle() . '</h3>';
                echo '<p>' . $currentProject->getDetails() . '</p>';
                echo '</div>';
            }
            ?>

        </div>
        <button class="project-nav next-project">&rarr;</button>
    </div>
    <script>
        let currentProjectIndex = 0;
        const projects = <?php echo json_encode(array_map(function ($project) {
            return [
                'image' => $project->getImage(),
                'title' => $project->getTitle(),
                'details' => $project->getDetails()
            ];
        }, $projects)); ?>;

        document.querySelector('.prev-project').addEventListener('click', () => {
            currentProjectIndex = (currentProjectIndex - 1 + projects.length) % projects.length;
            updateProject();
        });

        document.querySelector('.next-project').addEventListener('click', () => {
            currentProjectIndex = (currentProjectIndex + 1) % projects.length;
            updateProject();
        });

        function updateProject() {
            const projectItem = document.querySelector('.project-item');
            projectItem.innerHTML = `
                        <img src="pictures/${projects[currentProjectIndex].image}" alt="project image">
                        <div class="project-content">
                            <h3>${projects[currentProjectIndex].title}</h3>
                            <p>${projects[currentProjectIndex].details}</p>
                        </div>
            `;
        }

        setInterval(() => {
            currentProjectIndex = (currentProjectIndex + 1) % projects.length;
            updateProject();
        }, 10000);
    </script>
</section>

<?php include "./includes/footer.php"; ?>
</body>
</html>

