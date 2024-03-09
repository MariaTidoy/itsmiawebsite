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
                        <li class="nav__item"><a href="index3.php" class="nav__link">Education</a></li>
                        <li class="nav__item"><a href="index4.php" class="nav__link">Preference</a></li>
                        <li class="nav__item"><a href="" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <div class="contact__info">
                        <h3 class="contact__subtitle">EMAIL</h3>
                        <span class="contact__text">mariaadelinetidoy@gmail.com</span>

                        <h3 class="contact__subtitle">PHONE</h3>
                        <span class="contact__text">+639624108656</span>

                        <h3 class="contact__subtitle">ADDRESS</h3>
                        <span class="contact__text">Novaliches, Quezon City, Philippines</span>
                    </div>
                   
                <form action="send.php" method="post">
                <h2 class="about__subtitle">Send feedback</h2>
                
                <div class="contact__inputs">
                    <input type="text" placeholder="Name" name="name" class="contact__input"> 
                    <input type="mail" placeholder="Email" name="email" class="contact__input">
                    <input type="text" placeholder="Subject" name="subject" class="contact__input">
                </div>

                    <textarea name="message" id="" cols="0" rows="10" class="contact__input" placeholder="Your Feedback"></textarea>
                   <button type="submit" name="send">Send Message</button>
                </form>
                </div>
            </section>
        </main>
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>

