<!DOCTYPE html>
<html>
<head>
<title>NEWSPORTAL</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="pages/contact.php">Contact</a></li>
			  <li><a href="pages/adminlogin.php">Admin</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p><?php  echo date ("l \of F Y h:i:s A");?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.php" class="logo"><img src="images/portallogo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="images/logooo.png" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          
          <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sport</a>
            <ul class="dropdown-menu" role="menu">
             <li><a href="#">Android</a></li>
              <li><a href="#">Samsung</a></li>
              <li><a href="#">Nokia</a></li>
              <li><a href="#">Walton Mobile</a></li>
              <li><a href="#">Sympony</a></li>
            </ul>
          </li>-->
		  <li><a href=" pages/politics.php">Politics</a></li>
		  <li><a href="pages/business.php">Business</a></li>
		  <li><a href="pages/sport.php">Sport</a></li>
          <!-- <li><a href="#">Tablets</a></li>-->
          <li><a href="pages/contact.php">Contact Us</a></li>
       <!--   <li><a href="pages/404.html">404 Page</a></li>-->
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="pages/sport.php"><img src="images/news_thumbnail3.jpg" alt="">Serbio beat Nigeria 2 Goals to 0</a></li>
            <li><a href="pages/business.php"><img src="images/news_thumbnail3.jpg" alt="">FAAC meeting deadlocked over discrepancy in NNPC</a></li>
            <li><a href="pages/sport.php"><img src="images/news_thumbnail3.jpg" alt="">Nigeria Opponent opted out of FIFA W/Cup</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">Nigeria Anti-Corruption Group wins UN Award</a></li>
            <li><a href="pages/business.php"><img src="images/news_thumbnail3.jpg" alt="">Gates Hit Nigeria again</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">Reps to debate override Buhari on electoral act after easter</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">APC, PDP trades words over looted funds</a></li>
            <li><a href="pages/nationalaffairs.php"><img src="images/news_thumbnail3.jpg" alt="">Danjuma Ortom backs self-defence call</a></li>
            <li><a href="#"><img src="images/news_thumbnail2.jpg" alt="">Strange ailment kills in Nasarawa and Kano</a></li>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="pages/nationalaffairs.php"> <img src="images/Governor-Darius-Ishaku.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/nationalaffairs.php">Taraba Saga:</a></h2>
              <p>We informed the FG, Military of threats, soldiers' misconduct, says Taraba Governor...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/politics.php"> <img src="images/Atiku-Abubakar-71-615x344.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/politics.php">Atiku vs APC Scenerio</a></h2>
              <p>Atiku knocks APC, says FG has failed Nigerians...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/politics.php"> <img src="images/Buhari-arrives-from-Jordan4.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/politics.php">Presidency Visitation</a></h2>
              <p>Due to President Muhammadu Buhari's visitation to Lagos State, Ambode Led government declares Thursday as work-free day...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/Politics.php"> <img src="images/Dambazau.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/politics.php">Easter Celebration</a></h2>
              <p>Federal Goverment of Nigeria has declared Friday and Monday as Public Holiday...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="pages/sport.php" class="media-left"> <img alt="" src="images/images.jpeg"> </a>
                  <div class="media-body"> <a href="pages/sport.php" class="catg_title"> Super Eagles lost to Serbia</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/sport.php" class="media-left"> <img alt="" src="images/downloads.jpeg"> </a>
                  <div class="media-body"> <a href="pages/sport.php" class="catg_title"> Super Eagle opponent may opt out of Russia 2018</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/sport.php" class="media-left"> <img alt="" src="images/images.jpeg"> </a>
                  <div class="media-body"> <a href="pages/sport.php" class="catg_title"> Super Eagles lost to Serbia</a> </div>
                </div>
              </li>
               <li>
                <div class="media"> <a href="pages/sport.php" class="media-left"> <img alt="" src="images/downloads.jpeg"> </a>
                  <div class="media-body"> <a href="pages/sport.php" class="catg_title"> Super Eagle opponent may opt out of Russia 2018</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/sport.php" class="media-left"> <img alt="" src="images/images.jpeg"> </a>
                  <div class="media-body"> <a href="pages/sport.php" class="catg_title"> Super Eagles lost to Serbia</a> </div>
                </div>
              </li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Business</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/nnpc.jpg"> <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html">FAAC meeting deadlocked over discrepancy in NNPC revenue</a> </figcaption>
                    <p>Amid confusion and disagreement over discrepancies observed in the revenue figures presented by the Nigerian National Petroleum Corporation (NNPC), the Federation Accounts Allocation Committee (FAAC) meeting ended on Tuesday in deadlock in Abuja. The meeting was convened for representatives of the 36 states of the federation and the Federal Capital Territory to consider and approve statutory allocation to the tiers of government for February....</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/money.jpeg"> </a>
                    <div class="media-body"> <a href="#" class="catg_title"> $1 is equivalent to 360 Naira</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/bvn1.jpg"> </a>
                    <div class="media-body"> <a href="#" class="catg_title"> CBN urges all bank users to get thier BVN</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/sterling.jpg"> </a>
                    <div class="media-body"> <a href="#" class="catg_title"> Sterling ranked amist top market index</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/bill-gates.jpg"> </a>
                    <div class="media-body"> <a href="#" class="catg_title"> Bill Gate looks towards investing in Nigeria</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Fashion</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/2012-Winter-Sweater-for-Men-for-better-outlook.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">The Fashionista Coloumn</a> </figcaption>
                      <p>This section of purposly meant and preserved for the ladies and gentlemen who knows the latest fashion trends...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/7475-ladies-casual-dresses-summer-two-colors-pleated.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Latest Ladies casual 2 colour summer dress</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/gents-party-wear-suits-500x500.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Men Blazzers for party</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/pants.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Cassual summer pants for men</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/2012-Winter-Sweater-for-Men-for-better-outlook.jpg"> </a>
                      <div class="media-body"> <a href="#l" class="catg_title"> Winter sweater for men </a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Technology</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="#" class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="#">Technology Makes the world keep moving</a> </figcaption>
                      <p>Sit back relax and have a view of the latest technology tools and tips we bring forth to you...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/tool_roll_closed.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Latest Tool kit Bag..... One of the Latest in town</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/ullman001 022.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Latest Technology tools..... Vulcanizing vaulver</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/DSC05083.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Latest nail and screw driver for personal and official use.</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/tool_roll_hanging.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title">Latest tools set for personal and multipurpose use....One of the latest trend in mechanical field</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
         <div class="single_post_content">
         <!--   <h2><span>Photography</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 4"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 5"> <img src="images/photograph_img2.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
            </ul>-->
          </div>
          <div class="single_post_content">
         <!--   <h2><span>Games</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="pages/single_page.html"> <img src="images/featured_img1.jpg" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li>
              </ul>
            </div>-->
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> View of  Atlantic City by night</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> The view of the city of Damascus by night, Its view is a wow.......</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> We urge our view to help book for this vacant view post. you can call on our editors</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="#" class="catg_title"> The view of the city of Madagascar by night, Its view is a wow....... </a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Fashion</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="#" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="#"><img src="images/logoo.png" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Games</a></li>
              <li><a href="#">Sports</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Life &amp; Style</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Photo</a></li>
              <li><a href="#">Slider</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>For more news or any informations regarding any incident, issues, notice, informations or news worthy of sharing, Please do well to contact us via the platform provided below.</p>
            <address>
            Ebenezary Bus Stop, Alakia-Isebo Road, Iyana- Church, Ibadan, Oyo State. </br>Tel:(081)0999-2110 or email us info@icp.edu.ng
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; <?php echo date ("Y");?> <a href="index.php">ICP NEWS PORTAL</a></p>
      <p class="developer">Developed By Faoziyah</p>
    </div>
  </footer>
</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>