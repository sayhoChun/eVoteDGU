<nav id="nav" class="navbar nav-transparent">
    <div class="container">
        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a href="<?=URL_PATH_WEB?>">
                    <img class="logo" src="<?=URL_PATH_WEB?>/img/logo.png" alt="logo">
                    <img class="logo-alt" src="<?=URL_PATH_WEB?>/img/logo-alt.png" alt="logo">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Collapse nav button -->
            <div class="nav-collapse">
                <span></span>
            </div>
            <!-- /Collapse nav button -->
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
            <li><a href="<?=URL_PATH_WEB?>">Home</a></li>
            <li><a href="<?=URL_PATH_WEB?>/pages/join.php">Join</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Prices</a></li>
            <li><a href="#">Team</a></li>
            <li class="has-dropdown"><a href="#blog">Blog</a>
                <ul class="dropdown">
                    <li><a href="<?=URL_PATH_WEB?>/blog-single.html">blog post</a></li>
                </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <!-- /Main navigation -->

    </div>
</nav>
<!-- /Nav -->