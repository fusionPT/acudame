
<?php

/*

	Template Name: Colabora

*/

get_header(); ?>


<div class="container">
	<div class="main-content">
	
		<div class="main">
			
				<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
				
				<?php the_content(); ?>
				
				<?php endwhile ; endif; ?>
					
			

			<nav>
		        		
	        	<?php 
		        	
		        	wp_nav_menu(array(
		        		'theme_location' => 'menu2',
		        		'container' => 'colabora', 
		        		'menu_class'=> 'inline'
		        	));
		        	
	        	?>
	        	
			</nav><!-- End of menu -->
		</div>
	
	<!-- End of main -->
	
	<!-- SIDEBAR -->
	<?php get_sidebar(); ?>
	
	</div><!-- End of main-content -->


<?php get_footer(); ?>