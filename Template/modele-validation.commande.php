<?php /* Template Name: Validation commande */?>
<?php get_header(); ?>

<main>
    

<div id="titre-page" class="mon-compte">

<img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/design/logo/svg-titre-aile.svg" alt="">

<h2>Validation</h2>
</div>

<div class="classicPage-mon-compte">



        <?php while ( have_posts() ) : the_post(); ?>
        
       <div class="content-page-mon-compte"><?php the_content();?></div>
    
        <?php endwhile; ?>

    </div>



</main>

<?php get_footer(); ?>