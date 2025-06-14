<?php /* Template Name: Page "Nous soutenir" */ ?>

<?php get_header(); ?>
    <div class="donation-wrapper">
    <div class="donation-background"></div>
    <section class="hero-section">
        <div>
            <h2 class="hero-title">Nous soutenir</h2>
            <p>Votre générosité change leur quotidien. Ensemble, faisons la différence&nbsp;.</p>
        </div>
    </section>
    <section class="donation">
        <div class="donation-container">
            <div class="left">
                <div>
                    <h3>Don financier</h3>
                    <div class="left-flex">
                        <div class="left-name">
                            <b>Nom</b>
                            <p><?php echo get_field('nom_du_compte')?></p>
                        </div>
                        <div class="left-iban">
                            <b>IBAN</b>
                            <p><?php echo get_field('numero_du_compte')?></p>

                        </div>
                    </div>
                </div>
                <div class="qr">
                    <img src="<?= get_field('qr_code')['url']; ?>"  alt="QR code">
                    <p>Ou alors, scannez ce code QR&nbsp;!</p>
                    <div class="donation-text">
                        <small>*Tous dons de 40€ et plus peuvent être exonérés d'impôts ainsi que les ordres permanents mensuels&nbsp;.</small>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="right-mat">
                    <h3>Don matériel</h3>
                    <p>Un jouet, un vêtement, un cartable… Vos dons font toute la différence&nbsp;.</p>
                </div>
                <div class="right-link">
                    <a class="btn" href="<?php echo get_permalink(58); ?>">Nous contacter</a>
                </div>
            </div>
        </div>
    </section>
    </div>
    <section class="grace-a-vous">
        <div class="grace-grid">
            <h3 class="titre">
                <span class="surlignable">
                    Grâce à vous&nbsp;,
                    <svg class="surlignement" xmlns="http://www.w3.org/2000/svg" width="278" height="13" viewBox="0 0 278 13" fill="none">
                        <path d="M3 6.11153C6.21371 3.80792 14.7622 0.543382 23.2463 5.91408C31.7305 11.2848 38.5918 8.28349 40.9619 6.11151C45.0594 4.00535 54.2907 1.01725 58.4364 5.91406C62.5821 10.8109 71.6528 8.67838 75.6699 7.00004C78.4819 4.82807 85.6244 1.66884 91.6983 6.40769C97.7722 11.1465 107.727 8.18475 111.945 6.11151C116.484 3.84081 126.599 0.661833 130.745 6.11151C134.89 11.5612 143.72 8.97456 147.617 7.00004C150.67 4.5648 158.487 1.09623 165.332 6.70386C172.177 12.3115 180.798 9.23783 184.253 7.00004C187.547 5.05843 195.846 2.39941 202.692 7.29622C209.537 12.193 219.041 9.33656 222.938 7.29622C226.955 5.3217 236.074 2.49814 240.412 7.00004C244.751 11.5019 253.87 8.28348 257.887 6.11151C261.422 3.77499 269.794 0.622343 275 6.70386" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                </span>nos enfants vivent comme les autres enfants&nbsp;!
            </h3>
            <div class="bubbles-svg">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="104" viewBox="0 0 72 104">
                    <circle cx="36" cy="36" r="36" />
                    <ellipse cx="24.8661" cy="17.0721" rx="11.5052" ry="7.42268" transform="rotate(-23.714 24.8661 17.0721)"/>
                    <ellipse cx="18.3639" cy="34.3152" rx="6.1529" ry="3.96962" transform="rotate(-23.714 18.3639 34.3152)"/>
                    <circle cx="18.5566" cy="87.5876" r="15.5876"/>
                    <ellipse cx="13.7359" cy="79.3921" rx="4.98161" ry="3.21394" transform="rotate(-23.714 13.7359 79.3921)"/>
                    <ellipse cx="10.9205" cy="86.8581" rx="2.66414" ry="1.7188" transform="rotate(-23.714 10.9205 86.8581)"/>
                </svg>
            </div>
            <?php
            $images = get_field('grace_a_vous');
            if ($images):
                ?>
                <div class="foyer-image">
                    <?php foreach ($images as $image): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="engagements">
        <div class="benevole">
            <h3>Devenir bénévole</h3>
            <div class="role">
                <div class="role-text">
                    <h4><?php echo get_field('benevole_1')?></h4>
                    <p><?php echo get_field('benevole_1_texte')?></p>
                </div>
                <div class="role-btn">
                    <a class="voir-plus-btn" href="<?php echo get_permalink(58); ?>">
                        <div class="voir-plus">
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16" fill="none">
                                <path d="M24.7071 8.70711C25.0976 8.31658 25.0976 7.68342 24.7071 7.29289L18.3431 0.928932C17.9526 0.538408 17.3195 0.538408 16.9289 0.928932C16.5384 1.31946 16.5384 1.95262 16.9289 2.34315L22.5858 8L16.9289 13.6569C16.5384 14.0474 16.5384 14.6805 16.9289 15.0711C17.3195 15.4616 17.9526 15.4616 18.3431 15.0711L24.7071 8.70711ZM0 8V9H24V8V7H0V8Z" fill="#222443"/>
                            </svg>
                            <span class="voir-text">Voir plus</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="role">
                <div class="role-text">
                    <h4><?php echo get_field('benevole_2')?></h4>
                    <p><?php echo get_field('benevole_2_texte')?></p>
                </div>
                <div class="role-btn">
                    <a class="voir-plus-btn" href="<?php echo get_permalink(58); ?>">
                        <div class="voir-plus">
                            <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16" fill="none">
                                <path d="M24.7071 8.70711C25.0976 8.31658 25.0976 7.68342 24.7071 7.29289L18.3431 0.928932C17.9526 0.538408 17.3195 0.538408 16.9289 0.928932C16.5384 1.31946 16.5384 1.95262 16.9289 2.34315L22.5858 8L16.9289 13.6569C16.5384 14.0474 16.5384 14.6805 16.9289 15.0711C17.3195 15.4616 17.9526 15.4616 18.3431 15.0711L24.7071 8.70711ZM0 8V9H24V8V7H0V8Z" fill="#222443"/>
                            </svg>
                            <span class="voir-text">Voir plus</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="famille">
            <h3><?php echo get_field('autre_benevole')?></h3>
            <div class="role-text">
                <p><?php echo get_field('autre_benevole_texte')?></p>
                <a class="voir-plus-btn" href="<?php echo get_permalink(58); ?>">
                    <div class="voir-plus">
                        <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16" fill="none">
                            <path d="M24.7071 8.70711C25.0976 8.31658 25.0976 7.68342 24.7071 7.29289L18.3431 0.928932C17.9526 0.538408 17.3195 0.538408 16.9289 0.928932C16.5384 1.31946 16.5384 1.95262 16.9289 2.34315L22.5858 8L16.9289 13.6569C16.5384 14.0474 16.5384 14.6805 16.9289 15.0711C17.3195 15.4616 17.9526 15.4616 18.3431 15.0711L24.7071 8.70711ZM0 8V9H24V8V7H0V8Z" fill="#222443"/>
                        </svg>
                        <span class="voir-text">Voir plus</span>
                    </div>
                </a>
                <?php $image = get_field('autre_benevole_image'); ?>
                <?php if ($image): ?>
                    <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt'] ?: 'Image illustrant la section') ?>">
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="partenaire">
    <div class="partenaire-container">
    <h3>Merci à nos partenaires qui nous soutiennent&nbsp;!</h3>
    <div class="partenaire-wrapper">
    <div class="partenaire-logo">
        <?php if (have_rows('partenaire')): ?>
            <?php while (have_rows('partenaire')): the_row();
                $logo = get_sub_field('partenaires');
                if ($logo): ?>
                    <img src="<?= esc_url($logo['url']) ?>" alt="<?= esc_attr($logo['alt']) ?>">
                <?php endif; ?>
            <?php endwhile; ?>
            <?php reset_rows(); while (have_rows('partenaire')): the_row();
                $logo = get_sub_field('partenaires');
                if ($logo): ?>
                    <img src="<?= esc_url($logo['url']) ?>" alt="<?= esc_attr($logo['alt']) ?>">
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    </div>
    </div>
    </section>

<?php get_footer(); ?>