<!DOCTYPE html>
<html lang="en">

<head>
    <title>International News &mdash; Trending Heads</title>
    <link rel="shortcut icon" href="images/logo.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Tekeshwar Singh">
    <meta name="description" content="Latest International Headlines with detailed news from over 30,000 sources at one place. Updated in every 15 minutes.">
    <meta name="keywords" content="International news,Latest Headlines">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <?php

        require_once('link.php');
        $int = json_decode($international, true);


        ?>
        <header class="site-navbar pt-3" role="banner">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-6 logo">
                        <a href="index.php"><img src="images/logo.jpg" width="200"></a>
                    </div>
                    <div class="col-6 mr-auto py-3 text-right" style="position: relative; top: 3px;">
                         <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-xl-none"><span class="icon-menu h3"></span></a>
                     </div>
                    <div class="col-12 d-none d-xl-block border-top">
                        <nav class="site-navigation text-center " role="navigation">

                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block mb-0">
                                <li><a href="index.php">Homepage</a></li>
                                <li class="active"><a href="international-latest-news-headlines.php">International</a></li>
                                <li class="has-children">
                                    <a>Category</a>
                                    <ul class="dropdown">
                                        <li><a href="business-latest-news-headlines.php">Business</a></li>
                                        <li><a href="entertainment-latest-news-headlines.php">Entertainment</a></li>
                                        <li><a href="health-latest-news-headlines.php">Health</a></li>
                                        <li><a href="science-latest-news-headlines.php">Science</a></li>
                                        <li><a href="sports-latest-news-headlines.php">Sports</a></li>
                                        <li><a href="technology-latest-news-headlines.php">Technology</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </header>

        <div class="container">
            <div class="row align-items-stretch retro-layout">
                <div class="col-md-5">
                    <a href="<?php echo $int['articles'][0]['url']; ?>" target="_blank" class="hentry img-1 h-100 gradient" style="background-image: url('<?php echo $int['articles'][0]['urlToImage']; ?>');">
                        <span class="post-category text-white bg-danger"><?php echo $int['articles'][0]['source']['name']; ?></span>
                        <div class="text">
                            <h2><?php echo $int['articles'][0]['title']; ?></h2>
                            <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][0]['publishedAt'])); ?></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-7">

                    <a href="<?php echo $int['articles'][1]['url']; ?>" target="_blank" class="hentry img-2 v-height mb30 gradient" style="background-image: url(<?php echo $int['articles'][1]['urlToImage']; ?>);">
                        <span class="post-category text-white bg-success"><?php echo $int['articles'][1]['source']['name']; ?></span>
                        <div class="text text-sm">
                            <h2><?php echo $int['articles'][1]['title']; ?></h2>
                            <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][1]['publishedAt'])); ?></span>
                        </div>
                    </a>

                    <div class="two-col d-block d-md-flex">
                        <a href="<?php echo $int['articles'][2]['url']; ?>" target="_blank" class="hentry v-height img-2 gradient" style="background-image: url(<?php echo $int['articles'][2]['urlToImage']; ?>);">
                            <span class="post-category text-white bg-primary"><?php echo $int['articles'][2]['source']['name']; ?></span>
                            <div class="text text-sm">
                                <h2><?php echo $int['articles'][2]['title']; ?></h2>
                                <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][2]['publishedAt'])); ?></span>
                            </div>
                        </a>
                        <a href="<?php echo $int['articles'][3]['url']; ?>" target="_blank" class="hentry v-height img-2 ml-auto gradient" style="background-image: url(<?php echo $int['articles'][3]['urlToImage']; ?>);">
                            <span class="post-category text-white bg-warning"><?php echo $int['articles'][3]['source']['name']; ?></span>
                            <div class="text text-sm">
                                <h2><?php echo $int['articles'][3]['title']; ?></h2>
                                <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][3]['publishedAt'])); ?></span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">

                <div class="row align-items-stretch retro-layout">

                    <div class="col-md-5">
                        <a href="<?php echo $int['articles'][4]['url']; ?>" target="_blank" class="hentry img-1 h-100 gradient" style="background-image: url('<?php echo $int['articles'][4]['urlToImage']; ?>');">
                            <span class="post-category text-white bg-danger"><?php echo $int['articles'][4]['source']['name']; ?></span>
                            <div class="text">
                                <h2><?php echo $int['articles'][4]['title']; ?></h2>
                                <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][4]['publishedAt'])); ?></span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-7">

                        <a href="<?php echo $int['articles'][5]['url']; ?>" target="_blank" class="hentry img-2 v-height mb30 gradient" style="background-image: url(<?php echo $int['articles'][5]['urlToImage']; ?>);">
                            <span class="post-category text-white bg-success"><?php echo $int['articles'][5]['source']['name']; ?></span>
                            <div class="text text-sm">
                                <h2><?php echo $int['articles'][5]['title']; ?></h2>
                                <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][5]['publishedAt'])); ?></span>
                            </div>
                        </a>

                        <div class="two-col d-block d-md-flex">
                            <a href="<?php echo $int['articles'][6]['url']; ?>" target="_blank" class="hentry v-height img-2 gradient" style="background-image: url(<?php echo $int['articles'][6]['urlToImage']; ?>);">
                                <span class="post-category text-white bg-primary"><?php echo $int['articles'][6]['source']['name']; ?></span>
                                <div class="text text-sm">
                                    <h2><?php echo $int['articles'][6]['title']; ?></h2>
                                    <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][6]['publishedAt'])); ?></span>
                                </div>
                            </a>
                            <a href="<?php echo $int['articles'][7]['url']; ?>" target="_blank" class="hentry v-height img-2 ml-auto gradient" style="background-image: url(<?php echo $int['articles'][7]['urlToImage']; ?>);">
                                <span class="post-category text-white bg-warning"><?php echo $int['articles'][7]['source']['name']; ?></span>
                                <div class="text text-sm">
                                    <h2><?php echo $int['articles'][7]['title']; ?></h2>
                                    <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][7]['publishedAt'])); ?></span>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row align-items-stretch retro-layout">

                <div class="col-md-5">
                    <a href="<?php echo $int['articles'][8]['url']; ?>" target="_blank" class="hentry img-1 h-100 gradient" style="background-image: url('<?php echo $int['articles'][8]['urlToImage']; ?>');">
                        <span class="post-category text-white bg-danger"><?php echo $int['articles'][8]['source']['name']; ?></span>
                        <div class="text">
                            <h2><?php echo $int['articles'][8]['title']; ?></h2>
                            <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][8]['publishedAt'])); ?></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-7">

                    <a href="<?php echo $int['articles'][9]['url']; ?>" target="_blank" class="hentry img-2 v-height mb30 gradient" style="background-image: url(<?php echo $int['articles'][9]['urlToImage']; ?>);">
                        <span class="post-category text-white bg-success"><?php echo $int['articles'][9]['source']['name']; ?></span>
                        <div class="text text-sm">
                            <h2><?php echo $int['articles'][9]['title']; ?></h2>
                            <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][9]['publishedAt'])); ?></span>
                        </div>
                    </a>

                    <div class="two-col d-block d-md-flex">
                        <a href="<?php echo $int['articles'][10]['url']; ?>" target="_blank" class="hentry v-height img-2 gradient" style="background-image: url(<?php echo $int['articles'][10]['urlToImage']; ?>);">
                            <span class="post-category text-white bg-primary"><?php echo $int['articles'][10]['source']['name']; ?></span>
                            <div class="text text-sm">
                                <h2><?php echo $int['articles'][10]['title']; ?></h2>
                                <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][10]['publishedAt'])); ?></span>
                            </div>
                        </a>
                        <a href="<?php echo $int['articles'][11]['url']; ?>" target="_blank" class="hentry v-height img-2 ml-auto gradient" style="background-image: url(<?php echo $int['articles'][11]['urlToImage']; ?>);">
                            <span class="post-category text-white bg-warning"><?php echo $int['articles'][11]['source']['name']; ?></span>
                            <div class="text text-sm">
                                <h2><?php echo $int['articles'][11]['title']; ?></h2>
                                <span><?php echo date('Y-m-d  h:i:s', strtotime($int['articles'][11]['publishedAt'])); ?></span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <?php include('footer.php');?>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html> 