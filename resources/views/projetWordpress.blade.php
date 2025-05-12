<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projets</title>

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
    <style>
        /* Styles personnalisés */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .project-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 3rem;
            margin-bottom: 4rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 2rem 0;
        }
        
        .tech-item {
            display: flex;
            align-items: center;
            background-color: #f5f5f5;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.9rem;
        }
        
        .tech-item img {
            margin-right: 8px;
        }
        
        .project-actions {
            margin: 2rem 0;
            text-align: center;
        }
        
        .code-block {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1.5rem 0;
            overflow-x: auto;
            font-size: 0.9rem;
        }
        
        .code-block pre {
            margin: 0;
            white-space: pre-wrap;
        }
        
        .code-block code {
            display: block;
            line-height: 1.5;
            font-family: monospace;
        }
        
        .img-container {
            display: flex;
            justify-content: center;
            margin: 1.5rem 0;
        }
        
        .img-container img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }
        
        .steps-container {
            counter-reset: step-counter;
            margin: 2rem 0;
        }
        
        .step-item {
            position: relative;
            padding-left: 2.5rem;
            margin-bottom: 1.5rem;
        }
        
        .step-item::before {
            content: counter(step-counter);
            counter-increment: step-counter;
            position: absolute;
            left: 0;
            top: 0;
            width: 30px;
            height: 30px;
            background-color: #4a68db;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        .pdf-embed {
            width: 100%;
            height: 500px;
            border-radius: 8px;
            overflow: hidden;
        }
        
        @media (max-width: 768px) {
            .project-card {
                padding: 1.5rem;
            }
        }
    </style>
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
    <div id="page" class="s-pagewrap">


        <!-- # site header 
        ================================================== -->
        <header class="s-header">

            <div class="row s-header__inner width-sixteen-col">

            <div class="s-header__block">
                    <div class="s-header__logo">
                    <a class="logo" href="/">
                            <img src="/assets/images/logo.svg" alt="Homepage">
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
                        <a href="contact.html" class="btn btn--primary s-header__contact-btn">Contacter moi</a>                        
                    </div> <!-- s-header__contact -->
    
                </nav> <!-- end s-header__nav -->

            </div> <!-- end s-header__inner -->

        </header> <!-- end s-header -->


        <!-- # site main content
        ================================================== -->
        <section id="content" class="s-content">

            <section class="s-pageheader pageheader">
                <div class="container">
                    <h1 class="page-title">
                        <span class="page-title__small-type text-pretitle">Projets</span>
                    </h1>
                </div>
            </section>

            <section id="projet-wordpress" class="s-clients">
                <div class="container">
                    <div class="project-card">
                        <h3>Projet 1 : Création d'un site vitrine avec Wordpress/Stripe</h3>

                        <h4>Description du projet :</h4>
                        <p>Création d'un site Wordpress pour Bandyy, une entreprise événementielle, intégrant un tunnel de paiement Stripe pour l'accès aux offres.</p>

                        <h4>Technologies utilisées :</h4>
                        <div>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg" width="24">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" width="24">
                            <img src="assets/images/icons/stripe.png" width="24">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" width="24">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" width="24">
                        </div>

                        <h4>Choix de ces technologies :</h4>
                        <p>Wordpress pour sa facilité d'utilisation, Stripe pour le paiement, HTML/CSS pour personnalisation visuelle.</p>

                        <h4>Difficultés rencontrées :</h4>
                        <h5>Création du fichier docker-compose</h5>
                        <p>
                        Pour Installer Wordpress, j'ai utilisé Docker pour avoir une base
                        de données en plus et pouvoir exporter le site facilement. le
                        fichier docker-compose permet de déployer à la fois Wordpress, mais
                        aussi une base de données en local.
                        </p>
                        <div class="code-block">
                            <pre><code>services:
                                        wordpress:
                                            image: wordpress:latest
                                            container_name: wordpress
                                            volumes:
                                            - ./wordpress:/var/www/html
                                            environment:
                                            - WORDPRESS_DB_NAME=wordpress
                                            - WORDPRESS_TABLE_PREFIX=wp_
                                            - WORDPRESS_DB_HOST=db:3306
                                            - WORDPRESS_DB_USER=root
                                            - WORDPRESS_DB_PASSWORD=password
                                            depends_on:
                                            - db
                                            - phpmyadmin
                                            restart: always
                                            ports:
                                            - 8080:80

                                        db:
                                            image: mariadb:latest
                                            container_name: db
                                            volumes:
                                            - ./mariadb_db_data:/var/lib/mysql
                                            ports:
                                            - 3306:3306
                                            environment:
                                            - MYSQL_ROOT_PASSWORD=password
                                            - MYSQL_USER=root
                                            - MYSQL_PASSWORD=password
                                            - MYSQL_DATABASE=wordpress
                                            restart: always

                                        phpmyadmin:
                                            depends_on:
                                            - db
                                            image: phpmyadmin/phpmyadmin:latest
                                            container_name: phpmyadmin
                                            restart: always
                                            ports:
                                            - 8081:80
                                            environment:
                                            PMA_HOST: db
                                            MYSQL_ROOT_PASSWORD: password
                                        </code>
                                    </pre>
                        </div>
                        
                        <ul>
                            <li>Choix de l'éditeur (Gutenberg vs Elementor) et personnalisation CSS</li>
                            <li>Migration du site sur un serveur de test</li>
                            <li>Intégration de Stripe</li>
                        </ul>

                        <h4>Tarification avec Stripe :</h4>
                        <div class="steps-container">
                            <div class="step-item">
                                <p>&nbsp;Ajout d'un produit dans Stripe</p>
                                <p>Cliquez sur "Ajouter un produit" puis sur "Ajouter un tarif".
                                    Remplissez les détails du tarif : nom, prix, devise, fréquence
                                    de facturation (par exemple, mensuelle ou annuelle).
                                </p>
                                <div class="img-container">
                                    <img src="assets/images/ajout-produit.png" alt="Ajout produit Stripe" style="max-width: 400px;">
                                </div>
                            </div>

                            <div class="step-item">
                                <p>&nbsp;Ajout du tableau de prix</p>
                                <p>Une fois le tarif créé, il convient d'ajouter un tableau de prix avec
                                    les différents produits.
                                </p>
                                <div class="img-container">
                                    <img src="assets/images/tableau-prix.png" alt="Tableau des prix" style="max-width: 400px;">
                                </div>
                            </div>

                            <div class="step-item">
                                <p>&nbsp;Intégration du script Stripe</p>
                                <p>Pour utiliser ce tableau, il faut intégrer le script généré par
                                    Stripe dans la page Wordpress.</p>
                                <div class="img-container">
                                    <img src="assets/images/script.png" alt="Script Stripe" style="max-width: 100%;">
                                </div>
                                <div class="img-container">
                                    <img src="assets/images/tarif.png" alt="Tarif Stripe" style="max-width: 400px;">
                                </div>
                            </div>
                        </div>

                        <div class="project-actions">
                            <a href="https://stripe.com/fr" target="_blank" class="btn">Lien vers Stripe</a>
                        </div>

                        <h4>Maquette du site :</h4>
                        <div class="pdf-embed">
                            <embed src="assets/files/site-bandyy.pdf" type="application/pdf" width="100%" height="500px">
                        </div>

                        <h4>Résultat final :</h4>
                        <p>Trois semaines de travail en raison de nombreux défis techniques rencontrés.</p>

                        <div class="project-actions">
                            <a href="https://www.bandyy.fr/" class="btn btn--primary">Voir le projet</a>                        
                        </div>
                    </div>
                </div>
            </section>
        </section>


        <!-- # footer 
        ================================================== -->
        <footer class="s-footer">
            <div class="container">
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
                    <div class="column xl-6 lg-12"></div>
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
            </div>
        </footer> <!-- end s-footer -->

    </div> <!-- end page-wrap -->

    <!-- Java Script
    ================================================== -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>