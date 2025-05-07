<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Robin</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
    <link rel="manifest" href="site.webmanifest">

</head>


<body id="top">

    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap ss-home">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

                <div class="s-header__block">
                    <div class="s-header__logo">
                        <a class="logo" href="/">
                            <img src="/assets/images/logo.svg" alt="Acceuil">
                        </a>
                    </div>

                    <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
                </div> <!-- end s-header__block -->

                <nav class="s-header__nav">
    
                    <ul class="s-header__menu-links">
                        <li><a href="/projets">Projets</a></li>
                        <li><a href="/competences">Compétences</a></li>
                        <li><a href="/veille">Veille</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul> <!-- s-header__menu-links -->

                    <div class="s-header__contact">
                        <a href="contact.blade.php" class="btn btn--primary s-header__contact-btn">Contacter moi</a>                        
                    </div> <!-- s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            <!-- intro
            ----------------------------------------------- -->
            <section id="intro" class="s-intro">

                <div class="row s-intro__content width-sixteen-col">

                    <div class="column lg-12 s-intro__content-inner grid-block">
                        
                        <div class="s-intro__content-text">
                            <div class="s-intro__content-pretitle text-pretitle">Bonjour, je m'appelle Robin</div>
                            <h1 class="s-intro__content-title">
                            Découvrez mes projets,<br>
                            compétences et ma<br>
                            veille technologique sur ce site.<br>
                        </h1>
                        </div> <!-- s-intro__content-text -->

                        <div class="s-intro__content-media"> 
                            <div class="s-intro__content-media-inner">                               
                                <img src="/assets/images/photo.jpg" alt="">
                                <div class="lines">                               
                                    <span></span>                                  
                                </div>
                            </div>
                        </div> <!-- s-intro__content-media -->    
                        
                        <div class="s-header__contact">
                            <a href="/assets/files/CV_Robin_TIJOU.pdf"  class="btn btn--primary s-header__contact-btn" download>Télécharger mon CV</a>
                        </div> <!-- s-header__contact -->
                        
                    </div> <!-- s-intro__content-inner -->

                </div> <!-- s-intro__content -->

            </section> <!-- end s-intro -->

            <!-- about
            ----------------------------------------------- -->
            <section id="about" class="s-about target-section">

                <div class="row s-about__content width-sixteen-col">
                    <div class="column grid-block grid-section-split">

                        <img src="/assets/images/geometric_shape.svg" alt="" class="s-about__content-imgbg">

                        <div class="section-header grid-section-split__header">
                            <div class="text-pretitle">Objectifs Professionnels</div>                           
                                <p class="attention-getter">
                                Mon projet professionnel est de travailler dans le domaine du développement informatique et 
                                d’approfondir mes connaissances sur les technologies, en envisageant une poursuite d'études en master.
                                </p>                         
                        </div> <!-- end section-header -->  
                    
                    </div> <!-- content-inner -->
                </div>
                
            </section> <!-- end s-about -->

            <section id="clients" class="s-clients" style="width: 100%; padding: 4rem 2rem;">

                <div class="section-header" style="text-align: center; margin-bottom: 3rem;">
                    <div class="text-pretitle">BTS SIO</div>                           
                    <p class="lead" style="max-width: 900px; margin: 0 auto;">
                        Le Brevet de Technicien Supérieur aux Services Informatiques aux Organisations (BTS SIO) s'adresse à ceux qui souhaitent se former en
                        deux ans aux métiers d'administrateur réseau ou de développeur. À la suite de ce diplôme, il est possible d'intégrer directement
                        le marché du travail ou de poursuivre ses études dans le domaine de l'informatique.
                    </p>         
                </div>    

                <div class="text-pretitle" style="text-align: center; margin-bottom: 2rem;">Les options</div>                           

                <div class="grid-block" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem;">
                    <div class="grid-block__item" style="flex: 1; min-width: 300px; max-width: 500px; background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <h4 style="margin-bottom: 1rem;"><i class="fas fa-network-wired icon-network"></i> SISR (Infrastructure, Systèmes et Réseaux)</h4>
                        <p>
                            L’option SISR forme des professionnels des réseaux et équipements informatiques (installation, maintenance, sécurité).
                            Vous serez capables de gérer, sécuriser et maintenir le réseau d’une entreprise.
                        </p>
                        <ul>
                            <li>Administrateur systèmes et réseaux</li>
                            <li>Informaticien support et déploiement</li>
                            <li>Support systèmes et réseaux</li>
                            <li>Technicien d’infrastructure</li>
                            <li>Technicien réseaux</li>
                        </ul>
                    </div>

                    <div class="grid-block__item" style="flex: 1; min-width: 300px; max-width: 500px; background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                        <h4 style="margin-bottom: 1rem;"><i class="fas fa-code icon-development"></i> SLAM (Logiciels & Applications Métiers)</h4>
                        <p>
                            Cette option est destinée aux futurs développeurs. Elle enseigne à concevoir, coder et maintenir des applications logicielles.
                        </p>
                        <ul>
                            <li>Développeur d'applications informatiques</li>
                            <li>Développeur mobile</li>
                            <li>Développeur Web</li>
                            <li>Informaticien d'études</li>
                            <li>Technicien d’études informatiques</li>
                            <li>Technicien développement – exploitation</li>
                        </ul>
                    </div>
                </div>

            </section>

        <!-- # cta
        ================================================== -->
        <section id="cta" class="s-cta">

            <div class="row row-x-center text-center">
                <div class="s-cta__content">
                    <a href="contact.html" class="btn btn--primary">Contacter moi</a>
                </div>
            </div> <!-- end s-journal__content -->

        </section> <!-- end s-journal -->


        <!-- # footer 
        ================================================== -->
        <footer class="s-footer">
            <div class="row s-footer__content">              
                <div class="column xl-3 lg-6 md-12 s-footer__block s-footer__site-links">
                    <h3>Pages</h3>
                    <ul class="link-list">
                        <li><a href="/projets">Projets</a></li>
                        <li><a href="/competences">Compétences</a></li>
                        <li><a href="/veille">Veille</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>    
            
            <div class="row s-footer__bottom">
                <div class="column xl-6 lg-12">
                
                </div>
                <div class="column xl-6 lg-12">
                    <p class="ss-copyright">
                        <span>© Copyright Robin 2025</span> 
                    </p>
                </div>

                <div class="ss-go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none" stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--!  Atomicons Free 1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;<polyline points="17 11 12 6 7 11"></polyline><line x1="12" y1="18" x2="12" y2="6"></line></svg>
                    </a>
                </div> <!-- end ss-go-top -->
            </div>
            
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->

    <!-- Java Script
    ================================================== -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>