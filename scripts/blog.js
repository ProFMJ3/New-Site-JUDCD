document.addEventListener("DOMContentLoaded", function () {
    // Animation du logo venant du haut
    gsap.from(".logo img", {
        y: -100,
        opacity: 0,
        duration: 1,
        ease: "bounce.out"
    });
});
  