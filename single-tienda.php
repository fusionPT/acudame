
<?php

get_header(); ?>


<!-- Controla el tamaño de las fotos del plugin -->
<?php

	$attachment_id = get_field('foto');
	$size = "foto-tienda"; // (thumbnail, medium, large, full or custom size)
	
	$image = wp_get_attachment_image_src( $attachment_id, $size );
	// url = $image[0];
	// width = $image[1];
	// height = $image[2];
?>

<div class="container">
	<div class="main-content">
	
		<div class="main">
		
			<ul class="adopcion-nav">
					<li class="left-nav"><?php previous_post_link('&#8592 %link'); ?></li>
					<li class="right-nav"><?php next_post_link('%link &#8594 '); ?></li>
			</ul><!-- End of adopcion-nav -->
			
		<div class="detalle">
		<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>

		 <div class="articulo-detalle">
		 		<h4><?php the_field('titulo'); ?></h4>
                <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>">
                
                
                
            
        </div><!-- End of perro-detalle -->
				
        <div class="descripcion">
	        <h3>Descripción</h3>
            	<p><?php the_field('descripcion'); ?></p>
        </div><!-- End of descripcion -->
                    
        <div class="fotos">
            <h3>Fotos</h3>
            <?php the_field('imagenes'); ?>
        </div><!-- End of fotos -->
                    
        <div class="form">
        	<h3>Quieres comprar este articulo?</h3>
        	<p>Envianos un mensaje y te contestaremos lo mas rapido posible.</p>
        	<br /><br />
        	<?php echo do_shortcode( '[contact-form-7 id="417" title="Tienda Acudame"]' ); ?>
        </div>
        
        <?php endwhile ; else: ?>
			<p>No se han encontrado articulos.</p>
		<?php endif; ?>
		</div><!-- end of detalle -->
	</div><!-- End of main -->
	
	<!-- SIDEBAR -->
	<?php get_sidebar(); ?>
	
</div><!-- End of main-content -->


<?php get_footer(); ?>