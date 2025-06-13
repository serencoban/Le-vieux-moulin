<?php
get_header(); // inclut header.php
?>

<div class="single-projet">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();

            $mini_desc = get_field('mini_desc_projet');
            $description = get_field('projets_description');
            $galerie = get_field('galerie_projets');
            ?>
            <section class="projet-intro">
                <div>
                    <h2><?php the_title(); ?></h2>
                    <?php if ($mini_desc): ?>
                        <p class="mini-desc"><?php echo esc_html($mini_desc); ?></p>
                    <?php endif; ?>
                </div>
                <div class="bubbles-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="238" height="173" viewBox="0 0 238 173" fill="none">
                        <circle cx="162" cy="76" r="76" fill="#A9CAEF"/>
                        <circle cx="32.5" cy="140.5" r="32.5" fill="#A9CAEF"/>
                        <ellipse cx="156.762" cy="49.4471" rx="13.2458" ry="8.5457" transform="rotate(33.5914 156.762 49.4471)" fill="white"/>
                        <ellipse cx="23.8435" cy="129.105" rx="7.43144" ry="4.79448" transform="rotate(33.5914 23.8435 129.105)" fill="white"/>
                        <ellipse cx="196.473" cy="43.0142" rx="24.768" ry="15.9794" transform="rotate(33.5914 196.473 43.0142)" fill="white"/>
                        <ellipse cx="44.317" cy="125.956" rx="13.7125" ry="8.84675" transform="rotate(33.5914 44.317 125.956)" fill="white"/>
                    </svg>
                </div>
            </section>

            <section class="projet-contenu">
                <?php if ($description): ?>
                    <div class="projet-description">
                        <?php echo wp_kses_post($description); ?>
                    </div>
                <?php endif; ?>

                <?php if ($galerie && is_array($galerie)): ?>
                    <div class="galerie">
                        <?php foreach ($galerie as $image): ?>
                            <?php if (isset($image['url'])): ?>
                                <img
                                        src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt'] ?? ''); ?>">
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
        <?php
        endwhile;
    endif;
    ?>
</div>
<div class="other-project">
    <?php
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    if ($prev_post || $next_post): ?>
        <div class="other-project" itemprop="isPartOf" itemscope itemtype="https://schema.org/CollectionPage">
            <h3><?php _e('Other projects', 'portfolio'); ?></h3>
            <div class="other-project-links">
                <?php if ($prev_post): ?>
                    <a class="other-project-link btn" href="<?php echo get_permalink($prev_post); ?>" itemprop="relatedLink" title="Aller vers le projet <?php echo get_the_title($prev_post); ?>">
                        ← <?php echo get_the_title($prev_post); ?>
                    </a>
                <?php endif; ?>
                <?php if ($next_post): ?>
                    <a class="other-project-link btn" href="<?php echo get_permalink($next_post); ?>" itemprop="relatedLink" title="Aller vers le projet <?php echo get_the_title($next_post); ?>">
                        <?php echo get_the_title($next_post); ?> →
                    </a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php
get_footer();
?>
