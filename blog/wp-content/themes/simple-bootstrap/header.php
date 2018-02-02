<!doctype html>  

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
    
    
    
    
    <link href="http://www.certiride.com/dist/css/bootstrap.css" rel="stylesheet">
    <link href="http://www.certiride.com/dist/css/bootstrap-social.css" rel="stylesheet">
    <link href="http://www.certiride.com/dist/css/classic-10_7.css" rel="stylesheet" type="text/css">
    <link href="http://www.certiride.com/dist/css/font-awesome.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
	<!--[if lt IE 9]>
                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                        <![endif]-->
    
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-58677849-3', 'auto');
      ga('send', 'pageview');

    </script>
	<style type="text/css">
	   #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	   /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	      We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>
    <script src="http://www.certiride.com/dist/js/bootstrap.js">
	</script>
</head>
	
<body <?php body_class(); ?>>

    <?php include 'navbar.html'; ?>
    
    <br>
    <br>
    
	<div id="content-wrapper">

<!--
		<header>
			<nav class="navbar navbar-default navbar-static-top">
				<div class="container">
		  
					<div class="navbar-header">
						<?php if (has_nav_menu("main_nav")): ?>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-responsive-collapse">
		    				<span class="sr-only"><?php _e('Navigation', 'simple-bootstrap'); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php endif ?>
						<a class="navbar-brand" title="<?php bloginfo('description'); ?>" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
					</div>

					<?php if (has_nav_menu("main_nav")): ?>
					<div id="navbar-responsive-collapse" class="collapse navbar-collapse">
						<?php
						    simple_bootstrap_display_main_menu();
						?>

					</div>
					<?php endif ?>

				</div>
			</nav>
		</header>
-->
		
		<div id="page-content">
			<div class="container">
