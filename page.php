<?php get_header(); ?>



<div class="container">
	<div class="main-content">
	
		<div class="main">
		<div class="post">
		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
		
		<p><?php the_content(); ?></p>
		
		<?php endwhile ; else: ?>
				<p>No hay nada.</p>
			<?php endif; ?>
		</div>
		</div><!-- End of main -->
	<!-- SIDEBAR -->
	<?php get_sidebar(); ?>
	
	</div><!-- End of main-content -->


<?php get_footer(); ?>