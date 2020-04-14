<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>AkroArt - Galéria</title>

    <link rel="shortcut icon" href="assets/kolibri_icon.png" />
    <link rel="icon" type="image/ico" href="assets/kolibri_icon.ico">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo THEMEPATH; ?>/css/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>" />
    <?php echo $gallery->getColorboxStyles(1); ?>

    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo THEMEPATH; ?>/js/bootstrap.min.js"></script>
    <?php echo $gallery->getColorboxScripts(); ?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Egy tornacsoport kezdőnek és haladónak egyaránt! Akár új vagy, akár versenyző, mi tudunk segíteni!">

    <?php file_exists('googleAnalytics.inc') ? include('googleAnalytics.inc') : false; ?>
</head>

<body>
    <div class="main">
        <nav class="navbar navbar-expand-sm navbar-light" id="galleryNav">
            <a class="navbar-brand" href="#">
                <img src="assets/kolibri_icon.ico" width="30" height="30" alt=""> Kolibri
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto d-flex">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Főoldal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link flex-grow-1" href="index.php#about">Rólunk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Galéria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#groups">Edzések</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#news">Hírek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">Elérhetőség</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">

            <h1 class="text-center mt-1 p-1" id="gallery_h1">Galéria</h1>

            <?php if($gallery->getSystemMessages()): ?>
                <?php foreach($gallery->getSystemMessages() as $message): ?>
                    <div class="alert alert-<?php echo $message['type']; ?>">
                        <a class="close" data-dismiss="alert">×</a>
                        <?php echo $message['text']; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- Start UberGallery v<?php echo UberGallery::VERSION; ?> - Copyright (c) <?php echo date('Y'); ?> Chris Kankiewicz (http://www.ChrisKankiewicz.com) -->
            <?php if (!empty($galleryArray) && $galleryArray['stats']['total_images'] > 0): ?>
                <ul class="gallery-wrapper thumbnails">
                    <?php foreach ($galleryArray['images'] as $image): ?>
                        <li class="m-1">
                            <a href="<?php echo html_entity_decode($image['file_path']); ?>" title="<?php echo $image['file_title']; ?>" class="thumbnail" rel="colorbox">
                                <img src="<?php echo $image['thumb_path']; ?>" alt="<?php echo $image['file_title']; ?>" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <!-- End UberGallery - Distributed under the MIT license: http://www.opensource.org/licenses/mit-license.php -->

            <hr/>


            <?php if ($galleryArray['stats']['total_pages'] > 1): ?>

                <div class="pagination pagination-centered">
                    <ul>
                        <?php foreach ($galleryArray['paginator'] as $item): ?>

                            <?php

                                switch ($item['class']) {

                                    case 'title':
                                        $class = 'disabled';
                                        break;

                                    case 'inactive':
                                        $class = 'disabled';
                                        break;

                                    case 'current':
                                        $class = 'active';
                                        break;

                                    case 'active':
                                        $class = NULL;
                                        break;

                                }

                            ?>

                            <li class="<?php echo $class; ?>">
                                <a href="<?php echo empty($item['href']) ? '#' : $item['href']; ?>"><?php echo $item['text']; ?></a>
                            </li>

                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <p class="credit">Powered by, <a href="http://www.ubergallery.net">UberGallery</a></p>

        </div>

    </div>

    <footer id="contact" class="page-footer font-small indigo">

<!-- Footer Links -->
<div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center">

        <!-- Grid column -->
        <div class="col-md-4 pt-3 pb-2">
            <h6 class="text-uppercase font-weight-bold footer-link">
                    <a href="#!">GDPR</a>
                </h6>
        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row-->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3"><span>© 2019 Copyright:</span>
    <a href="#"> Horváth Gyula</a>
</div>
<!-- Copyright -->

</footer>
<script src="js/bootstrap.min.js"></script>

</body>

<!-- Page template by, Chris Kankiewicz <http://www.chriskankiewicz.com> -->

</html>
