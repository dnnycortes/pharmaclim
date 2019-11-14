<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div class="content privacidad">
		<div class="main-width">
			<!--EMPIEZA EL LOOP-->
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				<p><?php _e('Lo sentimos, ningún post cumple con los criterios de búsqueda.'); ?></p>
			<?php endif; ?>
			<!--TERMINA EL LOOP-->
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->