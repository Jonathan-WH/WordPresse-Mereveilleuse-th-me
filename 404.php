<?php get_header(); ?>

   
<div class="page-404">
<img src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/photo/photo/page-404.png" alt="">

   <div class="content-404">
    <h2>ERROR 404</h2>
         <p>
            Oups! On dirait que vous vous êtes perdu dans un coin inexploré de notre site.
        </p>
        <p>
            Ne vous inquiétez pas, ça arrive aux meilleurs ! Pour vous remettre sur le bon chemin, vous pouvez :
        </p>
       
        <p> - Naviguer via notre menu principale
            <br>
             - Revenir sur la page d'accueil en cliquant <a href="<?php echo get_permalink(121); ?>">ICI</a>
        </p>

        
        <p>Si vous pensez que quelque chose est cassé, faites-le nous savoir en cliquand sur <a href="<?php echo get_permalink(106); ?>">CONTACT</a>.</p>

</p>
</div> 
</div>



	
<?php get_footer(); ?>