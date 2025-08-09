<?php

include '../db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $firstName = htmlspecialchars($_POST['FirstName']);
    $email = htmlspecialchars($_POST['Email']);
    $phoneNumber = htmlspecialchars($_POST['PhoneNumber']);
    $Messages = htmlspecialchars($_POST['Messages']);
    

    //echo "Prénom : " . $firstName . "<br>";
    //echo "Email : " . $email . "<br>";
    //echo "Numéro de téléphone : " . $phoneNumber . "<br>";
    //echo "Message : " . $Messages . "<br>";

    try {
        $stmt = $pdo->prepare("INSERT INTO contacts (first_name, email, phone_number, messages) VALUES (?, ?, ?, ?)");
        $stmt->execute([$firstName, $email, $phoneNumber, $Messages]);
        //echo "Données insérées avec succès dans la base de données.";
    } catch (PDOException $e) {
        echo "Erreur SQL : " . $e->getMessage();
    }


    // Vérification des champs obligatoires
    if (empty($firstName) || empty($email) || empty($phoneNumber) || empty($Messages)) {
        $error = "Tous les champs sont obligatoires.";
    } else {
        // Préparer l'email
        $to = "contactinfos@judcd.com"; // Adresse email où vous souhaitez recevoir les messages
        $subject = "Nouveau message de contact";
        $body = "Vous avez reçu un nouveau message.\n\n".
                "Nom: $firstName\n".
                "Email: $email\n". 
                "Numéro de téléphone: $phoneNumber\n".
                "Message: $Messages";
        
        // En-têtes de l'email
        $headers = "From: $email";

        // Envoyer l'email
        if (mail($to, $subject, $body, $headers)) {
           $success = "Votre message a été envoyé avec succès!";
        } else {
            $error = "Une erreur est survenue lors de l'envoi du message.";
        }
    
    }


}else {
   //echo "Veuillez remplir tous les champs.";
}


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
    <title>Entrez En Contact</title>
    <link rel="stylesheet" href="../styles/contact.css">
</head>
<body>


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
                        <li class="nav-item"><a class="nav-link " href="../index.php">Accueil</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                À Propos
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Notre Equipe</a></li>
                                <li><a class="dropdown-item" href="#">Actualités</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="../pages/blog.php">Blog</a></li>

                        <li class="nav-item"><a class="nav-link active" href="../pages/contact.php">Contact</a></li>

                        <li class="nav-item"><a class="nav-link " href="../pages/faq.php">FAQ</a></li>

                        <li class="nav-item">
                            <a class="btn btn-danger nav-link text-white px-3 py-2" href="#">DEVENEZ MEMBRE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <i class="fas fa-map-marker-alt icon"></i>
                    <h5 style= font-family: Arial, sans-serif;>BUREAU PRINCIPAL</h5>
                    <p>Glinkome; LOME-TOGO</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info">
                    <i class="fas fa-phone-alt icon"></i>
                    <h5 style= font-family: Arial, sans-serif;>NUMÉRO DE TÉLÉPHONE</h5>
                    <p>228 99 23 03 80 / 228 92 06 92 84</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info">
                    <i class="fas fa-fax icon"></i>
                    <h5 style= font-family: Arial, sans-serif;>FAX</h5>
                    <p>1-234-567-8901</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-info">
                    <i class="fas fa-envelope icon"></i>
                    <h5 style= font-family: Arial, sans-serif;>E-MAIL</h5>
                    <p>contactinfos@judcd.com</p>
                </div>
            </div>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <div class="contact_us_6">
        <div class="responsive-container-block container">
          <form class="form-box" action="../pages/contact.php" method="POST">
            <div class="container-block form-wrapper">
              <div class="mob-text">
                <p class="text-blk contactus-head">
                  Entrer en contact
                </p>
                <p class="text-blk contactus-subhead">
                 <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis diam lectus sapien.-->
                </p>
              </div>
              <div class="responsive-container-block" id="i2cbk">
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
                  <p class="text-blk input-title">
                    FIRST NAME
                  </p>
                  <input class="input" id="ijowk-3" name="FirstName" placeholder="Please enter first name...">
                </div>
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
                  <p class="text-blk input-title">
                    EMAIL
                  </p>
                  <input class="input" id="ipmgh-3" name="Email" placeholder="Please enter email...">
                </div>
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
                  <p class="text-blk input-title">
                    PHONE NUMBER
                  </p>
                  <input class="input" id="imgis-3" name="PhoneNumber" placeholder="Please enter phone number...">
                </div>
                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
                  <p class="text-blk input-title">
                    WHAT DO YOU HAVE IN MIND ?
                  </p>
                  <textarea class="textinput" id="i5vyy-3" name="Messages" placeholder="Please enter query..." ></textarea>
                </div>
              </div>
              <button class="submit-btn" id="w-c-s-bgc_p-1-dm-id-2">
                Soumettre
              </button>
            </div>
          </form>
          <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
            <div class="map-part">
              <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">
                Suivez Nous
              </p>
              <p class="text-blk map-contactus-subhead">
              Restez connectés avec nous sur les réseaux sociaux pour des mises à jour sur nos nouveaux livres, événements, et promotions exclusives ! Suivez-nous sur Twitter, Facebook, Google+, et Instagram..
              </p>
              <div class="social-media-links mob">
                <a class="social-icon-link" href="#" id="ix94i-2-2">
                    <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png" alt="Twitter">
                </a>
                <a class="social-icon-link" href="#" id="itixd">
                    <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png" alt="Facebook">

                </a>
                <a class="social-icon-link" href="#" id="izxvt">
                    <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png" alt="Google">
                </a>
                <a class="social-icon-link" href="#" id="izldf-2-2">
                    <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-instagram.png" alt="Instagram">
                </a>
              </div>
              <div class="map-box container-block">
              </div>
            </div>
          </div>
        </div>
    </div>

    <script src="../scripts/contact.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>

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


