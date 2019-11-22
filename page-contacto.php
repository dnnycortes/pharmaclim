<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div class="cover contacto">
		<div class="main-width">
			<h2>Contacto</h2>
			<a href="#contacto" class="btn-scroll">Scroll</a>
		</div>
	</div>
	<div class="content contacto" id="contacto">
		<div class="main-width">
			<!--EMPIEZA EL LOOP-->
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2>Contacto</h2>
				<div class="contact-form">
					<?php the_content(); ?>
				</div>
				<div class="contact-info">
					<div>
						<p>
							Montecito 38 Piso 42 oficina 15, <br>
							Colonia Nápoles, Alcaldía Benito Juárez, Código Postal 03810 <br>
							Ciudad De México
						</p>
					</div>
					<div>
						<p>
							QFB. Lourdes Amelia Molina Rincón <br>
							Regulatory & GMP Compliance Consultant <br>
							Cel. 52 1 55 28 64 90 03 <br>
							<a href="mailto:lomr@pharmaclims.com" target="_top">lomr@pharmaclims.com</a>
						</p>
						<p>
							Lic. Jesús Miguel Quintana Cámara <br>
							Supply Chain Consultant <br>
							Cel. 52 1 55 39 89 26 47 <br>
							<a href="mailto:jmqc@pharmaclims.com" target="_top">jmqc@pharmaclims.com</a>
						</p>
					</div>
				</div>
			<?php endwhile; else: ?>
				<p><?php _e('Lo sentimos, ningún post cumple con los criterios de búsqueda.'); ?></p>
			<?php endif; ?>
			<!--TERMINA EL LOOP-->
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->