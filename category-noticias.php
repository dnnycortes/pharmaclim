<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div class="cover noticias">
		<div class="main-width">
			<h2>Noticias</h2>
			<a href="javascript:void(0);" class="btn-scroll">Scroll</a>
		</div>
	</div>
	<div class="content noticias">
		<div class="main-width" style="height:300px;">
			<h2>Noticias</h2>

		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->