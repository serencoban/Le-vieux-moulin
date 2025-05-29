<?php /* Template Name: Page "Contact" */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="content">
        <!-- Section Contactez-nous -->
        <section class="contact-info">
            <h1>Contactez-nous !</h1>
            <p>N'hésitez pas à nous contacter via ce formulaire, nous y répondrons avec plaisir.</p>
        </section>

        <!-- Section Carte -->
        <section class="map-section">
            <img src="" alt="">
        </section>

        <!-- Formulaire -->
        <section class="form-section">
            <form>
                <div class="form-group">
                    <label for="name">Nom et prénom*</label>
                    <input type="text" id="name" name="name" placeholder="ex: Jane Doe" required>
                </div>

                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" placeholder="ex: janedoe@gmail.com" required>
                </div>

                <div class="form-group">
                    <label>Objet*</label>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="benevole" name="objet" value="benevole" required>
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
                </div>

                <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea id="description" name="description" placeholder="Décrivez votre demande..." required></textarea>
                </div>

                <button type="submit" class="submit-btn">Soumettre le formulaire</button>
            </form>
        </section>
    </div>
</div>
<?php get_footer(); ?>








