<?php get_header(); ?>

<section class="error-container">
    <div class="error-content">
        <div class="oops-container">
        <h2 class="error-title">Erreur 404</h2>
        <div class="bubbles-svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="72" height="104" viewBox="0 0 72 104" fill="none" aria-hidden="true" focusable="false">
                <circle cx="36" cy="36" r="36" fill="#A9CAEF"/>
                <ellipse cx="24.8661" cy="17.0721" rx="11.5052" ry="7.42268" transform="rotate(-23.714 24.8661 17.0721)" fill="white"/>
                <ellipse cx="18.3639" cy="34.3152" rx="6.1529" ry="3.96962" transform="rotate(-23.714 18.3639 34.3152)" fill="white"/>
                <circle cx="18.5566" cy="87.5876" r="15.5876" fill="#A9CAEF"/>
                <ellipse cx="13.7359" cy="79.3921" rx="4.98161" ry="3.21394" transform="rotate(-23.714 13.7359 79.3921)" fill="white"/>
                <ellipse cx="10.9205" cy="86.8581" rx="2.66414" ry="1.7188" transform="rotate(-23.714 10.9205 86.8581)" fill="white"/>
            </svg>
        </div>
        </div>
        <p class="error-texxt">Oops...Page non trouvée</p>
        <p class="error-text">Mais ne vous inquiétez pas, la page d'accueil est toujours là&nbsp;!</p>
        <a class="error-link btn" href="<?php echo home_url(); ?>">Retournez à la page d'accueil</a>
    </div>
</section>

<?php get_footer(); ?>

