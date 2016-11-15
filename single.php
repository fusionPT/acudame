
<?php get_header(); ?>

<div class="container">
	<div class="main-content">
	
		<div class="main">
		<!-- WP LOOP -->
			<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
			
			
			
				<div class="post detalle">
					
					<!-- META INFO -->
					
					<h2><?php the_title(); ?></h2>
					
					<ul class="info">
						<li>Publicado por <a href=""><?php the_author();?></a></li>
						<li><?php the_time('F j, Y')?></li>
						<li>Publicado em:<?php the_category(); ?></li>	
						<li><a href="<?php comments_link();?>"><?php comments_number(); ?></a></li>
					</ul>

					<?php if(is_single()): ?>
						
						<?php the_content(); ?>
						<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-type="button_count"></div>
						<?php comments_template(); ?> 
						
				
						<?php else: ?>
					
							<p><?php the_excerpt(); ?></p>
							<a class="more" href="<?php the_permalink();?>">Ver más</a>
				
						<?php endif;?>

				</div><!-- End of post -->
			
			
			<?php endwhile ; else: ?>
				<p>No hay nada.</p>
			<?php endif; ?>
		
		
		
		</div><!-- End of main -->
	<!-- SIDEBAR -->
	<?php get_sidebar(); ?>
	
	</div><!-- End of main-content -->


<?php get_footer(); ?>
