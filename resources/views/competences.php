<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compétences - Robin</title>

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
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="manifest" href="site.webmanifest">

    <style>
        /* Styles personnalisés pour les compétences */
        .competences-hero {
            text-align: center;
            padding: 4rem 0;
            background: linear-gradient(135deg, rgba(240, 240, 255, 0.2) 0%, rgba(230, 230, 250, 0.1) 100%);
        }

        .competences-hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            padding: 4rem 0;
            max-width: 1200px;
            margin: 0 auto;
        }

        .skill-card {
            background: rgba(226, 226, 226, 0.6);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(99, 102, 241, 0.3);
            border-radius: 20px;
            padding: 2.5rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .skill-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(139, 92, 246, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .skill-card:hover::before {
            opacity: 1;
        }

        .skill-card:hover {
            transform: translateY(-10px);
            border-color: rgba(99, 102, 241, 0.3);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .skill-card h2 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #1a1a1a;
            position: relative;
            z-index: 2;
        }

        .skills-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .skill-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 1rem;
            background: rgba(230, 230, 250, 0.5);
            border-radius: 12px;
            border: 1px solid rgba(99, 102, 241, 0.1);
            transition: all 0.3s ease;
        }

        .skill-item:hover {
            background: rgba(255, 255, 255, 0.8);
            border-color: rgba(99, 102, 241, 0.3);
            transform: scale(1.02);
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.15);
        }

        .skill-icon {
            width: 64px;
            height: 64px;
            margin-bottom: 0.8rem;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: bold;
            color: white;
        }

        .skill-name {
            font-size: 2rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 0.3rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .skills-grid {
                grid-template-columns: 1fr;
                padding: 2rem 1rem;
            }

            .skill-card {
                padding: 2rem;
            }

            .skills-list {
                grid-template-columns: 1fr;
            }

            .competences-hero h1 {
                font-size: 2.5rem;
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
                    <div class="row">
                        <div class="column xl-12">
                            <h1 class="page-title">
                                <span class="page-title__small-type text-pretitle">Compétences</span>
                            </h1>
                            
                        </div>
                    </div>
               </section> <!-- end pageheader --> 

            <!-- Skills Grid -->
            <section class="s-pagecontent pagecontent">
                <div class="row">
                    <div class="column xl-12">
                        <div class="skills-grid">
                            
                            <!-- Développement FrontEnd Card -->
                            <div class="skill-card">
                                <h2>Développement FrontEnd</h2>
                                <div class="skills-list">
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-html5-plain colored"></i>
                                        </div>
                                        <div class="skill-name">HTML</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-css3-plain colored"></i>
                                        </div>
                                        <div class="skill-name">CSS</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-javascript-plain colored"></i>
                                        </div>
                                        <div class="skill-name">JavaScript</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-react-original colored"></i>
                                        </div>
                                        <div class="skill-name">React</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Développement BackEnd Card -->
                            <div class="skill-card">
                                <h2>Développement BackEnd</h2>
                                <div class="skills-list">
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-php-plain colored"></i>
                                        </div>
                                        <div class="skill-name">PHP</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-laravel-plain colored"></i>
                                        </div>
                                        <div class="skill-name">Laravel</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-csharp-plain colored"></i>
                                        </div>
                                        <div class="skill-name">C# Entity Framework</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/openapi/openapi-original.svg" width="40" />
                                        </div>
                                        <div class="skill-name">API REST</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Base de données Card -->
                            <div class="skill-card">
                                <h2>Base de données</h2>
                                <div class="skills-list">
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-mysql-plain colored"></i>
                                        </div>
                                        <div class="skill-name">MySQL</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/sqldeveloper/sqldeveloper-original.svg" width="40"/>
                                        </div>
                                        <div class="skill-name">SQL</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/sqldeveloper/sqldeveloper-original.svg" width="40"/>
                                        </div>
                                        <div class="skill-name">NoSQL</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-mongodb-plain colored"></i>
                                        </div>
                                        <div class="skill-name">MongoDB</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Gestion de projet Card -->
                            <div class="skill-card">
                                <h2>Gestion de projet</h2>
                                <div class="skills-list">
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-trello-plain colored"></i> <!-- closest to Agile if no icon exists -->
                                        </div>
                                        <div class="skill-name">Agile</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-trello-plain colored"></i>
                                        </div>
                                        <div class="skill-name">Scrum</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-git-plain colored"></i>
                                        </div>
                                        <div class="skill-name">Git</div>
                                    </div>
                                    <div class="skill-item">
                                        <div class="skill-icon">
                                            <i class="devicon-jira-plain colored"></i>
                                        </div>
                                        <div class="skill-name">Jira</div>
                                    </div>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </section>

        </section> <!-- s-content-->

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