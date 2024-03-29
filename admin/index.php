<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treehouse-Home</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="adminPanel">
    <div class="container">
        <?php
            if (!isset($_COOKIE['Autorization'])) {
                echo '<a href="login.php">Войти</a>';
            } else {
                echo '<a href="logout.php">Выйти</a>';
            }
        ?>
    </div>
</div>

<header class="header">
    <div class="container">
    <a href="index.php"><img src="uploads/Logo.png" alt="#" /></a>
<nav>
<ul class="nav">
    <li><a href="index.php">Главная</a></li>
    <li><a href="about.php">О Нас</a></li>
    <li><a href="uslugi.php">Услуги</a></li>
    <li><a href="contact.php">Контакты</a></li>
   <?php if (isset($_COOKIE['Autorization'])) {
       echo '<li><a href="explorer.php">Файловый менеджер</a></li>';
   } ?>

</ul>
</nav>
    </div>
</header>

<section class="promo">
    <div class="container-background img-1">
        <div class="container">

            <h2>Creative Digital Solutions</h2>
            <p>Lorem ipsum dolor sit amet.</p>
            <a href="#" class="btn">View portfolio</a>

        </div>
    </div>
</section>

<section class="services padding">
    <div class="container">
        <h2>Professional services</h2>
        <p>Lorem ipsum dolor sit amet.</p>
        <ul class="services-list">
            <li>
                <div class="services-img services-img1"></div>
                <span class="services-name">Beautiful designs</span>
                <p class="services-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur reiciendis sapiente sint tenetur. Provident, veritatis!</p>
            </li>
            <li>
                <div class="services-img services-img2"></div>
                <span class="services-name">Responsive web</span>
                <p class="services-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur reiciendis sapiente sint tenetur. Provident, veritatis!</p>
            </li>
            <li>
                <div class="services-img services-img3"></div>
                <span class="services-name">Marketing tools</span>
                <p class="services-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur reiciendis sapiente sint tenetur. Provident, veritatis!</p>
            </li>
        </ul>
    </div>
</section>

<section class="promo padding">
    <div class="container-background img-2">
        <div class="container left">

            <h2>Just relax <span class="green">&</span> let us do the heavy lifting</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero quasi, voluptates! Aliquid consectetur cupiditate omnis.</p>
            <ul>
                <li>Initial Setup & Customization</li>
                <li>Regular Updates</li>
                <li>Round The Clock Support</li>
            </ul>
            <a href="#" class="btn">Learn More</a>

        </div>
    </div>
</section>

<section class="latest-project padding">
    <div class="container-background img3">
        <div class="container">

            <h2>Latest project</h2>
            <p class="latest-project-h2-description">Lorem ipsum dolor sit amet.</p>
            <h4>Developing A Framework</h4>
            <p class="latest-project-h4-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id, tenetur harum fuga rem enim esse?</p>
            <ul>
                <li>
                    <h5>E-Commerce Ready</h5>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <h5>Powerful SEO Features</h5>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                </li>
                <li>
                    <h5>Secure Encryption</h5>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                </li>
            </ul>

            <p class="latest-project-h4-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, ratione?</p>
            <a href="#" class="view-details">View Details</a>

        </div>
    </div>
</section>

<footer class="footer padding">
    <div class="footer-information">
        <div class="container-background">
            <div class="container">
                <ul class="main-footer-list">

                    <li class="main-footer-list-li">
                        <h4>Contact Us</h4>

                        <ul class="contact-us-footer-list">
                            <li><a href="#" class="adress">55 main St. Toronto, ON MIH 3A5</a></li>
                            <li><a href="#" class="mobile">(416) 555-5252</a></li>
                            <li><a href="#" class="email">hello@treehouse.com</a></li>
                        </ul>                     
                                                                        
                    </li>

                    <li class="main-footer-list-li">
                        <h4>Latest Tweets</h4>

                        <ul class="latest-tweets-footer-list">
                            <li><a href="#">Confucious: Life is really simple, but we insist on making it complicated.</a><a href="#" class="bold">#famousquotes</a><span class="tweet-time">8 mins ago</span></li>
                            <li><a href="#">Grab the Free Treehouse web teamplate at FreebiesXpress!</a><a href="#" class="bold">#freebies #templates</a><span class="tweet-time">2 days ago</span></li>
                        </ul>

                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-messangers padding">
        <div class="container">
            <span class="copyright">&copy; Copyright 2014 FreebiesXpress.com</span>
            <ul>
                <li><a href="#" class="a-tw"></a></li>
                <li><a href="#" class="a-fb"></a></li>
                <li><a href="#" class="a-pr"></a></li>
                <li><a href="#" class="a-gm"></a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>

