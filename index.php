<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <title>Ytem</title>
    <meta name="description" content=">Thomas">
    <meta name="author" content="Thomas">
    <meta name="description" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet" >	
	<link href="css/font-awesome.min.css" rel="stylesheet">	
	<link href="css/icofont.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">	
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/blue.css" rel="stylesheet" class="colors">
    <link href="css/stylell.css" rel="stylesheet" class="colors">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link rel="icon" href="images/logo.jpg">
</head>
<body data-spy="scroll" data-target="#mynav" data-offset="85">
<div id="preloader">
	<div id="status">
		<div class="spinner">
			  <div class="rect1"></div>
			  <div class="rect2"></div>
			  <div class="rect3"></div>
			  <div class="rect4"></div>
			  <div class="rect5"></div>
		</div>
	</div>
</div>
<header>
<body>
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="anonnce.php">Créer une annonce</a></li>
      <li><a href="autre.php">Gaming</a></li>
      <li><a href="#">Work</a></li>
      <li><a href="#armurerie">About</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
    <a href="indexlogin.php">Login</a>
    <a href="index.php">Home</a>
    <a href="annonce.php">Créer une annonce</a>
    <a href="autre.php">Gaming</a>
    <a href="#">Work</a>
    <a href="">About</a>
  </div>

  <div id="main">
    <h1></h1>
  </div>

  <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
</body>

	</div>
</div>
<section id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
			<div class="item active" style="background-image: url(iages/back2.jpg) ;     background-attachment: fixed;
			background-size: cover;">
				<div class="caption">
					<h1 class="animated fadeInLeftBig">Ytem<strong>
					<p class="animated fadeInRightBig">Welcome to Ytem</p>
					<a data-scroll class="learn-more animated fadeInUpBig" href="#armurerie">nous suivre</a>
				</div>
			</div>
        </div>
    </div>	
</section>
</header>
<section class="section-wrapper" id="team">
	<div class="team">
		<div class="meet-the-team">			
			<div class="element-title">			
				<div class="row">	 		
					<div class="container">	 
					<div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
						<h1><span>Les recommandés</span></h1>								
					</div>					
						<h3 class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay="300ms"><span class="main-color"></span></h3>
					</div>
				</div>
			</div>
		<div id="team-single-wrap">
			<div id="team-single">
			</div>
		</div>
	</div>
</section> 
        <div id="team-single-wrap">
			<div id="team-single">
			</div>
		</div>
	</div>
</section> 
<section class="section-wrapper" id="armurerie">
	<div class="works">
		<div class="element-title">			
			<div class="row">	 		
				<div class="container">
					<div class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="300ms">			
						<h1><span>Nous suivre</span></h1>							
					</div>				
					<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">description 1</h3>
					<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms">description 2</h3>
					<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="300ms"><span class="main-color">description 3</span> </h3>

				</div>
			</div>
		</div>
		<div class="row">
				<div class="container">	
					<div class="wrapper-team">	
								<div class="col-lg-3 col-md-3">
									<div class="team-member">
										<div class="team-member-holder wow flipInY" data-wow-duration="1s" data-wow-delay="300ms">
											<div class="team-member-image">
												<img src="images/logo232.jpg" alt="" />	
												<div class="team-overlay">
													<div class="img-overlay"></div>
												</div>
											</div>
											<div class="team-member-meta">
												<h4 class="team-member-name"><span class="main-color">Thomas </span>Debytere</h4>
												<div class="team-member-role">CEO</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg- col-md-3">
									<div class="team-member">
										<div class="team-member-holder wow flipInY" data-wow-duration="2s" data-wow-delay="300ms">
											<div class="team-member-image">
												<img src="images/logo232.jpg" alt="" />
												<div class="team-overlay">
													<div class="img-overlay"></div>
												</div>
											</div>
											<div class="team-member-meta">
												<h4 class="team-member-name"><span class="main-color">Ethan </span>Lecroard</h4>
												<div class="team-member-role">CEO</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg- col-md-3">
									<div class="team-member">
										<div class="team-member-holder wow flipInY" data-wow-duration="2s" data-wow-delay="300ms">
											<div class="team-member-image">
												<img src="images/logo232.jpg" alt="" />
												<div class="team-overlay">
													<div class="img-overlay"></div>
												</div>
											</div>
											<div class="team-member-meta">
												<h4 class="team-member-name"><span class="main-color">Nassim </span>Belouar</h4>
												<div class="team-member-role">CEO</div>
											</div>
										</div>
									</div>
								</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="works-single-wrap">
			<div id="works-single">
			</div>
		</div>
	</div>
</section> 
<div class="bottom-footer">
	<div class="container"> 
		<div class="bottom-footer-left wow fadeInUp" data-wow-duration="1s" data-wow-delay="450ms">
			<p><span>&#169; Copyright 2020-2021 <a href="" style="color: red;"><b>Ytem</b></a></span></p>

		</div>		  
	</div>
</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/retina.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>	
	<script src="js/waypoints.min.js"></script>	
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.mixitup.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.knob.min.js"></script>	
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>
	<script type="text/javascript">
	var valid = ``;
	if(valid == 'true'){
		$('#confirmBuy').modal('toggle');
	
	}
</script>
