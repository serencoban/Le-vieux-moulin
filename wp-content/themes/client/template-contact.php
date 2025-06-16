<?php /* Template Name: Page "Contact" */ ?>

<?php get_header(); ?>

<div class="contact-container">
    <div class="content">
        <section class="contact-info">
            <h2 role="heading" id="form-title">Contactez-nous&nbsp;!</h2>
            <p>N’hésitez pas à nous contacter via ce formulaire. Que vous soyez futur bénévole, partenaire, famille ou simplement curieux, nous prendrons le temps de vous répondre avec attention et bienveillance.</p>
        </section>
        <div class="map-section"></div>
        <section class="form-section">
            <?php if (!empty($_SESSION['contact_form_success'])) : ?>
                <p class="success-message" role="alert">
                    <?php
                    echo $_SESSION['contact_form_success'];
                    unset($_SESSION['contact_form_success']);
                    ?>
                </p>
            <?php else : ?>
                <h3 class="sro">Formulaire de contact</h3>
                <p class="required">N’oubliez pas de remplir les champs avec une étoile (*), ils sont indispensables.</p>
                <form action="<?php echo admin_url('admin-post.php'); ?>" method="post">
                <div class="form-group">
                    <label for="name">Nom et prénom*</label>
                    <input type="text" id="name" name="name" placeholder="ex: Harry Potter" required>
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" placeholder="ex: harrypotdefleur@gmail.com" required>
                </div>
                <fieldset class="form-group">
                    <legend>Objet*</legend>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="benevole" name="objet" value="benevole" required  >
                            <label for="benevole">Bénévole</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="partenaire" name="objet" value="partenaire" required>
                            <label for="partenaire">Partenaire</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="don" name="objet" value="don" required>
                            <label for="don">Don matériel</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="famille" name="objet" value="famille" required>
                            <label for="famille">Famille d'accueil</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="autres" name="objet" value="autres" required>
                            <label for="autres">Autres</label>
                        </div>
                    </div>
                </fieldset>

                <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea id="description" name="description" placeholder="Décrivez votre demande..." required></textarea>
                </div>

                <input type="hidden" name="action" value="dw_submit_contact_form">
                <button type="submit" class="btn">Soumettre le formulaire</button>
            </form>
<?php endif; ?>
        </section>
    </div>
</div>
<?php get_footer(); ?>