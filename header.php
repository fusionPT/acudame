<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo ('name');?></title>
        <meta name="description" content="<?php bloginfo ('description');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="fb:admins" content="fusionpt"/>
        <meta property="fb:app_id" content="187579814780215"/> 
        <meta name="google-site-verification" content="QKdvBJ05u8Lm2BvoBLkGx6ROX_0nPa8UUmh_lXm8VbU" />
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo THEMEROOT; ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo THEMEROOT; ?>/style.css">
        <link rel="stylesheet" href="<?php echo THEMEROOT; ?>/css/flexslider.css">
         
        <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="<?php echo THEME_JS; ?>/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo THEME_JS; ?>/vendor/jquery.flexslider.js"></script>
        <script src="<?php echo THEME_JS; ?>/theme.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=187579814780215";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="top-bar">
        
	        <div class="container">
	        
		        <div class="header">
		        
		        	<a href="<?php echo home_url(); ?>"><h1>Acudame</h1></a>
		        	
		        	<!-- MENU -->
                    <a class="pull" href="#">
		        	 <i class="fa fa-bars fa-2x"></i>
                    </a>
		        	<nav>
		        		
			        	<?php 
				        	
				        	wp_nav_menu(array(
				        		'theme_location' => 'menu',
				        		'container' => '',
				        		'menu_class'=> 'inline'
				        	));
				        	
			        	?>
			        </nav><!-- End of menu -->
		        	
		        </div><!-- End of header -->
		        
		     </div><!-- End of container -->
		     
	     </div><!-- End of top-bar -->
 