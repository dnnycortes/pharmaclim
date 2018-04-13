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
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/01.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/02.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/03.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/04.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/05.png" alt="">

				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/06.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/07.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/08.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/09.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/10.png" alt="">

				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/11.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/12.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/13.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/14.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/15.png" alt="">

				<img src="<?php echo get_template_directory_uri(); ?>/images/clientes/16.png" alt="">
			</div>
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->