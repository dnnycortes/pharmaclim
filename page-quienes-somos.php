<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div class="cover">
		<img src="<?php echo get_template_directory_uri(); ?>/images/cover-quienes-somos.jpg" alt="">
		<div class="main-width">
			<h2>Quiénes somos</h2>
		</div>
	</div>
	<div class="content">
		<div class="main-width">
			<h2>Quiénes somos</h2>
			<p>
				<span>Misión</span>
				Suministrar a nuestros Clientes con soluciones integrales a asuntos regulatorios y de cumplimiento normativo a través de estrategias regulatorias integrales y funcionales para mejorar y expandir sus operaciones locales e 
				internacionales a través de la importación, la fabricación y la exportación de insumos para la salud, alimentos y 
				cosméticos
			</p>
			<p>
				<span>Visión</span>
				Estar presentes en los principales países del mundo para suministrar a nuestros Clientes soluciones integrales a 
				asuntos regulatorios y de cumplimiento normativo, a través de inteligencia regulatoria y estrategias funcionales 
				para mejorar y  expandir las operaciones de fabricación, importación y exportación, de nuestros clientes que lograr 
				que los insumos para la salud, alimentos y cosméticos mexicanos lleguen a todo el mundo y que lleguen a México 
				las mejores propuestas del extranjero en términos de calidad, oportunidad y costo.
			</p>
			<p>
				<span>Valores</span>
				Cultivamos la confianza de nuestros clientes con propuestas basadas en flexibilidad, conocimiento, experiencia y 
				trabajo en equipo. Generamos credibilidad en nuestros clientes con hechos basados en resultados eficientes y 
				exitosos, generados con un excelente balance costo-beneficio.
			</p>
		</div>
	</div>
</div><!-- #wrapper -->
<?php get_footer(); ?>