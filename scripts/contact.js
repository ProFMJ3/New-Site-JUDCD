


document.addEventListener("DOMContentLoaded", () => {
    // Animation GSAP pour faire apparaître le formulaire progressivement
    gsap.from(".contact-container", {
        duration: 1,
        opacity: 0,
        y: 50,
        ease: "power3.out",
    });

    gsap.from(".form-group", {
        duration: 1,
        opacity: 0,
        x: -50,
        stagger: 0.2,
        ease: "power3.out",
    });

    gsap.from(".submit-btn", {
        duration: 1,
        opacity: 0,
        scale: 0.8,
        delay: 1,
        ease: "back.out(1.7)",
    });
});



    

        document.addEventListener("DOMContentLoaded", function () {
            // Animation du logo venant du haut
            gsap.from(".logo img", {
                y: -100,
                opacity: 0,
                duration: 1,
                ease: "bounce.out"
        });

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche l'envoi du formulaire

            // Récupérer les valeurs des champs
            const firstName = form.querySelector('input[name="FirstName"]').value;
            const email = form.querySelector('input[name="Email"]').value;
            const phoneNumber = form.querySelector('input[name="PhoneNumber"]').value;
            const message = form.querySelector('textarea[name="Message"]').value;

            // Vérification simple des champs
            if (!firstName || !email || !phoneNumber || !message) {
                alert('Veuillez remplir tous les champs.');
                return;
            }

            // Animation lors de la soumission
            gsap.to(form, {
                duration: 0.5,
                opacity: 0,
                scale: 0.9,
                onComplete: () => {
                    alert('Merci pour votre message, nous vous répondrons bientôt !');
                    form.reset();
                    gsap.to(form, {
                        duration: 0.5,
                        opacity: 1,
                        scale: 1,
                    });
                }
            });
        });
    });


