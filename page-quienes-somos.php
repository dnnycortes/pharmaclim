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
			<h2>Quiénes somos</h2>
			<a href="#quienes-somos" class="btn-scroll">Scroll</a>
		</div>
	</div>
	<div class="content quienes-somos" id="quienes-somos">
		<div class="main-width">
			<h2>Misión</h2>
			<p>
				Suministrar a nuestros Clientes con soluciones integrales a asuntos regulatorios y 
				de cumplimiento normativo a través de estrategias regulatorias integrales y 
				funcionales para mejorar y expandir sus operaciones locales e internacionales a
				través de la importación, la fabricación y la exportación de insumos para la salud, 
				alimentos y cosméticos
			</p>
			<h2>Visión</h2>
			<p>
				Estar presentes en los principales países del mundo para suministrar a nuestros 
				Clientes soluciones integrales a asuntos regulatorios y de cumplimiento normativo, 
				a través de inteligencia regulatoria y estrategias funcionales para mejorar y  
				expandir las operaciones de fabricación, importación y exportación, de nuestros 
				clientes que lograr que los insumos para la salud, alimentos y cosméticos mexicanos 
				lleguen a todo el mundo y que lleguen a México las mejores propuestas del 
				extranjero en términos de calidad, oportunidad y costo.
			</p>
			<h2>Valores</h2>
			<p>
				Cultivamos la confianza de nuestros clientes con propuestas basadas en flexibilidad, 
				conocimiento, experiencia y trabajo en equipo. Generamos credibilidad en nuestros 
				clientes con hechos basados en resultados eficientes y exitosos, generados con un 
				excelente balance costo-beneficio.
			</p>
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->