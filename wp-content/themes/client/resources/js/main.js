
document.addEventListener('DOMContentLoaded', () => {
    document.documentElement.classList.remove('no-js');
    document.documentElement.classList.add('js');

    // 2. Cascade animations (accueil-card, value-item)
    const cascadeGroups = [
        { selector: '.accueil-card', delay: 200 },
        { selector: '.value-item', delay: 200, addJsAnimate: true }
    ];

    cascadeGroups.forEach(group => {
        const elements = document.querySelectorAll(group.selector);

        if (group.addJsAnimate) {
            elements.forEach(el => el.classList.add('js-animate'));
        }

        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const index = Array.from(elements).indexOf(entry.target);
                    setTimeout(() => {
                        entry.target.classList.add('visible');
                    }, index * group.delay);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        elements.forEach(el => observer.observe(el));
    });

    // 3. Animation simple
    const simpleAnimated = document.querySelectorAll('.projets-header, .projet');
    const simpleObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    simpleAnimated.forEach(el => simpleObserver.observe(el));

    // 4. Scroll vers hash
    if (window.location.hash) {
        const id = window.location.hash.substring(1);
        const target = document.getElementById(id);
        if (target) {
            setTimeout(() => {
                const offset = 200;
                const topPos = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top: topPos, behavior: 'smooth' });
            }, 100);
        }
    }

    // 5. Indicateurs (activity-card)
    const cards = document.querySelectorAll('.activity-card');
    const indicators = document.querySelectorAll('.indicator');

    if (cards.length && indicators.length) {
        const indicatorObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const index = [...cards].indexOf(entry.target);
                    indicators.forEach(ind => ind.classList.remove('active'));
                    if (indicators[index]) indicators[index].classList.add('active');
                }
            });
        }, {
            root: document.querySelector('.activities-grid'),
            threshold: 0.5
        });

        cards.forEach(card => indicatorObserver.observe(card));
    }

    // 6. Animation spécifique pour morning et evening
    const morning = document.querySelector('.morning-section');
    const evening = document.querySelector('.evening-section');

    if (morning) morning.classList.add('js-animate-left');
    if (evening) evening.classList.add('js-animate-right');

    const journeyObserver = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                obs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    if (morning) journeyObserver.observe(morning);
    if (evening) journeyObserver.observe(evening);
});
