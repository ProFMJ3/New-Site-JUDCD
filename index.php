<?php
// Variables dynamiques
$title = "Jeunes Unis Pour le Développement Communautaire Durable";
$heroText = "JUCDD est une association créée dans le dynamisme de la jeunesse, focalisée pour un développement communautaire durable.";
$partnershipText = "Notre association est toujours à la recherche de partenaires passionnés pour collaborer sur des projets à fort impact. Que vous soyez une entreprise, une organisation ou un particulier souhaitant soutenir nos initiatives, nous serions ravis de discuter des opportunités de partenariat.";
?>
<!DOCTYPE html>
<html lang="en">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <div class="logo">
                <a class="navbar-brand logo" href="#">
                    <img src="logo.png" alt="Logo">
                </a>
            </div>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            À Propos
                        </a>    

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./pages/about.php">Notre Mission</a></li>
                            <li><a class="dropdown-item" href="./pages/team.php">Notre Equipe</a></li>
                            <li><a class="dropdown-item" href="./pages/actualities.php">Actualités</a></li>  
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="./pages/blog.php">Blog</a></li>

                    <li class="nav-item"><a class="nav-link" href="./pages/contact.php">Contact</a></li>

                    <li class="nav-item"><a class="nav-link " href="./pages/faq.php">FAQ</a></li>

                    <li class="nav-item">
                        <a class="btn btn-danger nav-link text-white px-3 py-2" href="#">DEVENEZ MEMBRE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-center text-white d-flex align-items-center justify-content-center" 
    style="background: url('./assets/img.png') no-repeat center center; background-size: cover; background-color: #000; height: 130vh; min-height: 1099px;  filter: blur(0);">


    
        <div class="container ">
            <h1 class="hero-title"><?php echo $title; ?></h1>
            <p class="hero-text mt-3"><?php echo $heroText; ?></p>
            
            <div class="boutton-div text-center">
                <button class="btn btn-success mt-3" onclick="window.location.href='#';">
                    DEVENEZ MEMBRE
                </button>
            </div>
             
        </div>
    </header>

    <section class="partnership-section py-5">
        <div class="entete">
            <h2 class="mb-4 partnership-title">Êtes-Vous à la Recherche de partenariat ?</h2>
            <p class="lead partnership-text">
            “Notre association est toujours à la recherche de partenaires passionnés pour
            collaborer sur des projets à fort impact. Que vous soyez une entreprise, une
            organisation ou un particulier, rejoignez-nous et faisons la différence.”
            </p>
        </div>

        <div class="container-fluid text-center parten">
            <!-- Image -->
            <div class="part-img">
                <img src="assets/img.jpeg" alt="Partenariat" class="img-fluid rounded mt-4 partnership-image">
            </div>

            <!-- Bouton -->
            <div class="part-button">
                <a href="./pages/contact.php" class="btn btn-primary mt-4 partnership-button">
                    POSSIBILITÉS DE PARTENARIAT
                </a>
            </div>

            <!-- Blocs Investir, Sponsoring et Dons -->
            <div class="right">
                <div class="partnership-box">
                    <h3 class="text-danger">Investir</h3>
                    <p>
                    “Investir dans notre association, c’est soutenir des projets innovants et
                    à fort impact pour le bien-être des communautés.”
                    </p>
                </div>

                <div class="partnership-box">
                    <h3 class="text-danger">Sponsoring</h3>
                    <p>
                    “En tant que sponsor, vous contribuerez à nos actions tout en bénéficiant
                    d’une visibilité accrue et d’une reconnaissance auprès de nos publics.”
                    </p>
                </div>

                <div class="partnership-box">
                    <h3 class="text-danger">Dons</h3>
                    <p>
                    “Chaque don, quel que soit son montant, fait une réelle différence. Votre
                    générosité est le moteur de notre réussite.”
                    </p>
                </div>
            </div>
        </div>
    </section>





        

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>

    <script src="index.js"></script>
    

    <div class="team-section text-center">
        <video autoplay muted loop>
            <source src="./assets/testvid.mp4" type="video/mp4">
        </video>

        <h2>Membres De L'Équipe</h2>
        <p>Votre Contribution Peut Aider À Trouver Une Solution</p>
        <div class="row">
            <div class="col team-member" data-aos="fade-up">
                <img src="./assets/mathias.jpg" alt="Mathias Bomboma"class="img-fluid rounded-circle">
                <h5>Mathias BOMBOMA</h5>
                <p>Administrateur Réseau</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
                
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="100">
                <img src="./assets/conseiller adjoint.jpg" alt="Wateba Othniel METSOKO" class="img-fluid rounded-circle">
                <h5>Wateba Othniel METSOKO</h5>
                <p>Conseiller Adjoint</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="200">
                <img src="./assets/pres.jpg" alt="Komlan Yannick KPOHOLO" class="img-fluid rounded-circle">
                <h5>Komlan Yannick KPOHOLO</h5>
                <p>Président</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="300">
                <img src="./assets/imm.jpg" alt="Mohamed Akourtando " class="img-fluid rounded-circle">
                <h5>Mohamed AKOURTANDO</h5>
                <p>Chef Finances</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="400">
                <img src="ge.png" alt="Mathias Bomboma" class="img-fluid rounded-circle">
                <h5>Mathias Bomboma</h5>
                <p>Administrateur Réseau</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="500">
                <img src="ge.png" alt="Mathias Bomboma" class="img-fluid rounded-circle">
                <h5>Valère Nato</h5>
                <p>Vice-Président</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="600">
                <img src="./assets/scread.jpg" alt=" Komi Elom François AGBESSI" class="img-fluid rounded-circle">
                <h5> Komi Elom François AGBESSI</h5>
                <p>Secrétaire Adjoint</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="700">
                <img src="./assets/valere2.jpg" alt="Valère NATO" class="img-fluid rounded-circle">
                <h5>Valère NATO</h5>
                <p>Vice-Président</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="800">
                <img src="./" alt="Mathias Bomboma" class="img-fluid rounded-circle">
                <h5>Mathias Bomboma</h5>
                <p>Administrateur Réseau</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="900">
                <img src="./assets/ge.jpg" alt="Godway HOUNKPATI" class="img-fluid rounded-circle">
                <h5>Godway HOUNKPATI</h5>
                <p>Ingénieur, Manager Projets Informatiques</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="1000">
                <img src="ge.png" alt="Shalom Gbékou" class="img-fluid rounded-circle">
                <h5>Shalom GBEKOU</h5>
                <p>Ingénieur Logiciel</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="1100">
                <img src="./assets/jules.jpg" alt="Jules Follykoe-Messanh" class="img-fluid rounded-circle">
                <h5>Jules FOLLYKOE-MESSANH</h5>
                <p>Ingénieur Logiciel</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="1200">
                <img src="./assets/elii.jpg" alt="Eliézer Moubarak RADJI" class="img-fluid rounded-circle">
                <h5>Eliézer Moubarak RADJI</h5>
                <p>Secrétaire Général</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="1300">
                <img src="./assets/Cyrille ATSOU-AKPOTO1.jpg" alt="Cyrille Atsou-Akpoto" class="img-fluid rounded-circle">
                <h5>Cyrille ATSOU-AKPOTO</h5>
                <p>UX-UI Designer</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col team-member" data-aos="fade-up" data-aos-delay="1400">
                <img src="./assets/josue.jpg" alt="Josue KOMADAN" class="img-fluid rounded-circle">
                <h5>Josue KOMADAN</h5>
                <p>UX-UI Designer</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <section style="background-color: white; padding: 40px 0; text-align: center;">
        <h2 style="font-weight: bold; margin-bottom: 20px;">Une Mission Contenant Des Projets Très Innovants Pour L’Avancement De La Communauté</h2>
        <p style="margin-bottom: 40px;">Ensemble, Bâtissons Un Avenir Meilleur; Profitable à toute la Communauté</p>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h3 class="counter" data-count="120000">0</h3>
                    <p>ABONNÉS</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h3 class="counter" data-count="85">0</h3>
                    <p>BÉNÉVOLES</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h3 class="counter" data-count="10">0</h3>
                    <p>DONATEURS</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h3 class="counter" data-count="19">0</h3>
                    <p>CAUSES</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GSAP et jQuery pour le décompte -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).data('count')
                }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });

       
    </script>

    <script>
         AOS.init();
    </script>

    
    <div class="partners-container">
            <h2>Nos Partenaires & Entreprises</h2>
            <div class="partners-slider">
                <div class="slider-content">
                    <div class="partner-logo">
                        <img src="./parteners_logos/o_prinx.png" alt="Logo 1">
                    </div>
                    <div class="partner-logo">
                        <img src="./parteners_logos/godbless.png" alt="Logo 2">
                    </div>
                 <!--   <div class="partner-logo">
                        <img src="decli.png" alt="Logo 3">
                    </div>
                    <div class="partner-logo">
                        <img src="logo.png" alt="Logo 4">
                    </div>
                    <div class="partner-logo">
                        <img src="decli.png" alt="Logo 1">  Dupliquer pour le défilement 
                    </div>
                    <div class="partner-logo">
                        <img src="logo.png" alt="Logo 2"> 
                    </div>-->

                    <div class="partner-logo" style>
                        <img src="./assets/authen-logo.png" alt="Logo 3">
                    </div>
                
                </div>
            </div>
        </div>

    
    

    
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
                            <a href="#" class="text-white" style="text-decoration: none; font-weight: bold;">Accueil</a>
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
            <img src="decli.png" alt="Logo secondaire" class="img-fluid" style="max-width: 150px;">
            
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
</body>
</html>
