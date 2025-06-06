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
                            <?php the_field('projets_description')?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn">Voir plus</a>
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
        <h3>Voulez-vous soutenir nos projets et offrir un meilleur environnement pour les enfants ? </h3>
        <a class="btn" href="">Nous soutenir</a>
    </div>
</section>

<?php get_footer(); ?>
