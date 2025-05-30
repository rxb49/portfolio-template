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
        
        .projectW-card {
            background-color: #fff;
            border-radius: 12px;
            padding: 3rem;
            margin-bottom: 4rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .projectW-card:hover {
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
        
        .projectW-actions {
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
            .projectW-card {
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

            <section id="projet-wordpress" class="s-clients">
                <div class="container projectW-card" id="avancement-projet">
                    <h2>Gestion de la RAFP</h2>
                        <h4>Description du projet :</h4>
                        <p>Conception d’un outil visant à automatiser la gestion de la RAFP (Retraite Additionnelle de la Fonction Publique) pour la
                            régularisation de l’année N-1. 
                            Ce dispositif concerne les agents de l’Université d’Angers ayant exercé une activité auprès d’un employeur secondaire durant 
                            l’année écoulée. Les données des salariés sont collectées via un fichier Excel, qui doit ensuite être intégré dans une base de 
                            données afin de permettre l’automatisation des calculs. Les résultats sont ensuite transmis aux employeurs secondaires ainsi 
                            qu’aux agents concernés, sous forme de mails ou de fichiers PDF.
                        </p>

                        <h4>Technologies utilisées :</h4>
                        <div>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/intellij/intellij-original.svg" width="48" />
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original.svg" width="48"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/oracle/oracle-original.svg" width="48" />
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/sqldeveloper/sqldeveloper-original.svg" width="48"/>
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tomcat/tomcat-original.svg" width="48" />

                        </div>

                        <h4>Choix de ces technologies :</h4>
                        <p>J’ai eu le choix concernant l’environnement de développement, et j’ai opté pour IntelliJ, un IDE avec lequel j’étais déjà à 
                            l’aise. Pour la gestion de la base de données, on m’a recommandé SQL Developer, un outil qui m’a convenu grâce à son interface 
                            simple et intuitive, même si d’autres alternatives étaient possibles. La base de données est sous Oracle, comme précisé dans 
                            le cahier des charges. Quant à Tomcat, il était déjà configuré, je me suis donc contenté de l’installer sur mon poste afin de 
                            gagner du temps et éviter de repartir de zéro. Pour le développement en Java, j’ai utilisé une application existante comme base, 
                            également développée en Java, ce qui m’a permis de rester cohérent avec les exigences du cahier des charges qui imposait ce langage. 
                            Enfin, ces outils (IntelliJ, SQL Developer, Oracle, Tomcat, Java) sont largement utilisés dans les projets de l’université. 
                            Cela facilite la continuité entre les développeurs et garantit une cohérence entre les différentes applications. L’outil Gitlab 
                            est utilisé pour le suivi et la gestion des versions des applications.
                        </p>

                            

                    <div class="steps-container">
                        <div class="step-item">
                            <h3>&nbsp;Initialisation de l’année N-1 (page d’accueil)</h3>
                            <p>
                                Lorsqu’on accède à la page d’accueil, un traitement récupère les données des agents ayant eu un employeur secondaire. 
                                Ce traitement, prévu pour devenir un batch automatique, calcule notamment le TBI, les indemnités, le seuil, et les cotisations RAFP.
                            </p>
                            <div class="img-container">
                                <img src="assets/images/rafp/initialisation.png" alt="Initialisation">
                            </div>
                        </div>

                        <div class="step-item">
                            <h3>&nbsp;Gestion des employeurs</h3>
                            <p>
                                Il est possible d’ajouter, modifier ou supprimer des employeurs secondaires. Les modifications se font 
                                dynamiquement avec AJAX sans rechargement complet de la page.
                            </p>
                            <div class="img-container">
                                <img src="assets/images/rafp/gestionEmployeur.png" alt="Gestion Employeur">
                            </div>
                        </div>

                        <div class="step-item">
                            <h3>&nbsp;Données employeurs</h3>
                            <p>
                                Chaque fiche employeur permet de voir les agents associés et de modifier ou supprimer un agent, ce qui met à jour 
                                les montants automatiquement.
                            </p>
                            <div class="img-container">
                                <img src="assets/images/rafp/donneesEmployeur.png" alt="Données Employeur">
                            </div>
                            <p>
                                Dans la fiche de l'employeur, on peut y voir la liste des agents rattachées et pour chaque 
                                agent le montant de rémunération annuel perçut par celui-ci.
                            </p>

                            <div class="img-container">
                                <img src="assets/images/rafp/listeEmployeur.png" alt="Liste Employeur">
                            </div>

                            <p>
                                En cas d’erreur, il est également possible de modifier le montant. Cela affichera une page 
                                contenant les informations de l’employeur, de l’agent concerné ainsi que l’ancien montant, 
                                que l’on pourra alors modifier. Il est aussi possible de supprimer un agent rattaché à un employeur, 
                                ce qui mettra automatiquement à jour le montant retour de l’agent pour cet employeur ainsi que celui de l’agent concerné (dans la page Données agents).
                            </p>

                            <div class="img-container">
                                <img src="assets/images/rafp/modifierEmployeur.png" alt="Modifier Employeur">
                            </div>

                            <div class="img-container">
                                <img src="assets/images/rafp/supprimerEmployeur.png" alt="Supprimer Employeur">
                            </div>
                        </div>

                        <div class="step-item">
                            <h3>&nbsp;Données agents</h3>
                            <p>
                                Cette page fonctionne de manière similaire à celle des données employeurs, mais elle est dédiée aux agents. Elle permet de rechercher un agent 
                                et d’accéder à sa fiche, qui présente les employeurs secondaires pour lesquels il a travaillé. Dans la fiche de l’agent, on retrouve les montants récupérés 
                                lors de l’initialisation de l’année N-1 (TBI, indemnités, seuil, etc.). Y figurent également les employeurs, accompagnés des montants 
                                totaux perçus par l’agent auprès de chacun d’eux. La somme de ces montants est affichée dans la colonne "Total retour", qui est 
                                automatiquement recalculée à chaque ajout ou modification d’un employeur. Toute modification, ajout ou suppression d’un montant lié à 
                                un employeur entraîne donc une mise à jour de l’ensemble des montants associés à l’agent.
                            </p>

                            <div class="img-container">
                                <img src="assets/images/rafp/infoAgent.png" alt="Info Agent">
                            </div>
                            
                        </div>

                        <div class="step-item">
                            <h3>&nbsp;Import de fichier CSV</h3>
                            <p>
                                L'une des fonctionnalités principales de l'application est la possibilité d'importer des fichiers CSV contenant le numéro 
                                Insee d'un agent, l'identifiant de l'employeur donné aux RH, ainsi qu'un montant. Chaque début d'année, la DRH reçoit des 
                                fichiers CSV de tous les employeurs secondaires des agents de l'Université d'Angers. Elle doit pouvoir sélectionner et 
                                importer son fichier CSV dans l'application, qui procédera ensuite au traitement et à l'insertion des données dans la base de données.
                            </p>

                            <div class="img-container">
                                <img src="assets/images/rafp/importCSV.png" alt="Import CSV">
                            </div>

                            <p>
                                Les données sont placées dans une table temporaire, qui est ensuite affichée à l'utilisateur pour qu'il 
                                puisse vérifier leur exactitude. Après avoir vérifié les données, l'utilisateur peut choisir de les importer, 
                                ce qui les ajoutera à la table finale et les supprimera de la table temporaire, ou bien il peut annuler l'importation, 
                                ce qui supprimera simplement les données de la table temporaire sans les insérer.
                            </p>

                            <div class="img-container">
                                <img src="assets/images/rafp/listeImport.png" alt="Liste Import CSV">
                            </div>
                            
                        </div>

                        <div class="step-item">
                            <h3>&nbsp;Calcul de la RAFP</h3>
                            <p>
                                Une fois les données collectées, il est possible de calculer la RAFP. Le calcul se fait via une requête SQL fournie. 
                                Elle répartit les montants entre les employeurs secondaires. L’utilisateur peut déclencher ce calcul manuellement.
                            </p>

                            <div class="img-container">
                                <img src="assets/images/rafp/calculRafp.png" alt="Calcul RAFP">
                            </div>
                        </div>

                        <div class="step-item">
                            <h3>&nbsp;Génération/Téléchargement de fichiers CSV</h3>
                            <p>
                                Après calcul, les fichiers CSV pour chaque agent et employeur sont générés, regroupés dans un zip téléchargeable.
                            </p>
                            <div class="img-container">
                                <img src="assets/images/rafp/telechargementZip.png" alt="Telechargement">
                            </div>
                        </div>

                        <h3>Tâches restantes</h3>
                        <ul>
                            <li>Améliorer l'import CSV (affichage des données valides/invalides).</li>
                            <li>Ajouter une option d'envoi des fichiers CSV par e-mail depuis l’application.</li>
                        </ul>
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