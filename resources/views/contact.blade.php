<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - Robin</title>

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
                <span class="page-title__small-type text-pretitle">Contact</span>
                </h1>                            
            </div>
            </div>
        </section>

        <section class="s-pagecontent pagecontent">
            <div class="container">
            <div class="row">
                <div class="column xl-8 lg-10 offset-xl-2 offset-lg-1">
                <h2 class="text-center">Contactez-moi</h2>
                <form 
                    action="https://formspree.io/f/xovwaeko" 
                    method="POST" 
                    class="s-contact-form"
                    id="contactForm"
                >
                    <div class="form-field">
                    <label for="name">Nom <span class="required">*</span></label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="full-width" 
                        placeholder="Votre nom" 
                        required
                    >
                    </div>

                    <div class="form-field">
                    <label for="email">Email <span class="required">*</span></label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="full-width" 
                        placeholder="votre@email.com" 
                        required
                    >
                    </div>

                    <div class="form-field">
                    <label for="subject">Sujet <span class="required">*</span></label>
                    <input 
                        type="text" 
                        id="subject" 
                        name="subject" 
                        class="full-width" 
                        placeholder="Sujet du message" 
                        required
                    >
                    </div>

                    <div class="form-field">
                    <label for="message">Message <span class="required">*</span></label>
                    <textarea 
                        id="message" 
                        name="message" 
                        class="full-width" 
                        rows="6" 
                        placeholder="Écrivez votre message ici..." 
                        required
                    ></textarea>
                    </div>

                    <div class="form-field text-center">
                    <button type="submit" class="btn btn--primary" id="submitBtn" >
                        <span class="btn-text">Envoyer le message ✉️</span>
                        <span class="spinner" aria-hidden="true"></span>
                    </button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </section>

        </section>

        <style>
        .form-field {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .btn {
            position: relative;
            background-color: #007bff;
            border: none;
            color: white;
            padding: 0.75rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            border-radius: 6px;
            user-select: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        .btn:hover:not(:disabled) {
            background-color: #0056b3;
        }
        .btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .btn-text {
            display: inline-block;
            margin-right: 0.6rem;
        }

        /* Spinner */
        .spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 3px solid white;
            border-top-color: transparent;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        .btn.loading .spinner {
            display: inline-block;
        }
        .btn.loading .btn-text {
            opacity: 0.6;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .required {
            color: #d9534f;
        }

        .text-center {
            text-align: center;
        }
        </style>

        <script>
        const form = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');

        form.addEventListener('submit', function(e) {
            // Dès que submit est cliqué, on active le spinner et désactive le bouton
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
        });
        </script>


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