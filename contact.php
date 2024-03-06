
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
                            <a href="home.php" class="nav__link">
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
                            <a href="contact.php" class="nav__link active-link">
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
            <section class="contact section" id="contact">
                <h2 class="section__title">Contact me</h2>
                <span class="section__subtitle">Get in touch</span>

                <div class="contact__container container grid">
                    <div>
                        <div class="contact__information">
                            <i class="uil uil-phone-alt contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Phone</h3>
                                <span class="contact__subtitle">+63 09000000000</span>
                            </div>
                        </div>
                        <div class="contact__information">
                            <i class="uil uil-envelope contact__icon"></i>
                            <div>
                                <h3 class="contact__title">E-mail</h3>
                                <span class="contact__subtitle">bernalesjonas859@gmail.com</span>
                            </div>
                        </div>
                        <div class="contact__information">
                            <i class="uil uil-map-marker contact__icon"></i>
                            <div>
                                <h3 class="contact__title">Location</h3>
                                <span class="contact__subtitle">Quezon City - Phlippines</span>
                            </div>
                        </div>
                    </div>

                    <form action="https://formspree.io/f/mnqrawen" method="POST" class="contact__form grid" id="my-form">
                        <div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="" class="contact__label">Name</label>
                                <input type="text" id="name" name="name" class="contact__input" required>
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact__label">E-mail</label>
                                <input type="email" id="email" name="email" class="contact__input" required>
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact__label">Message</label>
                                <textarea id="message" name="message" cols="0" rows="6" class="contact__input"
                                    required></textarea>
                            </div>
                            <div class="contact__submit">
                                <div>
                                    <input type="submit" value="Send message" class="button button--flex"
                                        id="contact__button">
                                </div>
                                <div id="contact__status"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </main>
         

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

 