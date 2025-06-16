</main>
<footer class="footer">
    <div class="footer-top">
        <h2 class="sro">Footer</h2>
        <div class="footer-section">
            <h3>Coordonnées</h3>
            <p>Rue des Vennes, Strainchamps 1, 6637 Fauvillers</p>
            <p>063 60 22 37</p>
            <p><a href="mailto:srglevieuxmoulin@levm.be">srglevieuxmoulin@levm.be</a></p>
            <p>Directeur : SCHMIT Jean-François</p>
            <p>Suivez-nous sur <a class="facebook" href="#" title="Aller vers notre page Facebook" target="_blank">Facebook</a></p>
        </div>

        <div class="footer-section">
            <h3>Navigation</h3>
            <ul class="footer-menu">
                <li><a href="<?php echo home_url(); ?>">Accueil</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('nos-foyers')); ?>">Nos foyers</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('nos-projets')); ?>">Nos projets</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('actualites')); ?>">Actualités</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Nous contacter</a></li>
            </ul>

        </div>

        <div class="footer-section">
            <h3>Nous soutenir</h3>
            <ul>
                <li><a href="<?php echo site_url('/nous-soutenir'); ?>">Faire un don</a></li>
                <li><a href="<?php echo site_url('/nous-soutenir'); ?>">Bénévolats</a></li>
                <li><a href="<?php echo site_url('/nous-soutenir'); ?>">Partenaires</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>©2025 ASBL Le Vieux Moulin. Tous droits réservés.</p>
        <p>Créé par <a href="https://cobanseren.fr">Seren Coban</a> | <a href="<?php echo site_url('/mentions-legales'); ?>">Mentions légales</a></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>