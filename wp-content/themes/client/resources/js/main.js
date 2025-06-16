
const asbl = {
    init() {
        document.addEventListener('DOMContentLoaded', () => {
            this.enableJS();
            this.initCascadeAnimations();
            this.initObserverAnimation('.projets-header, .projet');
            this.scrollToHash();
            this.initIndicators();
            this.initJourneyAnimations();
        });
    },
    enableJS() {
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    },
    initObserverAnimation(selector, threshold = 0.1) {
        const elements = document.querySelectorAll(selector);
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold });
        elements.forEach(el => observer.observe(el));
    },
    initCascadeAnimations() {
        const cascadeGroups = [
            { selector: '.accueil-card', delay: 200 },
            { selector: '.value-item', delay: 200, addJsAnimate: true },
            { selector: '.project-card', delay: 200, addJsAnimate: true }
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
    },
    scrollToHash() {
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
    },
    initIndicators() {
        const cards = document.querySelectorAll('.activity-card');
        const indicators = document.querySelectorAll('.indicator');
        if (cards.length && indicators.length) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
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
            cards.forEach(card => observer.observe(card));
        }
    },
    initJourneyAnimations() {
        const morning = document.querySelector('.morning-section');
        const evening = document.querySelector('.evening-section');

        if (morning) morning.classList.add('js-animate-left');
        if (evening) evening.classList.add('js-animate-right');

        this.initObserverAnimation('.morning-section, .evening-section');
    }
};
asbl.init();