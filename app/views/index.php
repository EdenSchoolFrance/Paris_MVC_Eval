<?php
	require APP_ROOT . '/views/inc/head.php';
?>
<body>
    <?php
    require APP_ROOT . '/views/inc/header.php';
    ?>
    <?php
    require APP_ROOT . '/views/inc/nav.php';
    ?>

    <main>
        <!-- First Posts  -->
        <div class="container">
            <div class="row first-posts">
                <!-- Hot news (Big Post) -->
                <div class="col-sm-7">
                    <!-- Set Article Image -->
                    <div class="big-post" style="background-image: url('<?= URL_ROOT ?>/img/img_site/feature-top.jpg');">
                        <div class="big-post-content">
                            <!-- Article Recommendation -->
                            <div class="big-post-recommendation">
                                HOT NEWS
                            </div>
                            <!-- Article Content -->
                            <div class="big-post-text">
                                <h1>Chevrolet car-saving technology delivers</h1>
                                <p>Stive Clark,Aug 4, 2015</p>
                                <p>In a move to address mounting concerns about security on Android, Google nad Samsung are now issuing</p>
                            </div>
                            <!-- Article Share Button & Comment Button -->
                            <div class="big-post-extras">
                                <p><i class="fas fa-share-alt"></i> <span>424</span> Shares</p>
                                <p><i class="fas fa-comments"></i> <span>424</span> Shares</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top viewed (Medium Posts) -->
                <div class="col-sm-5">
                    <div class="container">
                        <div class="row">
                            <!-- First Medium Article -->
                            <div class="col-sm-12">
                                <!-- Set Article Image -->
                                <div class="medium-post" style="background-image: url('<?= URL_ROOT ?>/img/img_site/feature-static1.jpg');">
                                    <div class="medium-post-content">
                                        <!-- Article Recommendation -->
                                        <div class="medium-post-recommendation medium-post-recommendation-1">
                                            TOP VIEWED
                                        </div>
                                        <!-- Article Content -->
                                        <div class="medium-post-text">
                                            <h1>Alcatel's $180 Idol 3 4.7 is a</h1>
                                            <p>Stive Clark,Aug 4, 2015</p>
                                            <p>In a move to address mounting concerns about security on Android, Google nad Samsung are now issuing</p>
                                        </div>
                                        <!-- Article Share Button & Comment Button -->
                                        <div class="medium-post-extras">
                                            <p><i class="fas fa-share-alt"></i> <span>424</span> Shares</p>
                                            <p><i class="fas fa-comments"></i> <span>424</span> Shares</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Medium Article -->
                            <div class="col-sm-12">
                                <!-- Set Article Image -->
                                <div class="medium-post" style="background-image: url('<?= URL_ROOT ?>/img/img_site/feature-static2.jpg');">
                                    <div class="medium-post-content">
                                        <!-- Article Recommendation -->
                                        <div class="medium-post-recommendation medium-post-recommendation-2">
                                            TOP VIEWED
                                        </div>
                                        <!-- Article Content -->
                                        <div class="medium-post-text">
                                            <h1>Gadget user good news</h1>
                                            <p>Stive Clark,Aug 4, 2015</p>
                                            <p>In a move to address mounting concerns about security on Android, Google nad Samsung are now issuing</p>
                                        </div>
                                        <!-- Article Share Button & Comment Button -->
                                        <div class="medium-post-extras">
                                            <p><i class="fas fa-share-alt"></i> <span>424</span> Shares</p>
                                            <p><i class="fas fa-comments"></i> <span>424</span> Shares</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
    </main>
</body>