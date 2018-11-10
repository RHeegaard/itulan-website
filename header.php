<head>
	<?php
		$url = get_permalink();
	    $title = "ITU LAN - ";
		if ( is_front_page() ) {
            $title = "ITU LAN";
			$url = "http://itulan.dk/";
		} else if (is_single()) {
            $title = $title.get_the_title();
		} else if (is_page()) {
            $title = $title.get_the_title();
		}
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png"/>
	<link rel="shortcut icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png"/>
	<link rel="shortcut icon" type="image/png" sizes="48x48 64x64 96x96" href="/images/favicon-96x96.png"/>
	<meta property="og:image" content="http://itulan.dk/wp-content/uploads/2018/10/logo.png" />
	<meta property="og:title" content="<?php echo $title ?>" />
	<meta property="og:url" content="<?php echo $url ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="" />
    <title><?php echo $title ?></title>
</head>
<body>
    <header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				  </button>
				  <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><div id="logo"></div></a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				  <ul class="nav navbar-nav">
					<?php /*wp_nav_menu( array( 'theme_location' => 'header-menu' ) );*/
					      wp_list_pages(array('title_li' => null)); ?>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
					<li><a href="https://discord.gg/nSFXWQN">Discord</a></li>
					<li><a href="http://facebook.com/itulan">Facebook</a></li>
					<li><a href="http://instagram.com/itulan">Instagram</a></li>
				  </ul>
				</div>
			</div>
		</nav>
    </header>