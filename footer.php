<footer>
    <div id="footer-content">
        <div class="logoh1">

            <div class="container-logo-h2-footer"><a href="<?php echo get_permalink(121); ?>">
                    <img class="logo-footer animate" src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                                                            ?>/design/logo/logo_élodie.png" alt=""></a>
            </div>

            <div>
                <h2 class="hmereveilleusebas">
                    <a href="<?php echo get_permalink(121); ?>">Mère Veilleuse</a>
                </h2>
            </div>


        </div>


        <nav class="dubas">
            <div class="navpart1">
                <ul>
                    <li><a href="<?php echo get_permalink(121); ?>">&#8226; ACCUEIL</a></li>
                    <li><a href="<?php echo get_permalink(98); ?>">&#8226; QUI SUIS-JE ?</a></li>
                    <li><a href="<?php echo get_permalink(100); ?>">&#8226; SOINS</a></li>
                    <li><a href="<?php echo get_permalink(102); ?>">&#8226; ATELIER</a></li>

                </ul>
            </div>

            <div class="navpart2">
                <ul>
                    <li><a href="<?php echo get_permalink(104); ?>">&#8226; BOUTIQUE</a></li>
                    <li><a href="<?php echo get_permalink(106); ?>">&#8226; CONTACT</a></li>
                    <li><a href="<?php echo get_permalink(205); ?>">&#8226; Nos conditions générales</a></li>
                    <li id="reseau-social">

                        <a href="#"><img id="instagram" src="<?php bloginfo('template_url') ?>/design/logo/instagramlogo.png" alt=""></a>

                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div id="copyright">
        <p class="copyright">
            &#169; Haa.Wood.Roose 2023. Tous droits réservés - mereveilleuse.com
        </p>
    </div>
</footer>



<!--CHARGEMENT SCRIPT BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>



<!--CHARGEMENT SCRIPT FONT AWESOME-->
<script src="https://kit.fontawesome.com/ad595101c1.js" crossorigin="anonymous"></script>


<?php wp_footer() ?>
</body>

</html>