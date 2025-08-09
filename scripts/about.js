document.addEventListener("DOMContentLoaded", function () {
    // Animation pour texte tombant
    gsap.fromTo(
        ".text-drop",
        { opacity: 0, y: -50 },
        { opacity: 1, y: 0, duration: 1, ease: "power2.out", stagger: 0.3 }
    );

    // Animation pour texte venant de la gauche
    gsap.fromTo(
        ".text-left",
        { opacity: 0, x: -100 },
        { opacity: 1, x: 0, duration: 1, ease: "power2.out", stagger: 0.3 }
    );

    // Animation pour texte venant de la droite
    gsap.fromTo(
        ".text-right",
        { opacity: 0, x: 100 },
        { opacity: 1, x: 0, duration: 1, ease: "power2.out", stagger: 0.3 }
    );
    

    // Animation pour zoom avant
    gsap.fromTo(
        ".text-zoom",
        { opacity: 0, scale: 0.8 },
        { opacity: 1, scale: 1, duration: 1, ease: "power2.out", stagger: 0.3 }
    );
});




        
document.addEventListener("DOMContentLoaded", function () {
    // Animation du logo venant du haut
    gsap.from(".logo img", {
        y: -100,
        opacity: 0,
        duration: 1,
        ease: "bounce.out"
    });
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


 // GSAP Animation
        gsap.from(".video-intro", {
            duration: 1,
            opacity: 0,
            y: -50,
            ease: "power2.out",
            delay: 0.5
        });

        gsap.from(".video-container", {
            duration: 1,
            opacity: 0,
            scale: 0.8,
            ease: "back.out(1.7)",
            delay: 1
        });

        gsap.from(".dg-video", {
            duration: 1,
            y: 50,
            opacity: 0,
            ease: "power2.out",
            delay: 1.5
        });

        // Interaction with the DG video
        const dgVideo = document.querySelector('.dg-video');
        
        dgVideo.addEventListener('click', () => {
            if (dgVideo.paused) {
                dgVideo.play();
            } else {
                dgVideo.pause();
            }
        });

        // Scroll reveal effect
        const videoSection = document.querySelector('.video-section');
        window.addEventListener('scroll', () => {
            const rect = videoSection.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                gsap.to(videoSection, {
                    opacity: 1,
                    duration: 1
                });
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            const videoContainer = document.querySelector(".video-container");
            const dgVideo = document.getElementById('dgVideo');
            const playButton = document.getElementById('playButton');
        
            // Rendre le conteneur visible avant d'animer l'opacité
            videoContainer.style.visibility = 'visible';
        
            // Animer l'apparition de la vidéo
            gsap.to(videoContainer, {
                duration: 1,
                opacity: 1,
                ease: "power2.out",
                delay: 0.5
            });
        
            gsap.from(".video-intro", {
                duration: 1,
                opacity: 0,
                y: -50,
                ease: "power2.out",
                delay: 0.5
            });
        
            gsap.from(dgVideo, {
                duration: 1,
                y: 50,
                opacity: 0,
                ease: "power2.out",
                delay: 1.5
            });
        
            // Gestion du bouton de lecture
            playButton.style.display = 'block'; // Afficher le bouton de lecture
        
            playButton.addEventListener('click', () => {
                if (dgVideo.paused) {
                    dgVideo.play();
                    playButton.style.display = 'none'; // Masquer le bouton lorsque la vidéo joue
                }
            });
        
            dgVideo.addEventListener('pause', () => {
                playButton.style.display = 'block'; // Afficher le bouton lorsque la vidéo est mise en pause
            });
        
            dgVideo.addEventListener('ended', () => {
                playButton.style.display = 'block'; // Afficher le bouton à la fin de la vidéo
            });
        });