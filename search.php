<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src='search/search.js'></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src='js/device.min.js'></script>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header id="header" class="header header__ins1 vide" data-vide-bg="video/party" data-vide-options="posterType: jpg">

        <div class="container vide_content">
            <div id="home" class="brand brand__sm">
                <h1 class="brand_name">
                    <a href="./"><img src="images/logo.png" alt="OASIS Night Club"/></a>
                </h1>
                <p class="brand_slogan">
                    night club
                </p>
            </div>
        </div>

        <nav class="nav">
            <a class="sf-menu-toggle fa fa-bars" href="#"></a>
            <ul class="sf-menu">
                <li>
                    <a href="index.html#home">HOME</a>
                </li>
                <li>
                    <a href="index.html#about">ABOUT</a>
                    <ul>
                        <li>
                            <a href="#">Lorem ipsum</a>
                        </li>
                        <li>
                            <a href="#">Dolor sit</a>
                            <ul>
                                <li>
                                    <a href="#">Sit amet</a>
                                </li>
                                <li>
                                    <a href="#">Adipisicing elit</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="index.html#events">Events</a>
                </li>
                <li>
                    <a href="index.html#menu">Menu</a>
                </li>
                <li>
                    <a href="index.html#photos">Photos</a>
                </li>
                <li>
                    <a href="index.html#contacts">CONTACTS</a>
                </li>
            </ul>
        </nav>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <section id="content" class="content">

        <div class="container well">
            <h2>Search Results</h2>

            <div id="search-results"></div>
        </div>

    </section>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer id="footer" class="footer footer__ins1 parallax parallax4">
        <div class="container center">
            <div class="copyright">
                Night club © <span id="copyright-year"></span>.
                <a href="index-1.html">Privacy Policy</a>
            </div>
    </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>