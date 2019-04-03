 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>Trending Heads | Top headlines | Sports News | Technology News | Bussiness News | Health News | Science News </title>
     <link rel="shortcut icon" href="images/logo.ico" />
     <meta charset="utf-8">
     <meta name="author" content="Tekeshwar Singh">
     <meta name="description" content="Latest Headlines with detailed news from over 30,000 sources at one place. Updated in every 15 minutes.">
     <meta name="keywords" content="Latest Headlines, Latest News, Todays news, today headline, india news, india headlines, the hindu, times of india, news18, bbc, sports headlines, bollywolly news, cricket news, politics">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

         <header class="site-navbar pt-3" role="banner">
             <div class="container-fluid">
                 <div class="row align-items-center">

                     <div class="col-6 col-xl-6 logo">
                         <a href="index.php"><img src="images/logo.jpg" width="200"></a>
                     </div>
                     <div class="col-6 mr-auto py-3 text-right" style="position: relative; top: 3px;">
                         <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-xl-none"><span class="icon-menu h3"></span></a>
                     </div>
                 </div>
                 <div class="col-12 d-none d-xl-block border-top">
                     <nav class="site-navigation text-center " role="navigation">

                         <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block mb-0">
                             <li class="active"><a href="index.php">Homepage</a></li>
                             <li><a href="international-latest-news-headlines.php">International</a></li>
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


     <?php

        require_once('link.php');
        $data = json_decode($home, true);
        $sci = json_decode($science, true);
        $bus = json_decode($business, true);
        $tech = json_decode($technology, true);
        $enter = json_decode($entertainment, true);


        ?>


     <div class="slide-one-item home-slider owl-carousel">


         <div class="site-cover site-cover-sm same-height overlay" style="background-image: url('<?php echo ($data['articles'][0]['urlToImage']) ?>');">
             <div class="container">
                 <div class="row same-height align-items-center">
                     <div class="col-md-12 col-lg-6">
                         <div class="post-entry">
                             <span class="post-category text-white bg-success mb-3"><?php echo $data['articles'][0]['source']['name']; ?></span>
                             <h2 class="mb-4"><a href="<?php echo $data['articles'][0]['url']; ?>" target="_blank"><?php echo $data['articles'][0]['title']; ?></a></h2>
                             <div class="post-meta align-items-center text-left">
                                 <span class="d-inline-block mt-1">By <?php echo $data['articles'][0]['author']; ?></span>
                                 <span>&nbsp;-&nbsp; <?php echo date('Y-m-d  h:i:s', strtotime($data['articles'][0]['publishedAt'])); ?></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="site-cover site-cover-sm same-height overlay" style="background-image: url('<?php echo ($data['articles'][1]['urlToImage']) ?>');">
             <div class="container">
                 <div class="row same-height align-items-center">
                     <div class="col-md-12 col-lg-6">
                         <div class="post-entry">
                             <span class="post-category text-white bg-success mb-3"><?php echo $data['articles'][1]['source']['name']; ?></span>
                             <h2 class="mb-4"><a href="<?php echo $data['articles'][1]['url']; ?>" target="_blank"><?php echo $data['articles'][1]['title']; ?></a></h2>
                             <div class="post-meta align-items-center text-left">
                                 <span class="d-inline-block mt-1">By <?php echo $data['articles'][1]['author']; ?></span>
                                 <span>&nbsp;-&nbsp; <?php echo date('Y-m-d  h:i:s', strtotime($data['articles'][1]['publishedAt'])); ?></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="site-cover site-cover-sm same-height overlay" style="background-image: url('<?php echo ($data['articles'][2]['urlToImage']) ?>');">
             <div class="container">
                 <div class="row same-height align-items-center">
                     <div class="col-md-12 col-lg-6">
                         <div class="post-entry">
                             <span class="post-category text-white bg-success mb-3"><?php echo $data['articles'][2]['source']['name']; ?></span>
                             <h2 class="mb-4"><a href="<?php echo $data['articles'][2]['url']; ?>" target="_blank"><?php echo $data['articles'][2]['title']; ?></a></h2>
                             <div class="post-meta align-items-center text-left">
                                 <span class="d-inline-block mt-1">By <?php echo $data['articles'][2]['author']; ?></span>
                                 <span>&nbsp;-&nbsp; <?php echo date('Y-m-d  h:i:s', strtotime($data['articles'][2]['publishedAt'])); ?></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="site-cover site-cover-sm same-height overlay" style="background-image: url('<?php echo ($data['articles'][3]['urlToImage']) ?>');">
             <div class="container">
                 <div class="row same-height align-items-center">
                     <div class="col-md-12 col-lg-6">
                         <div class="post-entry">
                             <span class="post-category text-white bg-success mb-3"><?php echo $data['articles'][3]['source']['name']; ?></span>
                             <h2 class="mb-4"><a href="<?php echo $data['articles'][3]['url']; ?>" target="_blank"><?php echo $data['articles'][3]['title']; ?></a></h2>
                             <div class="post-meta align-items-center text-left">
                                 <span class="d-inline-block mt-1">By <?php echo $data['articles'][3]['author']; ?></span>
                                 <span>&nbsp;-&nbsp; <?php echo date('Y-m-d  h:i:s', strtotime($data['articles'][3]['publishedAt'])); ?></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="site-cover site-cover-sm same-height overlay" style="background-image: url('<?php echo ($data['articles'][4]['urlToImage']) ?>');">
             <div class="container">
                 <div class="row same-height align-items-center">
                     <div class="col-md-12 col-lg-6">
                         <div class="post-entry">
                             <span class="post-category text-white bg-success mb-3"><?php echo $data['articles'][4]['source']['name']; ?></span>
                             <h2 class="mb-4"><a href="<?php echo $data['articles'][4]['url']; ?>" target="_blank"><?php echo $data['articles'][4]['title']; ?></a></h2>
                             <div class="post-meta align-items-center text-left">
                                 <span class="d-inline-block mt-1">By <?php echo $data['articles'][4]['author']; ?></span>
                                 <span>&nbsp;-&nbsp; <?php echo date('Y-m-d  h:i:s', strtotime($data['articles'][4]['publishedAt'])); ?></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="py-5">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="rounded border p-4">
                         <div class="row align-items-stretch">

                             <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                                 <a href="<?php echo $data['articles'][5]['url']; ?>" target="_blank" class="d-flex post-sm-entry">
                                     <figure class="mr-3 mb-0"><img src="<?php echo $data['articles'][5]['urlToImage']; ?>" alt="" class="rounded"></figure>
                                     <div>
                                         <span class="post-category bg-danger text-white m-0 mb-2"><?php echo $data['articles'][5]['source']['name']; ?></span>
                                         <h2 class="mb-0"><?php echo $data['articles'][5]['title']; ?></h2>
                                     </div>
                                 </a>
                             </div>

                             <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                                 <a href="<?php echo $data['articles'][6]['url']; ?>" target="_blank" class="d-flex post-sm-entry">
                                     <figure class="mr-3 mb-0"><img src="<?php echo $data['articles'][6]['urlToImage']; ?>" alt="" class="rounded"></figure>
                                     <div>
                                         <span class="post-category bg-danger text-white m-0 mb-2"><?php echo $data['articles'][6]['source']['name']; ?></span>
                                         <h2 class="mb-0"><?php echo $data['articles'][6]['title']; ?></h2>
                                     </div>
                                 </a>
                             </div>

                             <div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
                                 <a href="<?php echo $data['articles'][7]['url']; ?>" target="_blank" class="d-flex post-sm-entry">
                                     <figure class="mr-3 mb-0"><img src="<?php echo $data['articles'][7]['urlToImage']; ?>" alt="" class="rounded"></figure>
                                     <div>
                                         <span class="post-category bg-danger text-white m-0 mb-2"><?php echo $data['articles'][7]['source']['name']; ?></span>
                                         <h2 class="mb-0"><?php echo $data['articles'][7]['title']; ?></h2>
                                     </div>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div class="site-section">
         <div class="container">

             <div class="row align-items-stretch retro-layout">

                 <div class="col-md-5">
                     <a href="<?php echo $data['articles'][8]['url']; ?>" target="_blank" class="hentry img-1 h-100 gradient" style="background-image: url('<?php echo $data['articles'][8]['urlToImage']; ?>');">
                         <span class="post-category text-white bg-danger"><?php echo $data['articles'][8]['source']['name']; ?></span>
                         <div class="text">
                             <h2><?php echo $data['articles'][8]['title']; ?></h2>
                             <span><?php echo date('Y-m-d  h:i:s', strtotime($data['articles'][8]['publishedAt'])); ?></span>
                         </div>
                     </a>
                 </div>

                 <div class="col-md-7">

                     <a href="<?php echo $data['articles'][9]['url']; ?>" target="_blank" class="hentry img-2 v-height mb30 gradient" style="background-image: url(<?php echo $data['articles'][9]['urlToImage']; ?>);">
                         <span class="post-category text-white bg-success"><?php echo $data['articles'][9]['source']['name']; ?></span>
                         <div class="text text-sm">
                             <h2><?php echo $data['articles'][9]['title']; ?></h2>
                             <span><?php echo date('Y-m-d  h:i:s', strtotime($data['articles'][9]['publishedAt'])); ?></span>
                         </div>
                     </a>

                     <div class="two-col d-block d-md-flex">
                         <a href="<?php echo $data['articles'][10]['url']; ?>" target="_blank" class="hentry v-height img-2 gradient" style="background-image: url(<?php echo $data['articles'][10]['urlToImage']; ?>);">
                             <span class="post-category text-white bg-primary"><?php echo $data['articles'][10]['source']['name']; ?></span>
                             <div class="text text-sm">
                                 <h2><?php echo $data['articles'][10]['title']; ?></h2>
                                 <span><?php echo date('Y-m-d  h:i:s', strtotime($data['articles'][10]['publishedAt'])); ?></span>
                             </div>
                         </a>
                         <a href="<?php echo $data['articles'][11]['url']; ?>" target="_blank" class="hentry v-height img-2 ml-auto gradient" style="background-image: url(<?php echo $data['articles'][11]['urlToImage']; ?>);">
                             <span class="post-category text-white bg-warning"><?php echo $data['articles'][11]['source']['name']; ?></span>
                             <div class="text text-sm">
                                 <h2><?php echo $data['articles'][11]['title']; ?></h2>
                                 <span><?php echo date('Y-m-d  h:i:s', strtotime($data['articles'][11]['publishedAt'])); ?></span>
                             </div>
                         </a>
                     </div>

                 </div>
             </div>

         </div>
     </div>


     <div class="site-section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 mb-5 mb-lg-0">
                     <div class="section-heading mb-5 d-flex align-items-center">
                         <h2>Business</h2>
                         <div class="ml-auto"><a href="business-latest-news-headlines.php" class="view-all-btn">View All</a></div>
                     </div>
                     <div class="entry2 mb-5">
                         <a href="<?php echo $bus['articles'][0]['url']; ?>" target="_blank"><img src="<?php echo $bus['articles'][0]['urlToImage']; ?>" height="200" weight="300" alt=""></a>
                         <span class="post-category text-white bg-primary mb-3"><?php echo $bus['articles'][0]['source']['name']; ?></span>
                         <h2><a href="<?php echo $bus['articles'][0]['url']; ?>" target="_blank"><?php echo $bus['articles'][0]['title']; ?></a></h2>
                         <div class="post-meta align-items-center text-left clearfix">
                             <span class="d-inline-block mt-1">By <?php echo $bus['articles'][0]['author']; ?></a></span>
                             <span>&nbsp;-&nbsp; <?php echo date('Y-m-d  h:i:s', strtotime($bus['articles'][0]['publishedAt'])); ?></span>
                         </div>
                         <p><?php echo $bus['articles'][0]['description']; ?></p>
                     </div>


                     <div class="entry4 d-block d-sm-flex">
                         <figure class="figure order-2"><a href="<?php echo $bus['articles'][1]['url']; ?>" target="_blank"><img src="<?php echo $bus['articles'][1]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a></figure>
                         <div class="text mr-4 order-1">
                             <span class="post-category text-white bg-primary mb-3"><?php echo $bus['articles'][1]['source']['name']; ?></span>
                             <h2><a href="<?php echo $bus['articles'][1]['url']; ?>" target="_blank"><?php echo $bus['articles'][1]['title']; ?></a></h2>
                             <span class="post-meta mb-3 d-block"><?php echo date('Y-m-d  h:i:s', strtotime($bus['articles'][1]['publishedAt'])); ?></span>
                         </div>
                     </div>

                     <div class="entry4 d-block d-sm-flex">
                         <figure class="figure order-2"><a href="<?php echo $bus['articles'][2]['url']; ?>" target="_blank"><img src="<?php echo $bus['articles'][2]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a></figure>
                         <div class="text mr-4 order-1">
                             <span class="post-category text-white bg-primary mb-3"><?php echo $bus['articles'][2]['source']['name']; ?></span>
                             <h2><a href="<?php echo $bus['articles'][2]['url']; ?>" target="_blank"><?php echo $bus['articles'][2]['title']; ?></a></h2>
                             <span class="post-meta mb-3 d-block"><?php echo date('Y-m-d  h:i:s', strtotime($bus['articles'][2]['publishedAt'])); ?></span>
                         </div>
                     </div>

                     <div class="entry4 d-block d-sm-flex">
                         <figure class="figure order-2"><a href="<?php echo $bus['articles'][3]['url']; ?>" target="_blank"><img src="<?php echo $bus['articles'][3]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a></figure>
                         <div class="text mr-4 order-1">
                             <span class="post-category text-white bg-primary mb-3"><?php echo $bus['articles'][3]['source']['name']; ?></span>
                             <h2><a href="<?php echo $bus['articles'][3]['url']; ?>" target="_blank"><?php echo $bus['articles'][3]['title']; ?></a></h2>
                             <span class="post-meta mb-3 d-block"><?php echo date('Y-m-d  h:i:s', strtotime($bus['articles'][3]['publishedAt'])); ?></span>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 mb-5 mb-lg-0">
                     <div class="section-heading mb-5 d-flex align-items-center">
                         <h2>Technology</h2>
                         <div class="ml-auto"><a href="technology-latest-news-headlines.php" class="view-all-btn">View All</a></div>
                     </div>
                     <div class="entry2 mb-5">
                         <a href="<?php echo $tech['articles'][0]['url']; ?>" target="_blank"><img src="<?php echo $tech['articles'][0]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a>
                         <span class="post-category text-white bg-primary mb-3"><?php echo $tech['articles'][0]['source']['name']; ?></span>
                         <h2><a href="<?php echo $tech['articles'][0]['url']; ?>" target="_blank"><?php echo $tech['articles'][0]['title']; ?></a></h2>
                         <div class="post-meta align-items-center text-left clearfix">
                             <span class="d-inline-block mt-1">By <?php echo $tech['articles'][0]['author']; ?></a></span>
                             <span>&nbsp;-&nbsp; <?php echo date('Y-m-d  h:i:s', strtotime($tech['articles'][0]['publishedAt'])); ?></span>
                         </div>
                         <p><?php echo $tech['articles'][0]['description']; ?></p>
                     </div>


                     <div class="entry4 d-block d-sm-flex">
                         <figure class="figure order-2"><a href="<?php echo $tech['articles'][1]['url']; ?>" target="_blank"><img src="<?php echo $tech['articles'][1]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a></figure>
                         <div class="text mr-4 order-1">
                             <span class="post-category text-white bg-primary mb-3"><?php echo $tech['articles'][1]['source']['name']; ?></span>
                             <h2><a href="<?php echo $tech['articles'][1]['url']; ?>" target="_blank"><?php echo $tech['articles'][1]['title']; ?></a></h2>
                             <span class="post-meta mb-3 d-block"><?php echo date('Y-m-d  h:i:s', strtotime($tech['articles'][1]['publishedAt'])); ?></span>
                         </div>
                     </div>

                     <div class="entry4 d-block d-sm-flex">
                         <figure class="figure order-2"><a href="<?php echo $tech['articles'][2]['url']; ?>" target="_blank"><img src="<?php echo $tech['articles'][2]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a></figure>
                         <div class="text mr-4 order-1">
                             <span class="post-category text-white bg-primary mb-3"><?php echo $tech['articles'][2]['source']['name']; ?></span>
                             <h2><a href="<?php echo $tech['articles'][2]['url']; ?>" target="_blank"><?php echo $tech['articles'][2]['title']; ?></a></h2>
                             <span class="post-meta mb-3 d-block"><?php echo date('Y-m-d  h:i:s', strtotime($tech['articles'][2]['publishedAt'])); ?></span>
                         </div>
                     </div>

                     <div class="entry4 d-block d-sm-flex">
                         <figure class="figure order-2"><a href="<?php echo $tech['articles'][3]['url']; ?>" target="_blank"><img src="<?php echo $tech['articles'][3]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a></figure>
                         <div class="text mr-4 order-1">
                             <span class="post-category text-white bg-primary mb-3"><?php echo $tech['articles'][3]['source']['name']; ?></span>
                             <h2><a href="<?php echo $tech['articles'][3]['url']; ?>" target="_blank"><?php echo $tech['articles'][3]['title']; ?></a></h2>
                             <span class="post-meta mb-3 d-block"><?php echo date('Y-m-d  h:i:s', strtotime($tech['articles'][3]['publishedAt'])); ?></span>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 mb-5 mb-lg-0">
                     <div class="section-heading mb-5 d-flex align-items-center">
                         <h2>Entertainment</h2>
                         <div class="ml-auto"><a href="entertainment-latest-news-headlines.php" class="view-all-btn">View All</a></div>
                     </div>
                     <div class="entry2 mb-5">
                         <a href="<?php echo $enter['articles'][0]['url']; ?>" target="_blank"><img src="<?php echo $enter['articles'][0]['urlToImage']; ?>" height="200" weight="300" alt=""></a>
                         <span class="post-category text-white bg-primary mb-3"><?php echo $enter['articles'][0]['source']['name']; ?></span>
                         <h2><a href="<?php echo $enter['articles'][0]['url']; ?>" target="_blank"><?php echo $enter['articles'][0]['title']; ?></a></h2>
                         <div class="post-meta align-items-center text-left clearfix">
                             <span class="d-inline-block mt-1">By <?php echo $enter['articles'][0]['author']; ?></a></span>
                             <span>&nbsp;-&nbsp; <?php echo date('Y-m-d  h:i:s', strtotime($enter['articles'][0]['publishedAt'])); ?></span>
                         </div>
                         <p><?php echo $enter['articles'][0]['description']; ?></p>
                     </div>


                     <div class="entry4 d-block d-sm-flex">
                         <figure class="figure order-2"><a href="<?php echo $enter['articles'][1]['url']; ?>" target="_blank"><img src="<?php echo $enter['articles'][1]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a></figure>
                         <div class="text mr-4 order-1">
                             <span class="post-category text-white bg-primary mb-3"><?php echo $enter['articles'][1]['source']['name']; ?></span>
                             <h2><a href="<?php echo $enter['articles'][1]['url']; ?>" target="_blank"><?php echo $enter['articles'][1]['title']; ?></a></h2>
                             <span class="post-meta mb-3 d-block"><?php echo date('Y-m-d  h:i:s', strtotime($enter['articles'][1]['publishedAt'])); ?></span>
                         </div>
                     </div>

                     <div class="entry4 d-block d-sm-flex">
                         <figure class="figure order-2"><a href="<?php echo $enter['articles'][2]['url']; ?>" target="_blank"><img src="<?php echo $enter['articles'][2]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a></figure>
                         <div class="text mr-4 order-1">
                             <span class="post-category text-white bg-primary mb-3"><?php echo $enter['articles'][2]['source']['name']; ?></span>
                             <h2><a href="<?php echo $enter['articles'][2]['url']; ?>" target="_blank"><?php echo $enter['articles'][2]['title']; ?></a></h2>
                             <span class="post-meta mb-3 d-block"><?php echo date('Y-m-d  h:i:s', strtotime($enter['articles'][2]['publishedAt'])); ?></span>
                         </div>
                     </div>

                     <div class="entry4 d-block d-sm-flex">
                         <figure class="figure order-2"><a href="<?php echo $enter['articles'][3]['url']; ?>" target="_blank"><img src="<?php echo $enter['articles'][3]['urlToImage']; ?>" alt="" class="img-fluid rounded"></a></figure>
                         <div class="text mr-4 order-1">
                             <span class="post-category text-white bg-primary mb-3"><?php echo $enter['articles'][3]['source']['name']; ?></span>
                             <h2><a href="<?php echo $enter['articles'][3]['url']; ?>" target="_blank"><?php echo $enter['articles'][3]['title']; ?></a></h2>
                             <span class="post-meta mb-3 d-block"><?php echo date('Y-m-d  h:i:s', strtotime($enter['articles'][3]['publishedAt'])); ?></span>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>

     <?php include('footer.php'); ?>

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