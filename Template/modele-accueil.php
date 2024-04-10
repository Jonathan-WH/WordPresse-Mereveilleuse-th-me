<?php /* Template Name: Accueil */ ?>
<?php get_header(); ?>


<main class="page-accueil">

    <section id="slider">

        <!--CAROUSEL BOOSTRAP-->
        <!--<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="4000">
                <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/slider/cacao-ceremonie-slider.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="boutoncarousel"><a class="boutoncarouselcslider" href=""> Cérémonie Cacao </a></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="4000">
                <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/slider/soins-slider.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="boutoncarousel"><a class="boutoncarouselcslider" href=""> Mes Soins </a></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="4000">
                <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/slider/massage-shinzu-slider.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="boutoncarousel"><a class="boutoncarouselcslider" href=""> Massage Shinzu </a></div>
                    </div>
                </div>
            </div>

            <div class="carousel-item" data-bs-interval="4000">
                <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/slider/cercle-femme-slider.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="boutoncarousel"><a class="boutoncarouselcslider" href=""> Cercle des femmes </a></div>
                    </div>
                </div>
            </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>-->

        <!--FIN CAROUSEL BOOSTRAP-->

        <!--</section>-->

        <!--CAROUSEL SLICK TEST-->

        <div class="slider-slick">

            <div class="slider-content">
                <?php echo wp_get_attachment_image(get_field('image_slider_3'), 'full'); ?>
                <a class="boutoncarouselcslider" href="<?php echo get_permalink(106) ?>#massage-shinzu"> <?php the_field('bouton_slider_3') ?> </a>
            </div>

            <div class="slider-content">
                <?php echo wp_get_attachment_image(get_field('image_slider_1'), 'full'); ?>
                <a class="boutoncarouselcslider" href="<?php echo get_permalink(102) ?>#cacao"> <?php the_field('bouton_slider_1') ?> </a>
            </div>

            <div class="slider-content">
                <?php echo wp_get_attachment_image(get_field('image_slider_2'), 'full'); ?>
                <a class="boutoncarouselcslider" href="<?php echo get_permalink(100) ?>"> <?php the_field('bouton_slider_2') ?> </a>
            </div>

            <div class="slider-content">
                <?php echo wp_get_attachment_image(get_field('image_slider_4'), 'full'); ?>
                <a class="boutoncarouselcslider" href="<?php echo get_permalink(102) ?>#cercle-femme"> <?php the_field('bouton_slider_4') ?> </a>
            </div>

        </div>
    </section>



    <section id="presentation">

        <img id="svg-presentation" src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                                        ?>/design/logo/svg-presentation.svg" alt="">

        <div class="presentationgauche">
            <?php echo wp_get_attachment_image(get_field('image_presentation'), 'full'); ?>
        </div>

        <div class="presentationdroite">
            <h2><?php the_field('titre_description') ?></h2>
            <?php the_field('texte_description') ?>
            <a href="<?php echo get_permalink(98); ?>" class="presentationbouton"><?php the_field('bouton_description') ?></a>
        </div>

    </section>

    <section id="soins">

        <img id="svg-soins" src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                                    ?>/design/logo/soins-svg.svg" alt="">

        <div>
            <h2 class="sectiononetitre">SOINS</h2>
        </div>

        <div class="imgsoins-container">
            <div class="imgsoins">
                <!-- <img src="<?php //bloginfo('template_url'); //url template en cours = bloginfo 
                                ?>/photo/photo/energetique_accueil.png" alt=""> -->
                <a href="<?php echo get_permalink(100) ?>#energetique"><?php echo wp_get_attachment_image(get_field('image_energetique'), 'full'); ?></a>
                <a class="texteimage" href="<?php echo get_permalink(100) ?>#energetique">Energétique</a>
            </div>
            <!--<div class="imgsoins">
                <a href="
                <?php // echo get_permalink(100) 
                ?>
                #massage-shinzu">
                <?php // echo wp_get_attachment_image(get_field('image_massage-shinzu'), 'full'); 
                ?>
            </a>
                <a class="texteimage" href="<?php // echo get_permalink(100) 
                                            ?>#massage-shinzu">Massage Shinzu</a>
            </div> !-->

            <div class="imgsoins">

                <a href="<?php echo get_permalink(100) ?>#reiki"><?php echo wp_get_attachment_image(get_field('image_reiki'), 'full'); ?></a>

                <a class="texteimage" href="<?php echo get_permalink(100) ?>#reiki">Reiki</a>
            </div>

            <div class="imgsoins">

                <a href="<?php echo get_permalink(100) ?>#theme-astrale"><?php echo wp_get_attachment_image(get_field('image_theme-astrale'), 'full'); ?></a>
                <a class="texteimage" href="<?php echo get_permalink(100) ?>#theme-astrale">Thème Astrale</a>

            </div>

        </div>

        </div>



    </section>

    <section id="atelier">

        <img id="svg-atelier" src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                                    ?>/design/logo/svg-atelier.svg" alt="">

        <div>
            <h2 class="sectiontwotitre">ATELIER</h2>
        </div>

        <div id="atelier-container">
            <div class="imgatelier">

                <a href="<?php echo get_permalink(102) ?>#cercle-femme"><?php echo   wp_get_attachment_image(get_field('image_atelier_cercle'), 'full'); ?></a>

                <a class="texteimage" href="<?php echo get_permalink(102) ?>#cercle-femme"> Cercles des femmes</a>

            </div>

            <div class="imgatelier">

                <a href="<?php echo get_permalink(102) ?>#cacao"><?php echo wp_get_attachment_image(get_field('image_atelier_cacao'), 'full'); ?></a>

                <a class="texteimage" href="<?php echo get_permalink(102) ?>#cacao">Cérémonie cacao</a>
            </div>
        </div>

    </section>

    <section class="insta-content">

        <?php echo do_shortcode('[instagram-feed feed=2]'); ?>

    </section>



</main>

<?php get_footer(); ?>