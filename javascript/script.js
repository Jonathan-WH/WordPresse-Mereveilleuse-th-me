(function ($) { //permet d'isoler le script des autres script pour éviter les erreurs





    //ANIMATION SOUS_MENU SOINS ET ATELIER EN -850px window

    $(document).ready(function () {

        /*if ($(window).width() >= 850) {
            $(".sub-menu").hide();
        }*/

        /*if ($(window).width() > 850) {
            $("#menu-item-199").hide();
        }*/

        //MENU HAMBURGER

        let menuBtn = document.querySelector('#menu-button');
        let menu = document.querySelector('nav.duhaut ul');
        let nav = document.querySelector('nav.duhaut')

        menuBtn.addEventListener('click', function (/*event*/) {
            menu.classList.toggle('open')
            nav.classList.toggle('open')
        })

        document.body.addEventListener('click', function (e) {
            if (!menu.contains(e.target) && !menuBtn.contains(e.target)) {
                menu.classList.remove('open');
                nav.classList.remove('open');
            }
        })

        //ANIMATION SOUS_MENU SOINS ET ATELIER EN -850px window

        // $('.menu-item > a').click(function (event) {
        //     const submenu = $(this).siblings('.sub-menu');
        //     if (!submenu.length)
        //         return;

        //     if ($(window).width() <= 850) {
        //         event.preventDefault();
        //         const li = submenu.closest('.menu-item');
        //         $('.sub-menu', submenu.siblings()).slideUp();
        //         submenu.stop().slideToggle();

        //         // Gestion des icônes chevron
        //         let icon = $(this).find('i');
        //         icon.toggleClass('fa-chevron-down fa-chevron-up');
        //         $('> a i', submenu.siblings()).removeClass('fa-chevron-up').addClass('fa-chevron-down');
        //         // $('#menu-item-116 > a i , #menu-item-117 > a i, #menu-item-118 > a i ').removeClass('fa-chevron-up').addClass('fa-chevron-down');
        //     }
        // });

        //(RESET)cacher menu hamburger lorsqu'on ouvre le menu, agrandi la fenetre et rétrécus la fenetre

        $(window).on('resize', function () {
            if ($(window).width() > 850) {
                $('#main_menu').removeClass('open');
                $('.duhaut').removeClass('open');
                $('.sub-menu').hide();
                $('.sub-menu > a i ').addClass('fa-chevron-up').removeClass('fa-chevron-down');
            } else {
                // $('#main_menu').removeClass('open')

            }
        })

        $('#menu-item-120 > a').click(function (event) {

            if ($(window).width() <= 850) {
                event.preventDefault();
                $('#menu-item-116 ul, #menu-item-117 ul, #menu-item-118 ul').slideUp();
                $('#menu-item-120 ul').stop().slideToggle();

                // Gestion des icônes chevron
                let icon = $(this).find('i');
                icon.toggleClass('fa-chevron-down fa-chevron-up');
                $('#menu-item-116 > a i , #menu-item-117 > a i, #menu-item-118 > a i ').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            }
        });

        $('#menu-item-116 > a').click(function (event) {
            if ($(window).width() <= 850) {
                event.preventDefault();
                $('#menu-item-120 ul, #menu-item-117 ul, #menu-item-118 ul').slideUp();
                $('#menu-item-116 ul').stop().slideToggle();

                // Gestion des icônes chevron
                let icon = $(this).find('i');
                icon.toggleClass('fa-chevron-down fa-chevron-up');
                $('#menu-item-120 > a i , #menu-item-117 > a i, #menu-item-118 > a i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            }
        });

        $('#menu-item-117 > a').click(function (event) {
            if ($(window).width() <= 850) {
                event.preventDefault();
                $('#menu-item-120 ul, #menu-item-116 ul, #menu-item-118 ul').slideUp();
                $('#menu-item-117 ul').stop().slideToggle();

                // Gestion des icônes chevron
                let icon = $(this).find('i');
                icon.toggleClass('fa-chevron-down fa-chevron-up');
                $('#menu-item-120 > a i, #menu-item-116 > a i, #menu-item-118 > a i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            }
        });

        $('#menu-item-118 > a').click(function (event) {
            if ($(window).width() <= 850) {
                event.preventDefault();
                $('#menu-item-120 ul, #menu-item-116 ul, #menu-item-117 ul').slideUp();
                $('#menu-item-118 ul').stop().slideToggle();

                // Gestion des icônes chevron
                let icon = $(this).find('i');
                icon.toggleClass('fa-chevron-down fa-chevron-up');
                $('#menu-item-120 > a i, #menu-item-116 > a i, #menu-item-117 > a i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            }
        });



        //RESET SOUS-MENU ET CHEVRON AU CLIQUE DU HAMBURGER 
        $("#menu-button").click(function () {
            $('#menu-item-120 ul, #menu-item-116 ul, #menu-item-117 ul, #menu-item-118 ul').slideUp();

            $('#menu-item-120 > a, #menu-item-116 > a, #menu-item-117 > a, #menu-item-118 > a').find('i').removeClass('fa-solid fa-chevron-up').addClass('fa-solid fa-chevron-down');
        })


        $('.slider-slick').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 1000
        });

        console.log('testslider')

        //FLECHE
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) { // Modifiez '100' pour ajuster le déclenchement
                $('.fleche').fadeIn();
            } else {
                $('.fleche').fadeOut();
            }
        });



        //PAGE CONTACT ANIMATION SLIDE TOOGLE RDV
        /* $('.toggle-soins').click(function () {
             $('.form-soins').stop().fadeToggle();
             $('.form-ateliers').fadeOut();
 
             let icon = $(this).find('i');
             icon.toggleClass('fa-circle-chevron-down fa-circle-chevron-up');
             $('.toggle-ateliers i').removeClass('fa-circle-chevron-up').addClass('fa-circle-chevron-down');
 
         });
 
         $('.toggle-ateliers').click(function () {
             $('.form-ateliers').stop().fadeToggle();
             $('.form-soins').fadeO();
 
             let icon = $(this).find('i');
             icon.toggleClass('fa-circle-chevron-down fa-circle-chevron-up');
             $('.toggle-soins i').removeClass('fa-circle-chevron-up').addClass('fa-circle-chevron-down');
 
 
         });*/

        if ($(window).width() <= 850) {
            $('ul#main_menu li ul li ').click(function () {
                $('#main_menu').removeClass('open');
                $('.duhaut').removeClass('open');
                $('.sub-menu').hide();
                $('.sub-menu > a i ').addClass('fa-chevron-up').removeClass('fa-chevron-down');
            })
        }


    });




})(jQuery)//permet d'isoler le script des autres script pour éviter les erreurs




