document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.accueil-card');

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;

                // Trouver l’index de la carte
                const index = Array.from(cards).indexOf(target);

                // Ajouter un délai progressif
                setTimeout(() => {
                    target.classList.add('visible');
                }, index * 200); // 200ms d’écart entre chaque carte

                obs.unobserve(target);
            }
        });
    }, {
        threshold: 0.1
    });

    cards.forEach(card => observer.observe(card));
});

document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.projets-header, .projet');

    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                obs.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    elements.forEach(el => observer.observe(el));
});

document.addEventListener('DOMContentLoaded', function() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');

    // Ajouter les event listeners pour chaque en-tête d'accordéon
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const item = this.parentElement;
            const isActive = item.classList.contains('active');

            // Fermer tous les autres accordéons
            document.querySelectorAll('.accordion-item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });

            // Basculer l'accordéon actuel
            if (isActive) {
                item.classList.remove('active');
            } else {
                item.classList.add('active');
            }
        });
    });

    // Fermer l'accordéon si on clique en dehors
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.accordion-item')) {
            document.querySelectorAll('.accordion-item').forEach(item => {
                item.classList.remove('active');
            });
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash) {
        const id = window.location.hash.substring(1); // enlève le '#'
        const target = document.getElementById(id);

        if (target) {
            // attend un petit instant pour que tout soit chargé
            setTimeout(() => {
                const offset = 200; // distance à décaler
                const topPos = target.getBoundingClientRect().top + window.scrollY - offset;

                window.scrollTo({
                    top: topPos,
                    behavior: 'smooth'
                });
            }, 100);
        }
    }
});