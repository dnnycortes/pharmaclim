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
			<h2>Clients</h2>
			<a href="#clientes" class="btn-scroll">Scroll</a>
		</div>
	</div>
	<div class="content clientes" id="clientes">
		<div class="main-width">
			<h2>Clients</h2>
			<p>We serve national and international clients in the aforesaid industries.</p>
			<div class="logos">
				<?php if (dynamic_sidebar('clients-logos')) : else : endif; ?>
			</div>
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->