<?php
/*
	Template Name: Nosotros
 */
 get_header(); ?>

</div>

	<section class="slider">

		<?php $args = array(
			'post_type'  => 'slider',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => -1
		); ?>

		<?php $slider = new WP_Query($args); ?>
		<ul class="slider">
		<?php while($slider->have_posts()): $slider->the_post(); ?>

		<li>
			<a href="<?php the_field('enlace'); ?>">
				<?php the_post_thumbnail('slider'); ?>
			</a>
		</li>


		<?php endwhile; wp_reset_postdata(); ?>

		</ul>

	</section>

	<div class="wrapper">

	<?php get_template_part('searchform') ?>

	<section class="tours clear">

			<h2 class="titulo"><span>Próximos Tours</span></h2>

			<?php $args = array(
				'post_type' => 'tours',
				'posts_per_page' => 3,
				'order' => 'DESC',
				'orderby' => 'date',

			); ?>

				<?php $tours = new WP_Query($args); ?>
				<?php while($tours->have_posts() ): $tours->the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class('grid1-3'); ?>>

						<div class="imagen-destacada">
							<?php the_post_thumbnail('toursDestacado'); ?>
							<a class="mas-info"  href="<?php the_permalink(); ?>">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masinfo.png">
							</a>
						</div> <!--.imagen-destacada-->
						


						<?php 
							$formato = 'd F, Y';
							$fecha = strtotime(get_field('fecha_de_salida'));
							$fechasalida = date_i18n($formato, $fecha);

							$fechaRetorno = strtotime(get_field('fecha_de_retorno'));
							$fechaRetorno = date_i18n($formato, $fechaRetorno);

						?>

						<div class="fecha-precio clear">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
							<p class="fecha"><?php echo $fechasalida; ?> - <?php echo $fechaRetorno; ?></p>
						</div>
						<div class="clear"></div>

			
					</article>
					<!-- /article -->
					

					<?php endwhile; wp_reset_postdata(); ?>
			
	</section> <!--.tours -->



	<section class="consejos-testimoniales clear">
		<div class="grid2-3">
			<h2 class="titulo"><span>Consejos para viajar</span></h2>
			<?php $args = array(
				'post_type' => 'post',
				'orderby' => 'date',
				'order' => 'DESC',
				'posts_per_page' =>2,
			); ?>
			<?php $entradas = new WP_Query($args); ?>
			<?php while($entradas->have_posts()): $entradas->the_post(); ?>
			<div class="entrada clear">

					<div class="grid1-3">
			
						<?php the_post_thumbnail('entradasIndex'); ?>

					</div>

					<div class="grid2-3">

						<h3><?php the_title(); ?></h3>

						<?php html5wp_excerpt('html5wp_custom_post'); ?>

						<a href="<?php the_permalink(); ?>" class="naranja">Continuar leyendo</a>

					</div>

			</div>

			<?php endwhile; wp_reset_postdata(); ?>

		</div>
		<div class="grid1-3">
			<h2 class="titulo"><span>Testimoniales</span></h2>


					<?php $args = array(
						'post_type' => 'testimoniales',
						'posts_per_page' => 2,
						'order' => 'DESC',
						'orderby' => 'date',
					); ?>
					<?php $testimoniales = new WP_Query($args); ?>
					<?php while ($testimoniales->have_posts() ): $testimoniales->the_post(); ?>

					<article class="testimonial">
						<blockquote><p><?php html5wp_excerpt('html5wp_index'); ?></p></blockquote>
						<p class="testimonial"><?php the_field('nombre'); ?></p>
						<p class="testimonial"><?php the_field('ciudad'); ?></p>
					</article>


					<?php endwhile; wp_reset_postdata(); ?>

					<a href="<?php echo get_permalink(11); ?>" class="naranja todos">Ver Todos</a>
		</div>
	</section>

<?php get_footer(); ?>
