<?php /* Template Name: Termes et Conditions */ ?>
<?php get_header(); ?>

<main>


    <div id="titre-page" class="mon-compte">

        <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                    ?>/design/logo/svg-titre-aile.svg" alt="">

        <h2>Termes et Conditions</h2>
    </div>

    <div class="classicPage-mon-compte">



        <?php while (have_posts()) : the_post(); ?>

            <div class="content-page-mon-compte">
                2

                <h2>1. Objet</h2>
                <p>Le site web propose des informations permettant aux utilisateurs de prendre connaissance des services de thérapie disponibles. Pour réserver des séances de thérapie, les clients peuvent nous contacter directement par téléphone, par e-mail, ou via le formulaire de contact du site internet.</p>
                <h2>2. Réservation de Séances</h2>
                <p>2.1 Les réservations de séances de thérapie se font exclusivement par téléphone, mail ou via le formulaire de contact disponible sur notre site internet.</p>
                <p>2.2 Toute réservation est sujette à confirmation par e-mail ou téléphone. Si les informations fournies lors de la prise de contact ne sont pas complètes, la réservation peut ne pas être finalisée.</p>
                <p>2.3 Nous demandons aux clients de nous prévenir au moins 24 heures à l'avance en cas d'annulation. En cas d'annulation tardive (moins de 24 heures avant le rendez-vous) ou de non-présentation, excepté pour des raisons graves, la séance pourra être facturée.</p>
                <h2>3. Paiement</h2>
                <p>3.1 Nous n'acceptons pas de paiements en ligne pour les séances.</p>
                <p>3.2 Un paiement à l'avance n'est pas nécessaire pour confirmer votre réservation.</p>
                <h2>4. Confidentialité</h2>
                <p>4.1 Les informations fournies lors de la prise de contact seront utilisées uniquement pour la gestion de votre rendez-vous.</p>
                <p>4.2 Nous nous engageons à ne pas stocker ni conserver les données personnelles des clients une fois la séance terminée.</p>
                <h2>5. Contact</h2>
                <p>5.1 Pour toute question ou préoccupation concernant les termes et conditions, veuillez nous contacter via notre formulaire de <a href="https://www.mereveilleuse.co/?page_id=106">CONTACT</a>.</p>

            </div>

        <?php endwhile; ?>

    </div>



</main>

<?php get_footer(); ?>