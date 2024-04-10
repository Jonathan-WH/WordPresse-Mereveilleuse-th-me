<?php /* Template Name: Qui-suis-je */?>

<?php get_header(); ?>

<main>

        <div id="titre-page">
            
            <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/design/logo/svg-titre-aile.svg" alt="">
            
            <h2>QUI SUIS-JE ?</h2>
        </div>

        <section id="qui-suis-je">
            <img class="papillon" src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/design/logo/papillon-qui-suis-je.svg" alt="">

            <div class="photo-texte" >
                <div class="photo-qui-suis-je">
                    <div class="photo-haut"><img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/photo/qui-suis-je/qui-suis-je1.png" alt=""></div>
                    <div class="photo-dubas"><img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/photo/qui-suis-je/qui-suis-je2.png" alt=""></div>
                </div>
                <div class="texte-qui-suis-je">
                    <?php the_content();?>
                </div>
            </div>

            <div class="photo-bas">
                <div class="vide"></div>
                <div class="photo-gauche-qui-suis-je"><img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/photo/qui-suis-je/qui-suis-je3.png" alt=""></div>
                <div class="photo-droite-qui-suis-je"><img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/photo/qui-suis-je/qui-suis-je4.png" alt="">  </div>
            </div>
        </section>

        <section class="decouvrir-mon-travail">

            <div class="soins-ateliers">
                <div class="mes-soins">
                    <a href="<?php echo get_permalink(100)?>"><img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/photo/qui-suis-je/photo-soins-qui.png" alt=""></a>
                    <a href="<?php echo get_permalink(100)?>">Découvrir mes soins</a>

                </div>
               
                <div class="mes-ateliers">
                    <a href="<?php echo get_permalink(102)?>"><img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/photo/qui-suis-je/photo-atelier-qui.png" alt=""></a>
                    <a href="<?php echo get_permalink(102)?>">Découvrir mes ateliers</a>
                </div>
            </div>

        </section>

    </main>

<?php get_footer(); ?>