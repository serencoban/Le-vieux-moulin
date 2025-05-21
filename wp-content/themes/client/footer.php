<footer class="footer">
    <div class="footer-top">
        <div class="footer-section">
            <h3>Coordonnées</h3>
            <p>Rue des Vennes, Strainchamps 1, 6637 Fauvillers</p>
            <p>063 60 22 37</p>
            <p><a href="mailto:srglevieuxmoulin@levm.be">srglevieuxmoulin@levm.be</a></p>
            <p>Directeur : SCHMIT Jean-François</p>
        </div>

        <div class="footer-section">
            <h3>Navigation</h3>
            <?php wp_nav_menu([
                'theme_location' => 'footer',
                'container' => 'nav',
            ]); ?>

        </div>

        <div class="footer-section">
            <h3>Nous soutenir</h3>
            <ul>
                <li><a href="<?php echo site_url('/faire-un-don'); ?>">Faire un don</a></li>
                <li><a href="<?php echo site_url('/benevolats'); ?>">Bénévolats</a></li>
                <li><a href="<?php echo site_url('/partenaires'); ?>">Partenaires</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>2025 Le Vieux Moulin. Tous droits réservés.</p>
        <p>Créé par Seren Coban | <a href="<?php echo site_url('/conditions-generales'); ?>">Conditions générales</a></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>