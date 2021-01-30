<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">
	
    <title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
	<!-- jQuery and Modernizr-->
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body <?php body_class('index-page');?> >
<!-- if <body class="className"> have onother class then pass in the string of body_class('className');-->
<header>
	<!--Top-->
	<nav id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<strong>MyAfrica - Welcome to Us!</strong>
				</div>
				<div class="col-md-6">
					<ul class="list-inline top-link link">
						<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
						<li><a href="contact.html"><i class="fa fa-comments"></i> Contact</a></li>
						<li><a href="#"><i class="fa fa-question-circle"></i> FAQ</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<div id="owl-slide" class="owl-carousel">
		<div class="item">
			<div class="zoom-container">
				<div class="zoom-caption">
					<a href="single.html"></a>
					<div class="zoom-caption-inner">
						<span>News</span>
						<div class="date-feat">
							<i class="fa fa-clock-o"></i>
							26 Jan , 2016  
							<i class="fa fa-video-camera"></i>
							Video
						</div>
						<h3>Video Post with Featured Image</h3>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri();?>/images/slide-2.jpg" />
			</div>
		</div>
		<div class="item">
			<div class="zoom-container">
				<div class="zoom-caption">
					<a href="single.html"></a>
					<div class="zoom-caption-inner">
						<span>News</span>
						<div class="date-feat">
							<i class="fa fa-clock-o"></i>
							26 Jan , 2016  
							<i class="fa fa-video-camera"></i>
							Video
						</div>
						<h3>Video Post with Featured Image</h3>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri();?>/images/slide-1.jpg" />
			</div>
		</div>
		<div class="item">
			<div class="zoom-container">
				<div class="zoom-caption">
					<a href="single.html"></a>
					<div class="zoom-caption-inner">
						<span>News</span>
						<div class="date-feat">
							<i class="fa fa-clock-o"></i>
							26 Jan , 2016  
							<i class="fa fa-video-camera"></i>
							Video
						</div>
						<h3>Video Post with Featured Image</h3>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri();?>/images/slide-3.jpg" />
			</div>
		</div>
		<div class="item">
			<div class="zoom-container">
				<div class="zoom-caption">
					<a href="single.html"></a>
					<div class="zoom-caption-inner">
						<span>News</span>
						<div class="date-feat">
							<i class="fa fa-clock-o"></i>
							26 Jan , 2016  
							<i class="fa fa-video-camera"></i>
							Video
						</div>
						<h3>Video Post with Featured Image</h3>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri();?>/images/slide-4.jpg" />
			</div>
		</div>
		<div class="item">
			<div class="zoom-container">
				<div class="zoom-caption">
					<a href="single.html"></a>
					<div class="zoom-caption-inner">
						<span>News</span>
						<div class="date-feat">
							<i class="fa fa-clock-o"></i>
							26 Jan , 2016  
							<i class="fa fa-video-camera"></i>
							Video
						</div>
						<h3>Video Post with Featured Image</h3>
					</div>
				</div>
				<img src="<?php echo get_template_directory_uri();?>/images/slide-5.jpg" />
			</div>
		</div>
	</div>
</header>
	
	<!--Navigation-->
    <nav id="menu" class="navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
			<a class="navbar-brand" href="#">
				<div class="logo"><span>MYAFRICA</span></div>
			</a>
		</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo site_url();?>">Home</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="<?php echo site_url('/login');?>">Login</a></li>
								<li><a href="<?php echo site_url('/wp-signup.php');?>">Register</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="dropdown"><a href="<?php echo site_url('#videos');?>" class="dropdown-toggle" data-toggle="dropdown">Videos <i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="<?php echo site_url('/archive');?>">Text 201</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 202</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 203</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 204</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 205</a></li>
							</ul>
						</div> 
					</div>
				</li>
				<li class="dropdown"><a href="<?php echo site_url('#category');?>" class="dropdown-toggle" data-toggle="dropdown">Category <i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu" style="margin-left: -203.625px;">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="<?php echo site_url('/archive');?>">Text 301</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 302</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 303</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 304</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 305</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="<?php echo site_url('/archive');?>">Text 306</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 307</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 308</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 309</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 310</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="<?php echo site_url('/archive');?>">Text 311</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 312</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 313</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 314</a></li>
								<li><a href="<?php echo site_url('/archive');?>">Text 315</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li><a href="#"><i class="fa fa-cubes"></i> Blocks</a></li>
				<li><a href="<?php echo site_url('/contact');?>"><i class="fa fa-envelope"></i> Contact</a></li>
			</ul>
			<div class="col-sm-3 col-md-3 navbar-right">
				<?php get_search_form();?>
			</div>
		</div><!-- /.navbar-collapse -->
	</nav>
