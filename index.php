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

            <?php
            session_start(); // Start session
 
            if (isset($_SESSION['fname'])) {
                echo "<div class='nav__logo'>Welcome to my Website, <span id='username'>" . $_SESSION['fname'] . "!</span></div>";
            } 
            ?>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="index2.php" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="index3.php" class="nav__link">Education</a></li>
                        <li class="nav__item"><a href="index4.php" class="nav__link">Preference</a></li>
                        <li class="nav__item"><a href="index5.php" class="nav__link">Contact</a></li>
                        <li class="nav__item"><a href="logout.php" class="nav__link">Login</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>IT'S</span><br>MIA</h1>

                    <div class="home__scroll">
                    </div>

                    <img src="assets/img/me.png" alt="" class="home__img">
                </div>
            </section>
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>