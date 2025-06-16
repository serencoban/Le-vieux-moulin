<?php /* Template Name: Page "Nos foyers" */ ?>

<?php get_header(); ?>

    <section class="hero-section">
        <div class="hero-content">
            <h2 class="hero-title" role="heading"><?php the_title(); ?></h2>
            <p class="hero-subtitle"><?php echo esc_html(get_field('foyer_description')); ?></p>
        </div>
    </section>

    <section class="main-content">
        <div class="foyer-container">
            <article id="vm-foyer" class="foyer-card">
                <h3 class="foyer-title">
                    Le Vieux Moulin
                    <svg class="foyer-svg"  xmlns="http://www.w3.org/2000/svg" width="318" height="13" viewBox="0 0 318 13" fill="none" aria-hidden="true" focusable="false">
                        <path d="M3 6.11153C6.68631 3.80792 16.4919 0.543382 26.2237 5.91408C35.9556 11.2848 43.8259 8.28349 46.5445 6.11151C51.2446 4.00535 61.8335 1.01725 66.5888 5.91406C71.3442 10.8109 81.7488 8.67838 86.3567 7.00004C89.5822 4.82807 97.775 1.66884 104.742 6.40769C111.709 11.1465 123.128 8.18475 127.966 6.11151C133.173 3.84081 144.775 0.661833 149.531 6.11151C154.286 11.5612 164.414 8.97456 168.884 7.00004C172.386 4.5648 181.353 1.09623 189.205 6.70386C197.057 12.3115 206.945 9.23783 210.908 7.00004C214.686 5.05843 224.206 2.39941 232.058 7.29622C239.91 12.193 250.812 9.33656 255.282 7.29622C259.89 5.3217 270.35 2.49814 275.326 7.00004C280.303 11.5019 290.763 8.28348 295.37 6.11151C299.425 3.77499 309.028 0.622343 315 6.70386" stroke="#93DDCE" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                </h3>
                <div class="bubbles-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="104" viewBox="0 0 72 104" aria-hidden="true" focusable="false">
                        <circle cx="36" cy="36" r="36" />
                        <ellipse cx="24.8661" cy="17.0721" rx="11.5052" ry="7.42268" transform="rotate(-23.714 24.8661 17.0721)" />
                        <ellipse cx="18.3639" cy="34.3152" rx="6.1529" ry="3.96962" transform="rotate(-23.714 18.3639 34.3152)"/>
                        <circle cx="18.5566" cy="87.5876" r="15.5876" />
                        <ellipse cx="13.7359" cy="79.3921" rx="4.98161" ry="3.21394" transform="rotate(-23.714 13.7359 79.3921)"/>
                        <ellipse cx="10.9205" cy="86.8581" rx="2.66414" ry="1.7188" transform="rotate(-23.714 10.9205 86.8581)"/>
                    </svg>
                </div>
                <p class="foyer-description">
                    <?php echo esc_html(get_field('vm_description')); ?>
                </p>
                <?php
                $images = get_field('vm_gallerie');
                if ($images):
                    ?>
                    <div class="foyer-image">
                        <?php foreach ($images as $image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </article>
            <article id="edelweiss-foyer" class="foyer-card">
                <h3 class="foyer-title">
                    Edelweiss
                    <svg class="foyer-svg" xmlns="http://www.w3.org/2000/svg" width="318" height="13" viewBox="0 0 318 13" fill="none" aria-hidden="true" focusable="false">
                        <path d="M3 6.11153C6.68631 3.80792 16.4919 0.543382 26.2237 5.91408C35.9556 11.2848 43.8259 8.28349 46.5445 6.11151C51.2446 4.00535 61.8335 1.01725 66.5888 5.91406C71.3442 10.8109 81.7488 8.67838 86.3567 7.00004C89.5822 4.82807 97.775 1.66884 104.742 6.40769C111.709 11.1465 123.128 8.18475 127.966 6.11151C133.173 3.84081 144.775 0.661833 149.531 6.11151C154.286 11.5612 164.414 8.97456 168.884 7.00004C172.386 4.5648 181.353 1.09623 189.205 6.70386C197.057 12.3115 206.945 9.23783 210.908 7.00004C214.686 5.05843 224.206 2.39941 232.058 7.29622C239.91 12.193 250.812 9.33656 255.282 7.29622C259.89 5.3217 270.35 2.49814 275.326 7.00004C280.303 11.5019 290.763 8.28348 295.37 6.11151C299.425 3.77499 309.028 0.622343 315 6.70386" stroke="#93DDCE" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                </h3>
                <div class="star-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="163" height="170" viewBox="0 0 163 170" fill="none" aria-hidden="true" focusable="false">
                        <path d="M100.187 43.4732C104.727 39.109 112.198 43.1028 111.091 49.3015L107.416 69.8814C106.921 72.6535 108.267 75.4291 110.751 76.7566L129.188 86.6115C134.741 89.5798 133.251 97.92 127.014 98.7827L106.306 101.647C103.516 102.033 101.292 104.171 100.797 106.943L97.1222 127.523C96.0152 133.721 87.6229 134.882 84.875 129.217L75.7518 110.407C74.5229 107.873 71.8023 106.419 69.0129 106.805L48.3044 109.669C42.0671 110.532 38.3698 102.909 42.9089 98.5447L57.9788 84.0555C60.0087 82.1038 60.5511 79.0669 59.3222 76.5333L50.1989 57.7235C47.451 52.058 53.5582 46.1861 59.1114 49.1544L77.5484 59.0093C80.0319 60.3368 83.0876 59.9141 85.1176 57.9624L100.187 43.4732Z" fill="#F2D369"/>
                        <ellipse cx="97.8652" cy="55.6008" rx="7.96668" ry="4.58205" transform="rotate(125.919 97.8652 55.6008)" fill="white"/>
                        <ellipse cx="87.6325" cy="67.0951" rx="3.28111" ry="2.77749" transform="rotate(125.919 87.6325 67.0951)" fill="white"/>
                    </svg>
                </div>
                <p class="foyer-description">
                    <?php echo esc_html(get_field('edelweiss_description')); ?>
                </p>
                <?php
                $images = get_field('edelweiss_gallerie');
                if ($images):
                    ?>
                    <div class="foyer-image">
                        <?php foreach ($images as $image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </article>
        </div>
    </section>

    <section class="values-section">
            <h2 class="values-title">Les valeurs au sein du foyer</h2>
            <div class="values-grid">
                <div class="value-item">
                    <h3>L'éducation</h3>
                    <svg class="valeur-underline" xmlns="http://www.w3.org/2000/svg" width="125" height="12" viewBox="0 0 125 12" aria-hidden="true" focusable="false">
                        <path d="M3 2.5H122"/>
                        <path d="M19 9L114 3">
                    </svg>
                    <p><?php echo esc_html(get_field('education_texte')); ?></p>
                </div>
                <div class="value-item">
                    <h3>La socialisation</h3>
                    <svg class="valeur-underline" xmlns="http://www.w3.org/2000/svg" width="166" height="12" viewBox="0 0 166 12"  aria-hidden="true" focusable="false">
                        <path d="M3 3H163"/>
                        <path d="M24.5127 9.5L152.244 3.5"/>
                    </svg>
                    <p><?php echo esc_html(get_field('socialisation_texte')); ?></p>
                </div>
                <div class="value-item">
                    <h3>La responsabilisation</h3>
                    <svg class="valeur-underline" xmlns="http://www.w3.org/2000/svg" width="225" height="12" viewBox="0 0 225 12" aria-hidden="true" focusable="false">
                        <path d="M3 3H222"/>
                        <path d="M32.4453 9.5L207.277 3.5"/>
                    </svg>
                    <p><?php echo esc_html(get_field('responsable_texte')); ?></p>
                </div>
                <div class="value-item">
                    <h3>L'autonomie</h3>
                    <svg class="valeur-underline"  xmlns="http://www.w3.org/2000/svg" width="166" height="12" viewBox="0 0 166 12" aria-hidden="true" focusable="false">
                        <path d="M3 3H163"/>
                        <path d="M24.5127 9.5L152.244 3.5"/>
                    </svg>
                    <p><?php echo esc_html(get_field('autonomie_texte')); ?></p>
                </div>
            </div>
    </section>

   <section class="journey-section">
    <div class="morning-section">
        <div class="morning-content">
            <h2 class="morning-title">Comment se passe la matinée au foyer&nbsp;?</h2>
            <p><?php the_field('la_matinee'); ?></p>
        </div>
        <div class="soleil">
            <img src="/wp-content/themes/client/resources/img/soleil.png" alt="Dessin d'un soleil">
        </div>
    </div>
    <div class="evening-section">
        <div class="lune">
            <img src="/wp-content/themes/client/resources/img/lune.png" alt="Dessin d'une lune">
        </div>
            <div class="evening-content">
                <h2 class="evening-title">Comment se passe la soirée au foyer&nbsp;?</h2>
                <p><?php the_field('la_soiree'); ?></p>
            </div>
    </div>
   </section>

    <section class="activities-section">
        <div class="activities-container">
            <h2 class="activities-title">Quelques activités</h2>
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