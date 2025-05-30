<?php
/* Template Name: Page "Projets" */
get_header();
?>

<section class="projets-section">
    <div class="container-projects">
        <h2><?php the_title(); ?></h2>

        <?php
        $args = [
            'post_type' => 'projets',
            'posts_per_page' => -1,
        ];
        $projets_query = new WP_Query($args);

        if ($projets_query->have_posts()) :
            echo '<div class="projets-grid">';
            while ($projets_query->have_posts()) : $projets_query->the_post(); ?>
                <div class="projet-card">
                    <div class="image_projet">
                        <?php
                        $image = get_field('image_projet');
                        if ($image) {
                            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '">';
                        }
                        ?>
                    </div>
                    <div class="contenu_projet">
                        <h3 class="titre_projet"><?php the_title(); ?></h3>
                        <div class="description_projet">
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
