<?php

/*

	Template Name: Adoptados

*/

get_header(); ?>




<div class="container">
	<div class="main-content">
	
		<div class="main">
		
		<h2>Adoptados</h2>
		
		<div class="filtrar">
			
			<form id="filtro" name="form1" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<h4>Filtrar por :</h4>
			    <input type="radio" name="radio" checked="checked" value="todos" <?php if ($_GET['tipo'] == 'todos')  echo ' checked="checked"';?>  onclick="window.location='<?php echo site_url(); ?>/adoptados/?tipo=todos'"> <label for="tipo">Todos</label> 
				<input type="radio" name="radio" value="adulto" <?php if ($_GET['tipo'] == 'adulto')  echo ' checked="checked"';?>  onclick="window.location='<?php echo site_url(); ?>/adoptados/?tipo=adulto'"><label for="tipo">Adulto</label>
				<input type="radio" name="radio" value="cachorro" <?php if ($_GET['tipo'] == 'cachorro')  echo ' checked="checked"';?> onclick="window.location='<?php echo site_url(); ?>/adoptados/?tipo=cachorro'"> <label for="tipo">Cachorro</label> 
			  
   			 </form>
		</div><!-- Fin del filtro -->
		
		<script>

			$('#filtro input').on('change', function() {
   				var tipo_de_animal = $('input[name=radio]:checked', '#filtro').val()); 
				
				
			});

		</script>
		<!-- WP LOOP -->
		<div class="enadopcion">
			<ul>
			<?php 

				$tipo = $_POST['radio'];
				
			?>

			<?php 
				$args = array (
			      'post_type' => 'adopcion',
			      'showposts' => '16',
			      'order' => 'DSC',
			      'paged' => $paged,
			      'meta_query' => array(
			      	array (
			      		'key' => 'tipo',
			      		'value' => $_GET['tipo'],
			      		'compare' => '!='
			      	),
			      	array (
			      		'key' => 'adoptado',
			      		'value' => 'no',
			      		'compare' => '!='
			      	)
			      
			      )
			  );
			  $temp = $wp_query; 
			  $wp_query = null; 
			  $wp_query = new WP_Query( $args ); 
			  
			  

			  while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>
			<!-- LOOP: Usual Post Template Stuff Here-->
			<?php
				$attachment_id = get_field('foto_principal');
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