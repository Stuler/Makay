<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../www/css/normalize.css">
        <link rel="stylesheet" href="../www/css/style.css">
<!--        <link rel="stylesheet" href="../www/css/bootstrap.css">-->
        <title><?=$title?></title>
    </head>

    <body>

        <header class="nav-bar">
            <div class="container">
                <h1 class="logo">
                    <a href="../www/index.php">MAKAY</a>
                </h1>
                <nav class="navigation group">
                    <ul class="menu  mainmenu">
                        <li><a href=#feat>Features</a></li>
                        <li><a href=#how>How it works</a></li>
                        <li><a href=#blog>Blog</a></li>
                        <li><a href=#contact>Contact</a></li>
                    </ul>
                    <ul class="menu subscribe">
                        <li><a href="login.php">Log In</a></li>
                        <li class="highlighted"><a href="signup.php">Sign Up</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <span><a href="../model/addExcercise.php">Add new excercise</a></span><br/>
            <span><a href="../model/excercises.php">Show excercises</a></span><br/>
            <?=$output?>

        </main>

        <footer class="nav-bar footer-bar footnav">
            <div class="container ">
                <h1 class="logo">
                    <a href="">MAKAY</a>
                </h1>
                <article class="footer-text">
                    Copyright © <?=date('Y')?>, Peter Jurek,  All rights reserved.
                </article>
                <nav class="navigation  group">
                    <ul class="menu footermenu subscribe">
                        <li><a href="terms_of_use.php">Terms of use</a></li>
                        <li><a href="privacy_policy.php">Privacy policy</a></li>
                    </ul>
                </nav>
            </div>
        </footer>

        <script src="js/app.js"></script>

    </body>

</html>