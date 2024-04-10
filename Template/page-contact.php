<?php /* Template Name: Page contact */ ?>

<?php get_header(); ?>

<main>


    <div id="titre-page" class="page-contact">

        <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                    ?>/design/logo/svg-titre-aile.svg" alt="">

        <h2>CONTACT</h2>
    </div>

    <div class="information-formulaire-evenement">

        <div class="evenement">
            <h2>Prochain évenement</h2>
            <hr>

            <div class="content-evenement">

                <div class="photo-evenement">
                    <?php echo wp_get_attachment_image(get_field('image_de_levenement'), 'full'); ?>
                </div>


                <div class="texte-evenement">
                    <h4>
                        <?php the_field('titre_de_levenement') ?>
                    </h4>

                    <?php the_field('texte_de_levenement') ?>

                </div>
            </div>

        </div>
    </div>


    <div class="information-formulaire">
        <div class="info-contact left-side">

            <h2>Informations de contact</h2>
            <hr>

            <?php // echo wp_get_attachment_image(get_field('imager_1'), 'thumbnail'); 
            ?>

            <p><i class="fa-solid fa-triangle-exclamation"></i> Pour prendre rendez-vous ou pour vous inscrire à un atelier, merci de me contacter via mon formulaire de contact, par téléphone ou par mail <i class="fa-solid fa-triangle-exclamation"></i></p>

            <h4>Téléphone: </h4>
            <p><i class="fa-solid fa-phone"></i> <a href="tel:+*******">*******/a></p>

            <h4>Email: </h4>
            <p><i class="fa-regular fa-envelope"></i> <a href="javascript:location='mailto:*******';void 0">
                    <script type="text/javascript">
                        document.write('*****')
                    </script>

                </a></p>

            <h4>Adresse: </h4>
            <p>
                *******
                <br>
                ********
                <br>
                ********
            </p>

            <h4>Parking: </h4>
            <p>Place disponible sur place</p>

            <h4>Accès: </h4>
            <iframe src="*********"></iframe>

        </div>

        <div class="right-side">
            <h2>Formulaire de contact: </h2>
            <hr>
            <?php echo do_shortcode('[contact-form-7 id="a624f11" title="Formulaire contact"]'); ?>

        </div>
    </div>



</main>

<?php get_footer(); ?>