
<!DOCTYPE html>
<html lang="en">

    <head>
        <!--==================== META ====================-->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Jonas Bernales - Personal Website</title>
        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <!--==================== TYPELIGHTER JS ====================-->
        <script src ="https://cdn.jsdelivr.net/npm/typelighterjs/typelighter.min.js"></script>
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <!--==================== FAVICON ====================-->
        <link rel="shortcut icon" href="assets/img/general/favicon.png" type="image/png">
        <!--==================== GOOGLE ANALYTICS ====================-->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1PWGHS8967"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-1PWGHS8967');
        </script>
    </head>

    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Jonas</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="home.php" class="nav__link active-link">
                                <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="about.php" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="skills.php" class="nav__link">
                                <i class="uil uil-atom nav__icon"></i> Skills
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="qualification.php" class="nav__link">
                                <i class="uil uil-book-alt nav__icon"></i> Qualification
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="certicications.php" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Certifications
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="projects.php" class="nav__link">
                                <i class="uil uil-desktop-alt nav__icon"></i> Projects
                            </a>
                        </li>
                     
                        <li class="nav__item">
                            <a href="contact.php" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contact
                            </a>
                        </li>
                         <li class="nav__item">
                            <a href="index.php" class="nav__link">
                                <i class="uil uil-signout nav__icon"></i> Logout
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.facebook.com/jonasbernales19" target="_blank" class="home__social-icon">
                                <i class="uil uil-facebook-f"></i>
                            </a>

                            <a href="https://github.com/Jonas859" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>

                            <a href="https://www.instagram.com/xeejooo/_" target="_blank" class="home__social-icon">
                                <i class="uil uil-instagram"></i>
                            </a>

                        </div>

                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                </mask>
                                <g mask="url(#mask0)">
                                    <path
                                        d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                    <image class="home__blob-img" x="-5" y="0" href="assets/img/general/me.jpg" />
                                </g>
                            </svg>
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">
                                Hello, <span class="home__colored-text">Jonas</span> here.<span class="home__colored-text"></span>
                            </h1>
                            <h2 class="home__subtitle">
                                <span class="typeWriter" data-text='["BSIT- MI Student", "Welcome to my personal website"]'></span>
                            </h2> 
                           
                            <a href="#contact" class="home__button button button--flex">
                                Say hi <i class="uil uil-envelope-alt button__icon"></i>
                            </a>
                        </div>
                    </div>

                    
                </div>
            </section>

         

       <!--==================== FOOTER ====================-->
      <footer class="footer">
        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <br>
                    
                    <h1 class="footer__title">Jonas</h1>
                    <span class="typeWriter footer__subtitle" data-text="BSIT- MI Student" <br> "Welcome to my personal website"</span>
                </div>

              <br>
              <br>
              <br>
              <br>
              <br>

           
                <div class="footer__socials">
                    <br>
                    <br>
                    <a href="https://www.facebook.com/jonasbernales19" target="_blank" class="footer__social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://github.com/Jonas859" target="_blank" class="footer__social">
                        <i class="uil uil-github-alt"></i>
                    </a>
                    <a href="https://www.instagram.com/xeejooo/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>

                </div>
            </div>

            <p class="footer__copy">&copy; Copyright 2024. Jonas Bernales</p>
        </div>
    </footer>



    <!--==================== SWIPER JS ====================-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--==================== SCROLL REVEAL JS ====================-->
    <script src="assets/js/scrollreveal.min.js"></script>
    <!--==================== MAIN JS ====================-->
    <script src="assets/js/main.js"></script>
    <!--==================== FONTAWESOME ====================-->
    <script src="https://kit.fontawesome.com/b58a420f20.js" crossorigin="anonymous"></script>
</body>

</html>

 