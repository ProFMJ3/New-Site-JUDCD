
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <title>A Propos De Notre Mission</title>
    <link rel="stylesheet" href="../styles/about.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand logo" href="#">
                    <img src="../logo.png" alt="Logo">
                </a>
            </div>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link " href="../index.php">Accueil</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="../pages/about.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            À Propos
                        </a>    

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../pages/team.php">Notre Equipe</a></li>
                            <li><a class="dropdown-item" href="../pages/actualities.php">Actualités</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="../pages/blog.php">Blog</a></li>

                    <li class="nav-item"><a class="nav-link" href="../pages/contact.php">Contact</a></li>

                    <li class="nav-item"><a class="nav-link " href="../pages/faq.php">FAQ</a></li>

                    <li class="nav-item">
                        <a class="btn btn-danger nav-link text-white px-3 py-2" href="#">DEVENEZ MEMBRE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="about-container">
        <div class="about-box">
            <div class="about-box-text">
                <h2>À PROPOS DE NOUS</h2>
                <p>
                    "L’association JUDCD (Jeunes Unis pour un Développement Communautaire Durable) est une organisation qui réunit des jeunes engagés pour promouvoir le développement durable au sein de leurs communautés. Elle vise à mobiliser les ressources humaines, intellectuelles et matérielles pour résoudre les défis sociaux, environnementaux  , culturelles et  artisanaux   et le  tourisme qui freinent le progrès des communautés.
                    "
                </p>
            </div>
            
        </div>
    </div>

    <!-- Section principale -->
    <section class="hero">
        <div class="container">
            <h1 class="title text-drop">STRATEGIES</h1>
            <div class="description-box">
                <p class="description text-left">
                    "L'association JUDCD (Jeunes Unis pour le Développement Communautaire Durable) s'engage à soutenir les initiatives locales en éducation, santé, agriculture durable, et entrepreneuriat tout en promouvant activement le développement durable. Ses objectifs incluent également le renforcement des capacités des jeunes par des formations et opportunités, ainsi que la création de partenariats stratégiques avec des organisations nationales et internationales pour maximiser l'impact de ses projets. Pour atteindre ces ambitions, JUDCD adopte une approche participative impliquant directement les communautés locales et les jeunes dans la conception et la mise en œuvre des projets. L'association mobilise des fonds à travers des événements innovants tout en valorisant le tourisme responsable et durable, et en mettant en avant l’art et la culture comme moteurs de changement. Enfin, des initiatives environnementales, telles que des campagnes de sensibilisation, de nettoyage, et de reboisement, complètent une stratégie globale orientée vers un développement communautaire inclusif et durable."
                </p>
            </div>
            
        </div>
    </section>

    <div class="video-section">
        <div class="video-intro">
            <h2>Découvrez notre entreprise</h2>
        </div>
        <div class="video-container">
            <video class="background-video" autoplay loop muted>
                <source src="../assets/testv.mp4" type="video/mp4"> <!-- Vidéo d'arrière-plan -->
                Votre navigateur ne supporte pas la vidéo.
            </video>
            <div class="overlay">
                <video class="dg-video" controls>
                    <source src="../assets/testvid.mp4" type="video/mp4"> <!-- Vidéo du DG -->
                    Votre navigateur ne supporte pas la vidéo.
                </video>
                <button class="play-button" id="playButton">▶ Play</button>
            </div>
        </div>
    </div>


    <!-- Nos missions -->
    <section class="container my-5">
        <h2 class="text-center mb-4 section-title text-right">NOS OBJECTIFS</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="mission text-left">
                    <h3>Notre mission</h3>
                    <p>
                        "La mission de JUDCD est d’agir comme un catalyseur de changement au sein des communautés en mettant en avant des actions concrètes pour améliorer les conditions de vie, protéger l’environnement et promouvoir des valeurs de solidarité. L’association se concentre sur l’implication des jeunes dans des projets novateurs et éducatifs, tout en encourageant la préservation du patrimoine culturel et naturel à travers des initiatives durables et inclusives. Elle cherche à fédérer les efforts locaux et internationaux pour bâtir un avenir équilibré et respectueux des besoins des générations actuelles et futures."
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../assets/img3.jpeg" alt="Illustration" class="img-fluid mission-image text-zoom">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 text-left">
                <img src="../assets/img4.jpeg" alt="Photo 1" class="img-fluid gallery-image">
            </div>
            <div class="col-md-4 text-drop">
                <img src="../assets/img5.jpeg" alt="Photo 2" class="img-fluid gallery-image">
            </div>
            <div class="col-md-4 text-right">
                <img src="../assets/img6.jpeg" alt="Photo 3" class="img-fluid gallery-image">
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <footer style="background-color: #002147; color: white; text-align: center; padding: 20px 0;">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <h5 class="text-uppercase font-weight-bold">À propos de JUDCD</h5>
                    <p class="judcd-text">
                        JUDCD est une association créée par des jeunes, dédiée au développement communautaire durable.
                        Nous travaillons pour un avenir meilleur et écoresponsable.
                    </p>

                    <p class="email">
                        Contact: contactinfos@judcd.com/
                                <br>its.digitalmarketers@judcd.com
                    </p>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-uppercase font-weight-bold">Liens Utiles</h5>
                    <ul class="list-unstyled">
                        <li style="margin: 10px 0;">
                            <a href="index.php" class="text-white" style="text-decoration: none; font-weight: bold;">Accueil</a>
                        </li>
                        <li style="margin: 10px 0;">
                            <a href="#" class="text-white" style="text-decoration: none; font-weight: bold;">À Propos</a>
                        </li>
                        <li style="margin: 10px 0;">
                            <a href="#" class="text-white" style="text-decoration: none; font-weight: bold;">Notre Equipe</a>
                        </li>
                        <li style="margin: 10px 0;">
                            <a href="#" class="text-white" style="text-decoration: none; font-weight: bold;">Contact</a>
                        </li>
                    </ul>
                </div>  

               <!-- <div  class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-uppercase font-weight-bold">Nous Contacter</h5>
                </div>-->

                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-uppercase font-weight-bold">Suivez-Nous</h5>
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li><a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="text-white me-3"><i class="fab fa-tiktok"></i></a></li>
                        <li><a href="#" class="text-white me-3"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" class="text-white me-3"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center p-3">
            <img src="../decli.png" alt="Logo secondaire" class="img-fluid" style="max-width: 150px;">
        </div>

        <div class="text-center p-3" style="background-color: #002147;">
            <p>"Agir aujourd'hui, bâtir l'avenir !"</p>
            &copy; 2025 Jeunes Unis Pour le Développement Communautaire Durable. Tous droits réservés.
        </div>
    </footer>

    
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script>
        // Animation GSAP pour le footer
        gsap.from("footer", { duration: 1, y: 50, opacity: 0, ease: "power2.out" });
        gsap.from(".text-uppercase", { duration: 1, y: 20, opacity: 0, stagger: 0.2, ease: "power2.out" });
    </script>

    <!-- JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <!-- JS personnalisé -->
    <script src="../scripts/about.js"></script>
</body>
</html>
