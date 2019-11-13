<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div class="cover quienes-somos">
		<div class="main-width">
			<h2>Who we are</h2>
			<a href="#quienes-somos" class="btn-scroll">Scroll</a>
		</div>
	</div>
	<div class="content quienes-somos" id="quienes-somos">
		<div class="main-width">
			<!--EMPIEZA EL LOOP-->
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<h2>Mission</h2>
					<p><?php echo get_post_meta($post->ID, 'mision', true); ?></p>
					<h2>Vision</h2>
					<p><?php echo get_post_meta($post->ID, 'vision', true); ?></p>
					<h2>Values</h2>
					<p><?php echo get_post_meta($post->ID, 'valores', true); ?></p>
				<?php endwhile; else: ?>
					<p><?php _e('Lo sentimos, ningún post cumple con los criterios de búsqueda.'); ?></p>
				<?php endif; ?>
			<!--TERMINA EL LOOP-->
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->