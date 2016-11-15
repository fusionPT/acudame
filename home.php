<?php get_header(); ?>

<!-- SLIDER -->

<div class="slider flexslider">
	<ul class="slides">
		<?php 
			
			$args = array(
				'post_type' => 'slider'
			);
			
			$the_query = new WP_Query( $args );
		?>
		<?php if(have_posts() ) : while($the_query->have_posts() ) : $the_query->the_post(); ?>
		<li>
			
			<div class="center">
				<p class="slider-text container"><span><?php the_field( 'texto' ); ?></span></p>
			</div>
			<img src="<?php the_field( 'imagen' ); ?>">	
			
		</li>
		<?php endwhile; endif; ?>
	</ul>
</div>

<!-- End of slider -->

<div class="container">
	<div class="main-content">
	
		<div class="main">
		<span>Ultimas noticias</span>
		
		<!-- WP LOOP -->
		
			<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
			
			
			<div <?php post_class(); ?>>
				
					
					<!-- META INFO -->
					
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
					<ul class="info">
						<li>Publicado por <a href=""><?php the_author();?></a></li>
						<li><?php the_time('F j, Y')?></li>
						<li>Publicado em:<?php the_category(); ?></li>	
						<li><a href="<?php comments_link();?>"><?php comments_number(); ?></a></li>
					</ul>
					
					<p><?php the_content(); ?></p>
					
					
					<a class="more" href="<?php the_permalink();?>">Ver más</a>
				</div><!-- End of post -->
			
			
			<?php endwhile ; else: ?>
				<p>No hay nada.</p>
			<?php endif; ?>
		
		<div class="morePrev">
			<?php previous_posts_link('< Anterior '); ?>
			<?php next_posts_link('Siguiente >'); ?>
		</div>
		
		</div><!-- End of main -->
	<!-- SIDEBAR -->
	<?php get_sidebar(); ?>
	
	</div><!-- End of main-content -->


<?php get_footer(); ?>