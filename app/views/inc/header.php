<!-- Header -->

<header class="container">
    <div class="row">
        <!-- Date and Social Media -->
        <div class="col-sm-2 date-socialmedia">
            <!-- Date -->
            <div class="date">
                <h1><?= date('l . j F . Y') ?></h1>
            </div>

            <!-- Bar -->
            <div class="bar"></div>

            <!-- Social medias -->
            <div class="socialmedia">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-tumblr"></i>
                <i class="fas fa-rss"></i>
            </div>
        </div>

        <!-- Logo -->
        <div class="col-sm-8 logo">
            <!-- Logo img -->
            <img src="<?= URL_ROOT ?>/img/img_site/logo-omega_200x200.png">
        </div>

        <!-- Right container -->
        <div class="col-sm-2 log-lang">
            <div class="log-lang-col">
                <!-- Login -->
                <h1 class="log"><a>LOGIN</a> / <a>REGISTER</a></h1>

                <!-- Language -->
                <select class="lang">
                    <option value="EN">EN</option>
                    <option value="FR">FR</option>
                </select>
            </div>

            <!-- input -->
            <div class="input-container">
                <input class="input-field" type="text" name="searchBar">
                <i class="fa fa-search icon"></i>
            </div>
        </div>
    </div>
</header>