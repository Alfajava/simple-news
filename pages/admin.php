<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font.css">
<link rel="stylesheet" type="text/css" href="../assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
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
              <li><a href="../index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="contact.php">Contact</a></li>
			  <li><a href="adminlogin.php">Logout</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p><?php echo date ("l \of F Y h:i:s A");?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="../index.php" class="logo"><img src="../images/portallogo.jpg" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="../images/logooo.png" alt=""></a></div>
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
          <li class="active"><a href="../index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          
         <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Android</a></li>
              <li><a href="#">Samsung</a></li>
              <li><a href="#">Nokia</a></li>
              <li><a href="#">Walton Mobile</a></li>
              <li><a href="#">Sympony</a></li>
            </ul>
          </li>
		  <li><a href="404.html">404 Page</a></li>-->
          <li><a href="#">Politics</a></li>
		  <li><a href="#">Business</a></li>
		 <!-- <li><a href="#">Technology</a></li>-->
          <li><a href="sport.php">Sport</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          
        </ul>
      </div>
    </nav>
  </section>
  <!--  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
      <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
        <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">Serbio beat Nigeria 2 Goals to 0</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">FAAC meeting deadlocked over discrepancy in NNPC</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">Nigeria Opponent opted out of FIFA W/Cup</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">Nigeria Anti-Corruption Group wins UN Award</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">Gates Hit Nigeria again</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">Reps to debate override Buhari on electoral act after easter</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">APC, PDP trades words over looted funds</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">Danjuma Ortom backs self-defence call</a></li>
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
  </section>-->
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Admin</h2>
            <p>Create New Admin User Here.</p>
            <form action="" class="contact_form" method="post" enctype="multipart/form-data">
			<input class="form-control" type="text" name="fullname" placeholder="Fullname*">
              <input class="form-control" type="text" name="username" placeholder="Username*">
              <input class="form-control" type="password" name="password" placeholder="Password">
              <!--<textarea class="form-control" cols="30" rows="10" name="message"placeholder="Message*"></textarea>--><br>
              <input type="submit" name = "submit" value="Create Admin">
            </form>
			
			<br>
			
			<br>
			
				<br>
				
				<br>
			 <h2>PEOPLES MESSAGES AND NEWSLETTERS</h2>
			<table width="549" border="1">
                <tr>
				
			<!--	   <th width="30" scope="row">S/N</th>-->
				  <th width="170" scope="row">FULLNAME</th>
                  <th width="130" scope="row">EMAIL</th>
				  <th width="130" scope="row">MESSAGE</th>
                  
                   
                </tr>
                <?php
				include ('connection.php');
				$q=mysql_query("select * from message order by id asc") or trigger_error(mysql_error());
				 while ($row = mysql_fetch_array($q)){
				
				
					  			  ?>
                <tr>
				<!--<th scope="row"><?php// echo?>&nbsp;</th>-->

				  <th scope="row"><?php echo $row["name"]; ?>&nbsp;</th>
                  <th scope="row"><?php echo $row["email"]; ?>&nbsp;</th>
                  <th scope="row"><?php echo $row["msg"]?>&nbsp;</th>
				  
                     
                </tr>
					<?php } ?>
              </table>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
           <!-- <h2><span></span></h2>-->
            <ul class="spost_nav">
              <li>
			  <?php
			  include('connection.php');
			 if(isset($_POST['submit']))
				 if(empty($_POST['fullname']) or empty($_POST['username']) or empty($_POST['password']))
	{
		echo '<div class="error">Error: all field must not be empty</div>';
	}
	else{
	//include('connection.php');
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];	
	//$subject = $_POST['subject'];
	//$message = $_POST['message'];
	$mmysql_query = mysql_query("INSERT INTO admin (fullname, username, password) VALUES ('$fullname', '$username','$password')");
	if($mmysql_query == true){
		echo 'New Admin Created Successfully';
	}
	else
	{
		echo'Error:'. mysql_error($mmysql_query);
	}
	}
	//header("location: index.php");
	?>
	
	
                <!--<div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="single_page.html" class="media-left"> <img alt="" src="../images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>-->
                </div>
              </li>
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
      <p class="copyright">Copyright &copy; <?php echo date("Y");?> <a href="../index.php">ICP NEWS PORTAL</a></p>
      <p class="developer">Developed By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="../assets/js/jquery.min.js"></script> 
<script src="../assets/js/wow.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script src="../assets/js/slick.min.js"></script> 
<script src="../assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="../assets/js/jquery.newsTicker.min.js"></script> 
<script src="../assets/js/jquery.fancybox.pack.js"></script> 
<script src="../assets/js/custom.js"></script>
</body>
</html>