<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <title><?php wp_title(); ?></title>
        
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        
        <?php wp_head(); ?>
    </head>
    
	<!-- EMPTY AREA -->
	<div class="full-width content-area">	
		<div class="row">
		    <div class="small-12 medium-12 columns hide-for-small-only">
			    <div id="empty" class="callout panel">
			    <p></p>
			    <p></p>
			</div>
		  </div>
		</div>
	
	</div>	
	
	<!-- NAVIGATION AREA -->
	<div class="full-width navigation-area">	
		<div class="row">
		    <?php get_template_part( 'partials/nav', 'topbar' ); ?>
		    <?php get_template_part( 'partials/nav', 'social' ); ?>
		</div>
	</div>
	
<body>
