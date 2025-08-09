// Animations avec GSAP
document.addEventListener("DOMContentLoaded", function () {
    // Animation du logo venant du haut
    gsap.from(".logo img", {
        y: -100,
        opacity: 0,
        duration: 1,
        ease: "bounce.out"
});

    
document.addEventListener("DOMContentLoaded", function () {
    const dropdownToggle = document.querySelector('#navbarDropdown');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownToggle.addEventListener('click', function (e) {
        e.preventDefault();
        dropdownMenu.classList.toggle('show');
    });
});

const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
    dropdown.addEventListener('mouseenter', () => {
        dropdown.querySelector('.dropdown-menu').style.display = 'block';
    });

    dropdown.addEventListener('mouseleave', () => {
        dropdown.querySelector('.dropdown-menu').style.display = 'none';
    });
});

// Attendre que le contenu soit chargé
window.onload = function() {
    // Sélectionner tous les membres de l'équipe
    const teamMembers = document.querySelectorAll('.team-member');

    // Animer chaque membre de l'équipe
    teamMembers.forEach((member, index) => {
        gsap.to(member, {
            opacity: 1,
            y: 0,
            duration: 0.5,
            delay: index * 0.2, // Délai pour chaque membre
            ease: "power1.out"
        });
    });
};



document.addEventListener("DOMContentLoaded", () => {
    // Animation de l'image (venant de la gauche)
    gsap.from(".partnership-image", {
      duration: 1.5,
      x: -300,
      opacity: 0,
      ease: "power4.out",
    });
  
    // Animation du texte principal (venant du haut)
    gsap.from(".partnership-title", {
      duration: 1.5,
      y: -50,
      opacity: 0,
      delay: 0.2,
      ease: "power4.out",
    });
  
    // Animation du paragraphe (venant de la droite)
    gsap.from(".partnership-text", {
      duration: 1.5,
      x: 300,
      opacity: 0,
      delay: 0.4,
      ease: "power4.out",
    });
  
    // Animation du bouton (zoom et fade-in)
    gsap.from(".partnership-button", {
      duration: 1.5,
      scale: 0.8,
      opacity: 0,
      delay: 0.6,
      ease: "power4.out",
    });
  
    // Animation des blocs Investir, Sponsoring et Dons (venant du bas)
    gsap.from(".partnership-box", {
      duration: 1.5,
      y: 100,
      opacity: 0,
      delay: 0.8,
      stagger: 0.3, // Animation décalée pour chaque bloc
      ease: "power4.out",
    });
    

    // Animation des titres et textes de la section hero
    // Animation pour le titre
    gsap.from(".hero-title", {
      duration: 1,
      y: -50,
      opacity: 0,
      ease: "bounce"
  });

    // Animation pour le texte
    gsap.from(".hero-text", {
        duration: 1,
        x: -50,
        opacity: 0,
        delay: 0.5, // Délai après le titre
        ease: "power1.inOut"
    });

    // Animation pour le bouton
    gsap.from("#joinButton", {
        duration: 1,
        scale: 0,
        opacity: 0,
        delay: 1, // Délai après le texte
        ease: "elastic.out(1, 0.3)"
    });
  
  });
  
});






document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider-content');
    const logos = document.querySelectorAll('.partner-logo');
    const logoWidth = logos[0].offsetWidth;
    
    // Cloner les logos pour un défilement sans interruption
    logos.forEach(logo => {
        const clone = logo.cloneNode(true);
        slider.appendChild(clone);
    });
});


