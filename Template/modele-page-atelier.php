<?php /* Template Name: Page atelier */ ?>

<?php get_header(); ?>

<main>

    <div id="titre-page">

        <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                    ?>/design/logo/svg-titre-aile.svg" alt="">

        <h2>ATELIER</h2>
    </div>

    <section class="cercle-femme" id="cercle-femme">
        <div class="photo-cercle">

            <div><img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/atelier/cercle-1.png" alt="">
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/atelier/cercle-2.png" alt="">
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/atelier/cercle-3.png" alt="">
            </div>

        </div>
        <div class="texte-cercle">
            <h2>Cercle des femmes</h2>
            <h5>Temps: journée complète / Prix: 60&#8364</h5>
            <p>
                Depuis que j'ai donné naissance à la vie, j'ai ressenti un besoin profond de prendre soin de la
                femme que je suis devenue. Dans ce monde qui tourne à toute vitesse, nous nous retrouvons parfois à
                courir après le temps, laissant peu de place à notre propre bien-être.
                <br>
                <br>
                Après avoir participé à de nombreuses retraites, cercles et stages de développement personnel, j'ai
                été inspirée à créer les Cercles d'Âmes. Ce sont des espaces intemporels où chacune peut se
                retrouver, s'offrir un précieux moment pour elle-même, et nourrir son âme, ce temple qui abrite
                notre essence profonde. C'est un voyage dans un océan d'Amour, une célébration de la sororité.
                <br>
                <br>
                Je propose un cercle pour accueillir chaque nouvelle saison. Au sein de ces cercles, vous trouverez
                des moments d'échange pour vous déposer, des méditations pour vous reconnecter à votre être
                intérieur, des ateliers de création pour exprimer votre essence unique, des séances de développement
                personnel pour nourrir votre croissance, et des soins qui utilisent la magie des plantes, des
                cristaux et des fleurs pour révéler votre lumière intérieure.
                <br>
                <br>
                Je me connecte profondément aux besoins de chaque femme présente dans le cercle pour préparer ces
                moments en accord avec l'énergie du moment. Ces espaces sacrés sont un précieux cadeau que nous nous
                offrons à nous-mêmes, une opportunité de nous ressourcer profondément.
                <br>
                <br>
                Nous sommes tous uniques, et pourtant, nous sommes tous connectés, faisant partie d'un tout. Dans
                ces cercles, nous explorons les liens qui nous unissent, célébrant notre unité au sein de la
                diversité.
                <br>
                <br>
                Ces moments sont riches, non seulement sur le plan individuel, mais aussi sur le plan collectif.

                <br>
                <br>
                C'est un honneur de partager ces instants d'âme avec vous.

            </p>
            <a href="<?php echo get_permalink(106) ?>">S'inscrire au prochain atelier</a>
        </div>
    </section>

    <section class="cacao" id="cacao">
        <div class="texte-cacao">
            <h2>Cérémonie cacao</h2>
            <h5>Temps: 3h(collectif) - 2h(individuel) / Prix: 50&#8364</h5>
            <p>
                La cérémonie du cacao est une expérience sacrée qui m'a profondément marquée. Elle m'a permis de
                prendre conscience de l'importance de ralentir dans ce monde en perpétuel mouvement.
                <br>
                <br>
                Lors de cette cérémonie, nous nous offrons un moment de pause, une parenthèse dans nos vies
                trépidantes. Nous nous réunissons pour honorer le cacao, une plante précieuse qui nous connecte à
                notre cœur, à notre essence la plus pure.
                Au fil du temps, j'ai eu le privilège de participer à de nombreuses cérémonies, d'explorer ses
                rituels et d'en ressentir les bienfaits.
                <br>
                <br>
                Forte de ces expériences, j'ai créé ces cérémonies du cacao, des espaces où nous pouvons nous
                retrouver pour célébrer la vie, la présence, et l'amour.
                <br>
                <br>
                Chaque cérémonie est unique, façonnée par l'énergie du moment et par les âmes qui se réunissent.
                Nous partageons des moments d'échange et de connexion profonde, des méditations guidées pour ouvrir
                notre cœur, des rituels pour honorer le cacao en tant que guide spirituel, et des moments de partage
                autour du feu de notre âme.
                <br>
                <br>
                La cérémonie du cacao est une expérience qui apaise le corps, l'esprit et l'âme. Elle nous invite à
                explorer notre monde intérieur, à nous libérer de ce qui ne nous sert plus, à créer de l'espace pour
                l'amour et la gratitude.
                <br>
                <br>
                Je vous invite à vous joindre à moi dans cette aventure sacrée. Que vous soyez novice ou expérimenté
                dans le monde du cacao, chaque cérémonie est une opportunité de grandir, d'aimer et de célébrer la
                magie de la vie.
                <br>
                Que le cacao nous guide sur le chemin de l'ouverture du cœur, de la guérison et de la
                transformation.
                <br>
                <br>
                Je vous attends avec amour et gratitude.
            </p>
            <a href="<?php echo get_permalink(106) ?>">S'inscrire au prochain atelier</a>
        </div>
        <div class="photo-cacao">
            <div>
                <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/atelier/cacao-1.png" alt="">
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/atelier/cacao-2.png" alt="">
            </div>

            <div>
                <img src="<?php bloginfo('template_url'); //url template en cours = bloginfo 
                            ?>/photo/atelier/cacao-3.png" alt="">

            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>