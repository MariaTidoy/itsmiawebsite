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
                        <li class="nav__item"><a href="index2.php" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="" class="nav__link">Education</a></li>
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

            <!--===== EDUCATION =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Education</h2>

                <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <h3 class="skills__subtitle">ELEMENTARY SCHOOL</h3>
                        <span class="skills__name">New Era University</span>
                        
                        <h3 class="skills__subtitle">JUNIOR HIGH SCHOOL</h3>
                        <span class="skills__name">San Francisco Highschool</span>

                        <h3 class="skills__subtitle">SENIOR HIGH SCHOOL</h3>
                        <span class="skills__name">San Francisco Highschool</span>
                    </div>

                    <div class="skills__img">
                        <img src="assets/img/educ.png" alt="">
                    </div>
                </div>
            </section>
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>