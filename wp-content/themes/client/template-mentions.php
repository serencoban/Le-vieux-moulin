<?php /* Template Name: Page "Mentions" */ ?>

<?php get_header(); ?>
<div class="mentions-container">
    <h2 role="heading"><?php the_title(); ?></h2>
    <div class="mentions-ctn mentions-bubbles">
        <div>
            <h3><?php echo get_field('identifications'); ?></h3>
            <p><?php echo get_field('identification_text'); ?></p>
        </div>
        <div class="bubbles-svg">
            <svg xmlns="http://www.w3.org/2000/svg" width="240" height="168" viewBox="0 0 240 168" aria-hidden="true" focusable="false">
                <circle cx="155.937" cy="84.1839" r="83" transform="rotate(90.3917 155.937 84.1839)"/>
                <ellipse cx="199.751" cy="58.8118" rx="26.5258" ry="17.1134" transform="rotate(66.6777 199.751 58.8118)" />
                <ellipse cx="160.1" cy="43.5497" rx="14.1859" ry="9.15217" transform="rotate(66.6777 160.1 43.5497)" />
                <circle cx="37.2769" cy="43.1541" r="35.9381" transform="rotate(90.3917 37.2769 43.1541)" />
                <ellipse cx="56.2475" cy="32.1687" rx="11.4854" ry="7.40993" transform="rotate(66.6777 56.2475 32.1687)" />
                <ellipse cx="39.0789" cy="25.5612" rx="6.14233" ry="3.9628" transform="rotate(66.6777 39.0789 25.5612)" />
            </svg>
        </div>
    </div>

    <div class="mentions-ctn">
        <h3><?php echo get_field('hebergeur'); ?></h3>
        <p><?php echo get_field('hebergeur_texte'); ?></p>
    </div>

    <div class="mentions-ctn">
        <h3><?php echo get_field('propriete_intellectuelle'); ?></h3>
        <p><?php echo get_field('propriete_texte'); ?></p>
    </div>

    <div class="mentions-ctn">
        <h3><?php echo get_field('donnees_personnelles'); ?></h3>
        <p><?php echo get_field('donnees_texte'); ?></p>
    </div>
</div>
<?php get_footer(); ?>

