<!doctype html> 
<html lang="fr-FR">  
<head> 
	<meta charset="utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php the_title(); ?></title>



	

    <!--LIEN CSS BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    

<!--JQUERY BIBLIOTHEQUE-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




<!--FONT STYLE-->

<!--FONT STYLE MERIENDA-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400&display=swap" rel="stylesheet">

<!--FONT STYLE PLAYFAIR DISPLAY-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
	
 <?php wp_head() ?>
 <!--CSS-->
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
 
</head>

<body <?php body_class();?> >
	
<div class="fleche">
        <a href="#haut-de-page">
           <i class="fa-solid fa-arrow-up" style="color: rgba(252, 233, 196, 1);"></i> 
        </a>

    </div >
    <header id="haut-de-page">
        <div id="headerhaut">
            <div id="headergauche">
                <h1><a class="hmereveilleusehaut" href="<?php echo get_permalink(121)?>">Mère Veilleuse</a></h1>
            </div>

            <div class="container-logo">
                <a href="<?php echo get_permalink(121)?>">
                    <img
                        class="logo animate" src="<?php bloginfo('template_url'); //url template en cours = bloginfo ?>/design/logo/logo_élodie.png" alt="" itemprop="logo">
                </a>
            </div>

            <div id="headerdroite"> 
                    <div id="headerdroite-widgets">
                    
                        <?php if (is_active_sidebar('header_1')) : ?>
                        <?php dynamic_sidebar('header_1');?>
                        <?php endif ; ?>

                    </div>
            </div>  
           


          
        </div>


    </header>

   

       <nav class="duhaut">
            <button id="menu-button">
                <span class="bar"></span>

            </button>

			<?php wp_nav_menu(array('menu' => 'Menu principale', 'menu_class' => 'nav-duhaut', 'menu_id' => 'main_menu')); ?>
			<!--
            <ul class="nav-duhaut">
                <li><a style="text-decoration: underline ;"  href="index.html">ACCUEIL</a></li>
                <li><a href="quisuisje.html">QUI SUIS-JE ?</a></li>
                <li class="relative menu-hover-soins"><a href="soins.html">SOINS <i id="chevron-soins" class="fa-solid fa-chevron-down" style="color: #d9cbae;"></i></a>
                    <ul class="submenu-soins">
                        <li><a href="/Pages/soins.html#reiki">&#8226; Reiki</a></li>
                        <li><a href="/Pages/soins.html#massage-shinzu">&#8226; Massage Shinzu</a></li>
                        <li><a href="/Pages/soins.html#energetique">&#8226; Energétique</a></li>
                        <li><a href="/Pages/soins.html#theme-astrale">&#8226; Thème Astrale</a></li>
                    </ul>
                </li>
                <li class="relative menu-hover-atelier"><a href="atelier.html">ATELIER <i id="chevron-atelier" class="fa-solid fa-chevron-down" style="color: #d9cbae;"></i></a>
                    <ul class="submenu-atelier">
                        <li><a class="sub" href="/Pages/atelier.html">&#8226; Cercle des Femmes</a></li>
                        <li><a href="/Pages/atelier.html#cacao">&#8226; Cérémonie Cacao</a></li>
                    </ul>
                </li>
                <li><a href="boutique.html">BOUTIQUE</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
			-->
            <hr class="navline">
        </nav> 
