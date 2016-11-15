
<?php

/*

	Template Name: Tienda-solidaria

*/

get_header(); ?>




<div class="container">
	<div class="main-content">
	
		<div class="main">
		<h2>Tienda solidaria</h2>
		<!-- WP LOOP -->
		<div class="tienda">
			<ul>

			<?php 
				$args = array (
			      'post_type' => 'tienda',
			      'showposts' => '16',
			      'order' => 'DSC',
			      'paged' => $paged
			      
			  );
			  $temp = $wp_query; 
			  $wp_query = null; 
			  $wp_query = new WP_Query( $args ); 
			  
			  

			  while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>
			<!-- LOOP: Usual Post Template Stuff Here-->
			<?php

				$attachment_id = get_field('foto');
				$size = "foto-tienda"; // (thumbnail, medium, large, full or custom size)
				
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				// url = $image[0];
				// width = $image[1];
				// height = $image[2];
			?>
				

				<li>
				
					<div class="articulo-tienda">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>"></a>
						
						
					</div>
					<a href="<?php the_permalink(); ?>"><?php the_field('titulo'); ?></a>
					
				</li>
			
				
				<?php endwhile ; ?>
					
				
				<ul class="morePrev">
					<li class="left"><?php previous_posts_link('< Anterior '); ?></li>
					<li class="right"><?php next_posts_link('Siguiente >'); ?></li>
				</ul>

				<?php 
  				$wp_query = null; 
  				$wp_query = $temp;  // Reset
  				
				?>
					
			</ul>


		</div><!-- End of post -->
			
		</div><!-- End of main -->
	<!-- SIDEBAR -->
	<?php get_sidebar(); ?>
	
	</div><!-- End of main-content -->


<?php get_footer(); ?>