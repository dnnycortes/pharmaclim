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
			<a href="javascript:void(0);" class="btn-scroll">Scroll</a>
		</div>
	</div>
	<div class="content contacto">
		<div class="main-width">
			<!--EMPIEZA EL LOOP-->
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2>Contacto</h2>
				<div class="contact-form">
					<?php the_content(); ?>
				</div>
				<p>
					Montecito 38 Piso 42 oficina 15, <br>
					Colonia Nápoles, Delegación Benito Juárez, Código Postal 03810 <br>
					Ciudad De México
				</p>
			<?php endwhile; else: ?>
				<p><?php _e('Lo sentimos, ningún post cumple con los criterios de búsqueda.'); ?></p>
			<?php endif; ?>
			<!--TERMINA EL LOOP-->
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->