<?php /* Template Name: Page "Nos foyers" */ ?>

<?php get_header(); ?>

    <section class="hero-section">
        <div class="hero-content">
            <h2 class="hero-title">Nos foyers</h2>
            <p class="hero-subtitle"><?php echo esc_html(get_field('foyer_description')); ?></p>
        </div>
    </section>

    <section class="main-content">
        <div class="foyer-container">
            <article id="vm-foyer" class="foyer-card">
                <h3 class="foyer-title">
                    Le Vieux Moulin
                    <svg class="foyer-svg"  xmlns="http://www.w3.org/2000/svg" width="318" height="13" viewBox="0 0 318 13" fill="none">
                        <path d="M3 6.11153C6.68631 3.80792 16.4919 0.543382 26.2237 5.91408C35.9556 11.2848 43.8259 8.28349 46.5445 6.11151C51.2446 4.00535 61.8335 1.01725 66.5888 5.91406C71.3442 10.8109 81.7488 8.67838 86.3567 7.00004C89.5822 4.82807 97.775 1.66884 104.742 6.40769C111.709 11.1465 123.128 8.18475 127.966 6.11151C133.173 3.84081 144.775 0.661833 149.531 6.11151C154.286 11.5612 164.414 8.97456 168.884 7.00004C172.386 4.5648 181.353 1.09623 189.205 6.70386C197.057 12.3115 206.945 9.23783 210.908 7.00004C214.686 5.05843 224.206 2.39941 232.058 7.29622C239.91 12.193 250.812 9.33656 255.282 7.29622C259.89 5.3217 270.35 2.49814 275.326 7.00004C280.303 11.5019 290.763 8.28348 295.37 6.11151C299.425 3.77499 309.028 0.622343 315 6.70386" stroke="#93DDCE" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                </h3>
                <p class="foyer-description">
                    <?php echo esc_html(get_field('vm_description')); ?>
                </p>
                <div class="foyer-image">
                    <img src="/wp-content/themes/client/resources/img/15.jpg" alt="">
                    <img src="/wp-content/themes/client/resources/img/12.jpg" alt="">
                    <img src="/wp-content/themes/client/resources/img/11.jpg" alt="">
                    <img src="/wp-content/themes/client/resources/img/10.jpg" alt="">
                    <img src="/wp-content/themes/client/resources/img/05dc1f6c-4dbb-4c09-b16f-1fbc2e510740.jpg" alt="">
                </div>
            </article>
            <article id="edelweiss-foyer" class="foyer-card">
                <h3 class="foyer-title">
                    Edelweiss
                    <svg class="foyer-svg" xmlns="http://www.w3.org/2000/svg" width="318" height="13" viewBox="0 0 318 13" fill="none">
                        <path d="M3 6.11153C6.68631 3.80792 16.4919 0.543382 26.2237 5.91408C35.9556 11.2848 43.8259 8.28349 46.5445 6.11151C51.2446 4.00535 61.8335 1.01725 66.5888 5.91406C71.3442 10.8109 81.7488 8.67838 86.3567 7.00004C89.5822 4.82807 97.775 1.66884 104.742 6.40769C111.709 11.1465 123.128 8.18475 127.966 6.11151C133.173 3.84081 144.775 0.661833 149.531 6.11151C154.286 11.5612 164.414 8.97456 168.884 7.00004C172.386 4.5648 181.353 1.09623 189.205 6.70386C197.057 12.3115 206.945 9.23783 210.908 7.00004C214.686 5.05843 224.206 2.39941 232.058 7.29622C239.91 12.193 250.812 9.33656 255.282 7.29622C259.89 5.3217 270.35 2.49814 275.326 7.00004C280.303 11.5019 290.763 8.28348 295.37 6.11151C299.425 3.77499 309.028 0.622343 315 6.70386" stroke="#93DDCE" stroke-width="5" stroke-linecap="round"/>
                    </svg></h3>
                <p class="foyer-description">
                    <?php echo esc_html(get_field('edelweiss_description')); ?>
                </p>
                <div class="foyer-image">
                    <img src="/wp-content/themes/client/resources/img/15.jpg" alt="">
                    <img src="/wp-content/themes/client/resources/img/12.jpg" alt="">
                    <img src="/wp-content/themes/client/resources/img/11.jpg" alt="">
                    <img src="/wp-content/themes/client/resources/img/10.jpg" alt="">
                    <img src="/wp-content/themes/client/resources/img/05dc1f6c-4dbb-4c09-b16f-1fbc2e510740.jpg" alt="">
                </div>
            </article>
        </div>
    </section>

    <section class="values-section">
            <h3 class="values-title">Les valeurs au sein du foyer</h3>
            <div class="values-grid">
                <div class="value-item">
                    <h4>L'éducation</h4>
                    <svg class="valeur-underline" xmlns="http://www.w3.org/2000/svg" width="125" height="12" viewBox="0 0 125 12" fill="none">
                        <path d="M3 2.5H122" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                        <path d="M19 9L114 3" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                    <p><?php echo esc_html(get_field('education_texte')); ?></p>
                </div>
                <div class="value-item">
                    <h4>La socialisation</h4>
                    <svg class="valeur-underline" xmlns="http://www.w3.org/2000/svg" width="166" height="12" viewBox="0 0 166 12" fill="none">
                        <path d="M3 3H163" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                        <path d="M24.5127 9.5L152.244 3.5" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                    <p><?php echo esc_html(get_field('socialisation_texte')); ?></p>                </div>
                <div class="value-item">
                    <h4>La responsabilisation</h4>
                    <svg class="valeur-underline" xmlns="http://www.w3.org/2000/svg" width="225" height="12" viewBox="0 0 225 12" fill="none">
                        <path d="M3 3H222" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                        <path d="M32.4453 9.5L207.277 3.5" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                    <p><?php echo esc_html(get_field('responsable_texte')); ?></p>                </div>
                <div class="value-item">
                    <h4>L'autonomie</h4>
                    <svg class="valeur-underline"  xmlns="http://www.w3.org/2000/svg" width="166" height="12" viewBox="0 0 166 12" fill="none">
                        <path d="M3 3H163" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                        <path d="M24.5127 9.5L152.244 3.5" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                    <p><?php echo esc_html(get_field('autonomie_texte')); ?></p>
                </div>
            </div>
    </section>

   <section class="journey-section">
    <div class="morning-section">
        <div class="morning-content">
            <h2 class="morning-title">Comment se passe la matinée au foyer ?</h2>
            <p><?php echo esc_html(get_field('la_matinee')); ?></p>
        </div>
        <div class="soleil">
            <img src="/wp-content/themes/client/resources/img/soleil.png" alt="">
        </div>
    </div>
    <div class="evening-section">
        <div class="lune">
            <img src="/wp-content/themes/client/resources/img/lune.png" alt="">
        </div>
            <div class="evening-content">
                <h2 class="evening-title">Comment se passe la soirée au foyer ?</h2>
                <p><?php echo esc_html(get_field('la_soiree')); ?></p>
            </div>
    </div>
   </section>

    <section class="activities-section">
        <div class="activities-container">
            <h2 class="activities-title">Quelques activités et voyages</h2>
            <div class="activities-grid">
                <?php
                $args = array(
                    'post_type' => 'activités',
                    'posts_per_page' => 3
                );
                $activites_query = new WP_Query($args);
                if ($activites_query->have_posts()) :
                    while ($activites_query->have_posts()) : $activites_query->the_post(); ?>
                        <div class="activity-card">
                            <?php
                            $image = get_field('img_voyage');


                            if ($image): ?>
                                <div class="activity-img">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                            <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_field('text-voyage'); ?></p>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Aucune activité disponible pour le moment.</p>';
                endif;
                ?>
            </div>
            <div class="activities-indicators">
                <span class="indicator active"></span>
                <span class="indicator"></span>
                <span class="indicator"></span>
            </div>
        </div>
    </section>
<?php get_footer(); ?>