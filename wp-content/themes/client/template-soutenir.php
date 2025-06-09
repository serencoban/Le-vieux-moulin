<?php /* Template Name: Page "Nous soutenir" */ ?>

<?php get_header(); ?>
    <section class="hero-section">
        <div>
            <h2 class="hero-title">Nous soutenir</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus malesuada tempor ullamcorper.</p>
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
                            <p>SRG - Vieux Moulin</p>
                        </div>
                        <div class="left-iban">
                            <b>IBAN</b>
                            <p>BE72 2700 5309 4116</p>
                        </div>
                    </div>
                </div>
                <div class="qr">
                    <img src="<?= get_field('qr_code')['url']; ?>"  alt="QR code">
                    <p>Ou alors, scannez ce code QR !</p>
                </div>
            </div>
            <div class="right">
                <div class="right-mat">
                    <h3>Don matériel</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="right-link">
                    <a class="btn" href="">Nous soutenir</a>
                </div>
            </div>
            <div class="donation-text">
                <small>*Tous dons de 40€ et plus peuvent être exonérés d'impôts ainsi que les ordres permanents mensuels.</small>
            </div>
        </div>
    </section>
    <section class="grace-a-vous">
        <div class="grace-grid">
            <h3 class="titre">
                <span class="surlignable">
                    Grâce à vous
                    <svg class="surlignement" xmlns="http://www.w3.org/2000/svg" width="278" height="13" viewBox="0 0 278 13" fill="none">
                        <path d="M3 6.11153C6.21371 3.80792 14.7622 0.543382 23.2463 5.91408C31.7305 11.2848 38.5918 8.28349 40.9619 6.11151C45.0594 4.00535 54.2907 1.01725 58.4364 5.91406C62.5821 10.8109 71.6528 8.67838 75.6699 7.00004C78.4819 4.82807 85.6244 1.66884 91.6983 6.40769C97.7722 11.1465 107.727 8.18475 111.945 6.11151C116.484 3.84081 126.599 0.661833 130.745 6.11151C134.89 11.5612 143.72 8.97456 147.617 7.00004C150.67 4.5648 158.487 1.09623 165.332 6.70386C172.177 12.3115 180.798 9.23783 184.253 7.00004C187.547 5.05843 195.846 2.39941 202.692 7.29622C209.537 12.193 219.041 9.33656 222.938 7.29622C226.955 5.3217 236.074 2.49814 240.412 7.00004C244.751 11.5019 253.87 8.28348 257.887 6.11151C261.422 3.77499 269.794 0.622343 275 6.70386" stroke="#F2D369" stroke-width="5" stroke-linecap="round"/>
                    </svg>
                </span>, nos enfants vivent comme les autres enfants !
            </h3>
            <div class="img1"><img src="/wp-content/themes/client/resources/img/soutenir-header.jpg" alt=""></div>
            <div class="img2"><img src="/wp-content/themes/client/resources/img/soutenir-header.jpg" alt=""></div>
            <div class="img3"><img src="/wp-content/themes/client/resources/img/soutenir-header.jpg" alt=""></div>
            <div class="img4"><img src="/wp-content/themes/client/resources/img/soutenir-header.jpg" alt=""></div>
        </div>
    </section>
    <section class="engagements">
        <div class="benevole">
            <h3>Devenir bénévole</h3>

            <div class="role">
                <div>
                    <h4>Éducateur</h4>
                    <p>Aide-nous à offrir un cadre rassurant, stimulant et bienveillant aux enfants qui en ont besoin.</p>
                </div>
                <div>
                    <a class="btn" href="">Nous contacter</a>
                </div>
            </div>

            <div class="role">
                <div>
                    <h4>Prof de math</h4>
                    <p>Tu peux aider nos enfants avec leurs devoirs voire même donner des cours privés.</p>
                </div>
                <div>
                    <a class="btn" href="">Nous contacter</a>
                </div>
            </div>
        </div>
        <div class="famille">
            <h3>Devenir une famille d'accueil</h3>
            <div>
                <p>Offrez-leur un foyer, offrez-leur une chance. Jouez un rôle essentiel dans la reconstruction et l’épanouissement d’un enfant.</p>
                <a class="btn" href="">En savoir plus</a>
                <img src="/wp-content/themes/client/resources/img/soutenir-header.jpg" alt="Famille d'accueil">
            </div>
        </div>
    </section>
    <section class="partenaire">
        <h3>Merci à nos partenaires qui nous soutiennent !</h3>
        <div class="partenaire-wrapper">
            <div class="partenaire-logo">
                <img src="/wp-content/themes/client/resources/img/image-removebg-preview(6).png" alt="">
                <img src="/wp-content/themes/client/resources/img/image-removebg-preview(6).png" alt="">
                <img src="/wp-content/themes/client/resources/img/image-removebg-preview(6).png" alt="">
                <img src="/wp-content/themes/client/resources/img/image-removebg-preview(6).png" alt="">
                <img src="/wp-content/themes/client/resources/img/image-removebg-preview(6).png" alt="">
                <img src="/wp-content/themes/client/resources/img/image-removebg-preview(6).png" alt="">
                <img src="/wp-content/themes/client/resources/img/image-removebg-preview(6).png" alt="">
                <img src="/wp-content/themes/client/resources/img/image-removebg-preview(6).png" alt="">
            </div>
        </div>
    </section>
<?php get_footer(); ?>