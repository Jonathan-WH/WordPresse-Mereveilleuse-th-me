<?php get_header(); ?>

    <div id="titre-page">

        <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/design/logo/svg-titre-aile.svg" alt="">

        <h2 class="titre-page"><?php the_title();?></h2> 
    </div>


    <div class="classicPage">



        <?php while ( have_posts() ) : the_post(); ?>
        
       <div class="content-page"><?php the_content();?></div>
    
        <?php endwhile; ?>

    </div>


	
<?php get_footer(); ?>