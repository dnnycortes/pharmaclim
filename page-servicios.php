<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->


<div id="wrapper">
	<div class="cover servicios">
		<div class="main-width">
			<h2>Servicios</h2>
			<a href="#servicios" class="btn-scroll">Scroll</a>
		</div>
	</div>

	<div class="content servicios" id="servicios">
		<div class="main-width">
			<h2>Servicios</h2>
			<ul>
				<li>
					Desarrollo e implementación de soluciones integrales a asuntos regulatorios y de cumplimiento normativo mediante:
					<ul>
						<li>· Estrategia Regulatoria</li>
						<li>· Desarrollo e implementación u optimización de Sistemas de Calidad  </li>
						<li>· Desarrollo e implementación u optimización de:
							<ul>
								<li>
									Procesos de cadena de suministro, calidad (QA/QC), fabricación y distribución en sitios de fabricación
								</li>
								<li>
									Procesos de cadena de suministro, calidad, almacenamiento y distribución en almacenes y operadores logísticos
								</li>
							</ul>
						</li>
						<li>· Obtención de autorizaciones de autoridades sanitarias para comercialización local de productos</li>
						<li>· Obtención de aprobación de autoridades sanitarias para exportación de productos conforme a los requerimientos de FDA, HPB, EMA y agencias sanitarias latinoamericanas</li>
					</ul>
				</li>
				<li>
					Auditorías de Calidad
					<ul>
						<li>· Internas</li>
						<li>· Proveedores</li>
					</ul>
				</li>
				<li>
					Control de Calidad
					<ul>
						<li>· Diseño de estudios de estabilidad</li>
						<li>· Transferencias analíticas</li>
						<li>· Elaboración de especificaciones y métodos analíticos</li>
					</ul>
				</li>
				<li>
					Capacitación 
					<ul>
						<li>· BPF (Buenas Prácticas de Fabricación)</li>
						<li>· BPL (Buenas Prácticas de Laboratorio)</li>
						<li>· BPAD (Buenas Prácticas de Almacenamiento y Distribución) </li>
						<li>· Cursos a la medida de acuerdo con la DNC (Detección de las necesidades de capacitación) del Cliente</li>
					</ul>
				</li>
				<li>
					Reclutamiento de personal con o sin servicio de outsourcing para:
					<ul>
						<li>· Implementación de procesos o capitalización de proyectos específicos</li>
						<li>· Realizar funciones establecidas en una descripción de puesto</li>
					</ul>
				</li>
				<li>
					Gestoría de trámites ante autoridades sanitarias (COFEPRIS)
				</li>
				<li>
					Servicios de Validación y Calibración a través de proveedores bajo contrato comercial y acuerdo de calidad
				</li>
			</ul>
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->