<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
	
	<noscript>
			<link rel="stylesheet" href="skel.css" />
			<link rel="stylesheet" href="style.css" />
			<link rel="stylesheet" href="style-wide.css" />
			<link rel="stylesheet" href="style-normal.css" />
	</noscript>
	   	
	   	

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo">2015</h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#three">Faith</a></li>
							<li><a href="#four">Code</a></li>
							<li><a href="#five">Stress</a></li>
							<li><a href="#six">Health</a></li>
							<li><a href="#seven">Giving</a></li>
							<li><a href="#eight">Thanks</a></li>
						</ul>
					</nav>

			</header>