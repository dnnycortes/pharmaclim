<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div class="cover">
		<img src="<?php echo get_template_directory_uri(); ?>/images/cover-clientes.jpg" alt="">
		<div class="main-width">
			<h2>Clientes</h2>
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
		</div>
	</div>
</div><!-- #wrapper -->
<?php get_footer(); ?>