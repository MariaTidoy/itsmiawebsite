<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Personal website</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">It's Mia</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.php" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="index3.php" class="nav__link">Education</a></li>
                        <li class="nav__item"><a href="index4.php" class="nav__link">Preference</a></li>
                        <li class="nav__item"><a href="index5.php" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/me.png" alt="">
                    </div>

                    <div>
                        <h2 class="about__subtitle">Maria Adeline P. Tidoy</h2>
                        <span class="about__profession">BSIT Student</span>
                        <p class="about__text">Currently enrolled in National University-Fairview's BSIT program. <br>In the future, I'd like to work as an IT business analyst.<br> "It's been said that If you get tired, learn to rest not to quit." </p>

                        <h2 class="about__subtitle">Follow me on</h2>
                        <div class="about__social">
                            <a href="https://www.linkedin.com/in/maria-adeline-tidoy-8b17a4252/" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                            <a href="https://github.com/MariaTidoy" class="about__social-icon"><i class='bx bxl-github' ></i></a>
                            <a href="https://www.facebook.com/adiie42/" class="about__social-icon"><i class='bx bxl-facebook' ></i></a>
                        </div>
                    </div>
                </div>
            </section>
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>