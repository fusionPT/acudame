<?php

get_header(); ?>


<!-- Controla el tamaño de las fotos del plugin -->
<?php

	$attachment_id = get_field('foto');
	$size = "foto_perro2"; // (thumbnail, medium, large, full or custom size)

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

		 <div class="perro-detalle">
		 <div class="avatar-wrapper">
            <div class="avatar">
                <img src="<?php echo $image[0]; ?>" width="<?php echo $image[1]; ?>" height="<?php echo $image[2]; ?>">
                </div><!-- End of Avatar -->

                	<h4><?php the_field('nombre'); ?></h4>
                </div>
            <dl>
                <dt>Fecha nacimiento</dt>
                <dd>
                <?php
				$fecha = get_field('fecha_de_adopcion');

                $data_adopcion = DateTime::createFromFormat('dmY', $fecha); echo $data_adopcion->format('m/Y');

	            $hoy = new DateTime('today');
				$edad_actual = $data_adopcion->diff($hoy)->y;
				if($edad_actual <= 0 ) {
					$edad_actual_2 = "menos de 1 año";
				} else {

					$edad_actual_2 = $edad_actual . " años";

				}
                ?>

                <span class="edad-perro">(<?php echo $edad_actual_2 ?>)</span>


                </dd>
                <dt>Sexo</dt>
                <dd><?php the_field('sexo'); ?></dd>
            </dl>
        </div><!-- End of perro-detalle -->

        <div class="descripcion">
	        <h3>Descripción</h3>
            	<p><?php the_field('descripcion'); ?></p>
            	<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-type="button_count"></div>
        </div><!-- End of descripcion -->

        <div class="fotos">
            <h3>Fotos</h3>
            <?php the_field('imagenes'); ?>
        </div><!-- End of fotos -->


        <?php endwhile ; else: ?>
			<p>No se han encontrado articulos.</p>
		<?php endif; ?>



		</div><!-- end of detalle -->
		<a class="btn" href='/colabora/adopta/'>Adóptalo!</a>
	</div><!-- End of main -->

	<!-- SIDEBAR -->
	<?php get_sidebar( 'adopcion' ); ?>

</div><!-- End of main-content -->


<?php get_footer(); ?>
