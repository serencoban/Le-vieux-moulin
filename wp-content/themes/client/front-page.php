<?php /* Template Name: Page "Accueil" */ ?>

<?php get_header(); ?>
    <section class="header">
        <div class="header_container">
            <h2 class="main_title"><?php echo get_field('vm_title') ?></h2>
            <div class="underline">
                <svg xmlns="http://www.w3.org/2000/svg" width="510" height="18" viewBox="0 0 510 18" fill="none">
                    <path d="M2 8.33118C10.1432 3.64392 31.8042 -2.9986 53.3024 7.92942C74.8005 18.8574 92.1863 12.7506 98.1919 8.33114C108.575 4.04564 131.966 -2.03441 142.471 7.92937C152.976 17.8932 175.96 13.5541 186.139 10.1391C193.264 5.71966 211.362 -0.708581 226.753 8.93379C242.144 18.5762 267.368 12.5497 278.056 8.33114C289.558 3.71084 315.189 -2.75758 325.693 8.33114C336.198 19.4199 358.572 14.1567 368.445 10.1391C376.181 5.18398 395.99 -1.8737 413.335 9.53644C430.68 20.9466 452.524 14.6924 461.278 10.1391C469.625 6.18839 490.655 0.777951 508 10.7417"
                          stroke="#A9CAEF"
                          stroke-width="3.5"
                          stroke-linecap="round"
                          class="draw-path"/>
                </svg>
            </div>
            <p><?php echo get_field('main_description') ?></p>
            <a class="btn" href="">Nous soutenir</a>
        </div>
    </section>
    <section class="maisons_container">
        <div class="info_maisons">
            <h2>Découvrez nos lieux de vies</h2>
            <p><?php echo get_field('description_maison') ?></p>
        </div>
        <div class="maisons_cards">
            <div class="maison vm">
                <span>Le Vieux Moulin</span>
                <a href="<?php echo get_permalink(get_page_by_path('nos-foyers')) ?>">
                <?php
                    $image = get_field('vm');
                    if ($image) {
                        echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                    }
                    ?>
                </a>
            </div>
            <div class="maison edelweiss">
                    <span>Edelweiss</span>
                <a href="<?php echo get_permalink(get_page_by_path('nos-foyers'))?>">

                <?php
                        $image = get_field('edelweiss');
                        if ($image) {
                            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                        }
                        ?>
                    </a>
            </div>
        </div>
    </section>
    <section class="valeur-container">
        <h2>Notre but est d’offrir un accueil</h2>
        <div class="accueil-cards">
            <div class="accueil-card">
                <div class="card-header">
                    <img src="wp-content/themes/client/resources/img/materiel.png" alt="Icone Matériel" class="icon" />
                    <h3 class="highlight-title">Matériel</h3>
                </div>
                <p><?php echo get_field('materiel') ?></p>
            </div>
            <div class="accueil-card">
                <div class="card-header">
                    <img src="wp-content/themes/client/resources/img/educatif.png" alt="Icone Educatif" class="icon" />
                    <h3 class="highlight-title">Educatif</h3>
                </div>
                <p><?php echo get_field('educatif') ?></p>
            </div>
            <div class="accueil-card">
                <div class="card-header">
                    <img src="wp-content/themes/client/resources/img/psycho.png" alt="Icone Psychologique" class="icon" />
                    <h3 class="highlight-title">Psychologique</h3>
                </div>
                <p><?php echo get_field('psychologique') ?></p>
            </div>
        </div>
    </section>

<section class="projet-container">
    <div class="projets-grid">
        <div class="projets-header from-left">
            <h2>Les projets pour nos enfants</h2>
            <p>Des projets concrets pour améliorer leur lieu de vie.</p>
            <a class="btn" href="">Découvrez tous nos projets</a>
        </div>

        <article class="projet isolation from-left">
            <a href=""></a>
            <div>
                <div>
                    <h3>Isolation du bâtiment</h3>
                    <p>La vie en communauté peut être difficile, la chambre est un refuge essentiel, un lieu de sécurité.</p>
                </div>
                <figure>
                    <img class="project_img" src="https://images.unsplash.com/photo-1582719188393-bb71ca45dbb9?w=800&h=600&fit=crop" alt="Isolation du bâtiment">
                </figure>
            </div>
        </article>

        <article class="projet jardin from-right">
            <a href=""></a>
            <div>
                <div>
                    <h3>Aménagement du jardin</h3>
                    <p>Le jeu est une réelle interface d'observation des compétences de l'enfants.</p>
                </div>
                <figure>
                    <img class="project_img" src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&h=600&fit=crop" alt="Aménagement du jardin">
                </figure>
            </div>
        </article>

        <article class="projet renovation from-right">
            <a href=""></a>
            <div>
                <div>
                    <h3>Rénover les chambres</h3>
                    <p>La vie en communauté peut être difficile, la chambre est un refuge essentiel, un lieu de sécurité.</p>
                </div>
                <figure>
                    <img class="project_img" src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800&h=600&fit=crop" alt="Rénover les chambres">
                </figure>
            </div>
        </article>
    </div>
</section>

    <section class="news">
        <div class="news_container">
            <h2>Quoi de neuf ?</h2>
            <div>
                <div class="news_post">
                    <p>Name</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris  porttitor venenatis pretium. Praesent sit amet mi ac felis ullamcorper  scelerisque. </p>
                </div>
                <a class="btn" href="">Voir toutes les actualités</a>
            </div>
        </div>
        <div class="moulin">
            <svg class="moulin-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160.356 252.646" width="300" height="300">
                <g id="uuid-0830fc4c-5524-46f1-a886-19f9d4fda351" data-name="vent">
                    <path d="M30.789,103.526L2.981,225.419c-2.675,11.728,6.139,22.938,18.167,23.104l117.541,1.621c11.698.161,20.731-10.235,18.939-21.796l-19.828-127.875c-1.497-9.654-10.104-16.577-19.855-15.968l-69.905,4.361c-8.365.522-15.387,6.49-17.251,14.661Z" fill="#a9caec" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width="5"/>
                    <path d="M73.425,11.605L11.701,77.998c-5.796,6.234-1.095,15.995,7.704,15.995h126.402c9.786,0,15.026-10.846,8.596-17.793L94.644,11.627c-5.606-6.057-15.598-6.068-21.218-.022Z" fill="#98d1c7" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width="5"/>
                    <ellipse cx="62.711" cy="155.167" rx="15.223" ry="21.372" fill="#1d1d1b"/>
                    <ellipse cx="102.702" cy="155.167" rx="15.223" ry="21.372" fill="#1d1d1b"/>
                    <ellipse cx="59.098" cy="149.049" rx="7.226" ry="8.43" fill="#fff"/>
                    <ellipse cx="65.522" cy="161.605" rx="3.613" ry="4.215" fill="#fff"/>
                    <ellipse cx="101.296" cy="148.171" rx="7.226" ry="8.43" fill="#fff"/>
                    <ellipse cx="107.72" cy="160.728" rx="3.613" ry="4.215" fill="#fff"/>
                    <path d="M72.007,185.346s7.355,10.589,20.283.746" fill="none" stroke="#000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="5"/>
                </g>
                <g id="uuid-7961b3a0-38d8-496c-a583-1333ef75db81" data-name="Calque 2">
                    <path d="M87.851,54.995S130.516,4.928,134.435,4.928s24.816,24.38,22.639,27.428c-2.177,3.048-58.58,37.006-58.58,37.006" fill="#f2d368" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width="5"/>
                    <path d="M77.934,83.729s-42.665,50.066-46.584,50.066-24.816-24.38-22.639-27.428c2.177-3.048,58.58-37.006,58.58-37.006" fill="#f2d368" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width="5"/>
                    <path d="M79.966,52.566S37.301,2.5,33.383,2.5,8.567,26.88,10.744,29.928c2.177,3.048,58.58,37.006,58.58,37.006" fill="#f2d368" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width="5"/>
                    <path d="M99.405,71.261s54.252,37.198,54.662,41.095-21.653,27.228-24.911,25.382c-3.258-1.846-42.926-54.391-42.926-54.391" fill="#f2d368" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width="5"/>
                    <circle cx="83.061" cy="68.411" r="15.02" fill="#222443" stroke="#1d1d1b" stroke-miterlimit="10" stroke-width="5"/>
                </g>
            </svg>
        </div>
    </section>

<section class="faq-section">
    <div class="faq-header">
        <h2 class="faq-title">FAQ</h2>
        <svg class="wave-svg" xmlns="http://www.w3.org/2000/svg" width="510" height="18" viewBox="0 0 510 18" fill="none">
            <path d="M2 8.33118C10.1432 3.64392 31.8042 -2.9986 53.3024 7.92942C74.8005 18.8574 92.1863 12.7506 98.1919 8.33114C108.575 4.04564 131.966 -2.03441 142.471 7.92937C152.976 17.8932 175.96 13.5541 186.139 10.1391C193.264 5.71966 211.362 -0.708581 226.753 8.93379C242.144 18.5762 267.368 12.5497 278.056 8.33114C289.558 3.71084 315.189 -2.75758 325.693 8.33114C336.198 19.4199 358.572 14.1567 368.445 10.1391C376.181 5.18398 395.99 -1.8737 413.335 9.53644C430.68 20.9466 452.524 14.6924 461.278 10.1391C469.625 6.18839 490.655 0.777951 508 10.7417"
                  stroke="#A9CAEF"
                  stroke-width="3.5"
                  stroke-linecap="round"/>
        </svg>
    </div>

    <div class="accordion-container">
        <div class="accordion-item">
            <div class="accordion-header">
                <span class="accordion-title">Ressources téléchargeables</span>
                <svg class="accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div class="accordion-content">
                <div class="accordion-body">
                    <a href="doc.pdf" class="download-link">
                        <svg class="download-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Télécharger le document PDF
                    </a>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header">
                <span class="accordion-title">Ressources téléchargeables</span>
                <svg class="accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div class="accordion-content">
                <div class="accordion-body">
                    <a href="doc.pdf" class="download-link">
                        <svg class="download-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Télécharger le guide complet
                    </a>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <div class="accordion-header">
                <span class="accordion-title">Ressources téléchargeables</span>
                <svg class="accordion-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
            <div class="accordion-content">
                <div class="accordion-body">
                    <a href="doc.pdf" class="download-link">
                        <svg class="download-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Télécharger les ressources additionnelles
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>





