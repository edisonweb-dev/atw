</div>
			<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="widgets wrapper clear">

					<div class="grid1-4">
						<h3>Sobre Nosotros</h3>
						<?php $nosotros = new WP_Query('page_id=7'); ?>
						<?php while($nosotros->have_posts()): $nosotros->the_post(); ?>

							<?php html5wp_excerpt('html5wp_index'); ?>

						<?php endwhile; wp_reset_postdata(); ?>
					</div>
					<div class="grid1-4">
						<h3>Próximos Viajes</h3>
							<?php $args = array(
									'post_type' => 'tours',
									'posts_per_page' =>2,
									'order' => 'DESC',
									'orderby' => 'date',
								); ?>

								<?php $tours = new WP_Query($args); ?>
								<?php while($tours->have_posts() ): $tours->the_post(); ?>

									<!-- article -->
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										<div class="imagen-destacada grid2-4">
											<?php the_post_thumbnail('miniatura'); ?>
										</div> <!--.imagen-destacada-->
										
										<?php 
											$formato = 'd F, Y';
											$fecha = strtotime(get_field('fecha_de_salida'));
											$fechasalida = date_i18n($formato, $fecha);

											$fechaRetorno = strtotime(get_field('fecha_de_retorno'));
											$fechaRetorno = date_i18n($formato, $fechaRetorno);
										?>

										<div class="fecha-precio clear grid2-4">
											<a href="<?php the_permalink(); ?>">
												<h2><?php the_title(); ?></h2>
											</a>
											<p class="fecha"><?php echo $fechasalida; ?> - <?php echo $fechaRetorno; ?></p>
										</div>
										<div class="clear"></div>

				
							
									</article>
									<!-- /article -->
									

									<?php endwhile; wp_reset_postdata(); ?>


					</div>
					<div class="grid1-4">
						<h3>Últimos Consejos</h3>

								<?php $args = array(
									'post_type' => 'post',
									'posts_per_page' =>2,
									'order' => 'DESC',
									'orderby' => 'date',
								); ?>

								<?php $consejos = new WP_Query($args); ?>
								<?php while($consejos->have_posts() ): $consejos->the_post(); ?>

									<!-- article -->
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										<div class="imagen-destacada grid2-4">
											<?php the_post_thumbnail('miniatura'); ?>
										</div> <!--.imagen-destacada-->

										<div class="entrada-consejos clear grid2-4">
											<a href="<?php the_permalink(); ?>">
												<h2><?php the_title(); ?></h2>
											</a>
										</div>
										<div class="clear"></div>

				
							
									</article>
									<!-- /article -->
									

									<?php endwhile; wp_reset_postdata(); ?>

					</div>
					<div class="grid1-4">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
					</div>

				</div>



				<div class="clear"></div>

				<!-- copyright -->
				<p class="copyright wrapper">
					&copy; <?php echo date('Y'); ?> Derechos reservados <?php bloginfo('name'); ?> 
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->



		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
