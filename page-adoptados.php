<?php

/*

	Template Name: Adopciones

*/

get_header(); ?>




<div class="container">
	<div class="main-content">

		<div class="main">

		<h2>En Adopción</h2>

		<!-- WP LOOP -->
		<div class="enadopcion">
			<ul>

			<?php
				$args = array (
			      'post_type' => 'adoptados',
			      'showposts' => '16',
			      'order' => 'DSC',
			      'paged' => $paged
			      )
			  );

			  $temp = $wp_query;
			  $wp_query = null;
			  $wp_query = new WP_Query( $args );



			  while ($wp_query->have_posts()) : $wp_query->the_post();
			?>
			<!-- LOOP: Usual Post Template Stuff Here-->
			<?php
				$attachment_id = get_field('foto');
				$size = "foto_perro"; // (thumbnail, medium, large, full or custom size)
				$image = wp_get_attachment_image_src( $attachment_id, $size );
				// url = $image[0];
				// width = $image[1];
				// height = $image[2];
			?>
			<!-- tipo de perro -->

			<li>

				<div class="perrico">
					<a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>"></a>

					<!--<a href=""><img src="<?php the_field('foto_principal'); ?>"></a>-->
				</div>
				<a href="<?php the_permalink(); ?>"><?php the_field('nombre'); ?></a>

			</li>
			<?php endwhile; ?>

				<!-- End of the MAIN LOOP -->


				<!-- Add the pagination functions here. -->

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
	<?php get_sidebar( 'adopcion' ); ?>

	</div><!-- End of main-content -->


<?php get_footer(); ?>
