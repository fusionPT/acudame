<?php get_header(); ?>



<div class="container">
	<div class="main-content">
	
		<div class="main">
		<!-- WP LOOP -->
			<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
			
			
			
				<div class="search-results">
					
					<!-- META INFO -->
					
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php the_excerpt(); ?>
												

				</div><!-- End of post -->
			
			
			<?php endwhile ; else: ?>
				<p>No hay nada.</p>
			<?php endif; ?>
		
		
		
		</div><!-- End of main -->
	<!-- SIDEBAR -->
	<?php get_sidebar(); ?>
	
	</div><!-- End of main-content -->


<?php get_footer(); ?>