<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div class="cover clientes">
		<div class="main-width">
			<h2>Clientes</h2>
			<a href="javascript:void(0);" class="btn-scroll">Scroll</a>
		</div>
	</div>
	<div class="content clientes">
		<div class="main-width">
			<h2>Clientes</h2>
			<p>Atendemos a clientes nacionales e internacionales de las industrias mencionadas.</p>
			<div class="logos">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-amazon.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-basf.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-heneiken.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-holcim.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-linkedin.png" alt="">

				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-amazon.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-basf.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-heneiken.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-holcim.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-linkedin.png" alt="">

				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-amazon.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-basf.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-heneiken.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-holcim.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-linkedin.png" alt="">
			</div>
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->