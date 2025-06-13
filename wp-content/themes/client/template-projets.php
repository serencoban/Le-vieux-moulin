<?php
/* Template Name: Page "Projets" */
get_header();
?>

<section class="hero-section">
    <div class="hero-content">
        <h2 class="hero-title">Nos projets</h2>
        <p class="hero-subtitle">Découvrez nos espaces de vie chaleureux et accueillants</p>
    </div>
</section>

<section class="projects-section">
    <div class="container-projects">
        <?php
        $args = [
            'post_type' => 'projets',
            'posts_per_page' => -1,
        ];
        $projects_query = new WP_Query($args);

        if ($projects_query->have_posts()) :
            echo '<div class="projects-grid">';
            while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
                <div class="project-card">
                    <div class="image_project">
                        <?php
                        $image = get_field('image_projet');
                        if ($image) {
                            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                        }
                        ?>
                    </div>
                    <div class="contenu_project">
                        <h3 class="titre_project"><?php the_title(); ?></h3>
                        <div class="description_project">
                            <?php the_field('mini_desc_projet')?>
                        </div>
                        <a class="voir-plus-btn" href="<?php the_permalink(); ?>">
                            <div class="voir-plus">
                                <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="25" height="16" viewBox="0 0 25 16" fill="none">
                                    <path d="M24.7071 8.70711C25.0976 8.31658 25.0976 7.68342 24.7071 7.29289L18.3431 0.928932C17.9526 0.538408 17.3195 0.538408 16.9289 0.928932C16.5384 1.31946 16.5384 1.95262 16.9289 2.34315L22.5858 8L16.9289 13.6569C16.5384 14.0474 16.5384 14.6805 16.9289 15.0711C17.3195 15.4616 17.9526 15.4616 18.3431 15.0711L24.7071 8.70711ZM0 8V9H24V8V7H0V8Z" fill="#222443"/>
                                </svg>
                                <span class="voir-text">Voir plus</span>
                            </div>
                        </a>
                    </div>

                </div>
            <?php endwhile;
            echo '</div>';
            wp_reset_postdata();
        else :
            echo '<p>Aucun projet disponible pour le moment.</p>';
        endif;
        ?>
    </div>
</section>
<section class="subsection-project">
    <div>
        <h3>Voulez-vous soutenir nos projets et offrir un meilleur environnement pour les enfants&nbsp;? </h3>
        <a class="btn" href="<?php echo get_permalink(54); ?>" aria-label="Nous soutenir via un don" title="Aller vers la page nous soutenir">Nous soutenir</a>
    </div>
</section>

<?php get_footer(); ?>
