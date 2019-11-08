<?php
/**
 * La página principal del templete
 *
 */
get_header(); ?>
<!-- Escupe la ruta hacia la carpeta raiz del templete <?php echo get_template_directory_uri(); ?> -->

<div class="wrapper">
	<div class="slide one">
		<div class="overlay"></div>
		<a href="javascript:void(0);" class="btn-scroll">Scroll</a>
		<?php $currentlang = get_bloginfo('language');
		if($currentlang=="es-ES"):?>
			<p>Somos expertos en consultoría sobre Asuntos Regulatorios y de cumplimiento de BPF para la industria:</p>
			<ul>
				<li>· Famacéutica </li>
				<li>· Farmoquímica </li>
				<li>· Dispositivos médicos </li>
				<li>· Alimentaria </li>
				<li>· Cosmética </li>
			</ul>
		<?php else: ?>
			<p>We are Experts in Regulatory Affairs and Quality matters a that offer consulting services for the industry:</p>
			<ul>
				<li>· Pharmaceutical</li>
				<li>· Pharmochemical</li>
				<li>· Food</li>
				<li>· Dispositivos médicos</li>
				<li>· Cosmetics</li>
			</ul>
		<?php endif; ?>
	</div>
	<div class="slide two">
		<div class="overlay"></div>
		<a href="javascript:void(0);" class="btn-scroll">Scroll</a>
		<?php $currentlang = get_bloginfo('language');
		if($currentlang=="es-ES"):?>
			<p>Alcance a:</p>
			<ul>
				<li>· Desarrollo e implementación de la estrategia regulatoria para la obtención de autorizaciones (Licencias Sanitarias, CBPF, PSI, etc.) ante COFEPRIS.</li>
				<li>· Desarrollo e implementación de estrategia regulatoria para obtener la aprobación de FDA (Food and Drug Administration), HPB (Health Protection Branch), EMA (European Medicines Agency) y agencias sanitarias Latinoamericanas.</li>
				<li>· Auditorías internas y a proveedores</li>
				<li>· Capacitación a la medida</li>
				<li>· Reclutamiento de personal y/o outsourcing </li>
				<li>· Servicios de validación y calibración</li>
				<li>· Trámites ante COFEPRIS</li>
			</ul>
		<?php else: ?>
			<p>Scope:</p>
			<ul>
				<li>· Development and implementation of the regulatory strategy to obtain authorizations from COFEPRIS [Sanitary License, CBPF (Good Manufacturing Practices Certification), PSI (Sanitary Import Permit), etc.].</li>
				<li>· Development and implementation of regulatory strategy to obtain approval from FDA (Food and Drug Administration), HPB (Health Protection Branch), EMA (European Medicines Agency) and Latin American ministries of health.</li>
				<li>· Internal and supplier audits according to local and international regulatory requirements, as well as, ISO and ICH guidelines.</li>
				<li>· Tailor-made training to cover specific needs in quality, regulatory affairs and supply chain matters.</li>
				<li>· Recruitment of personnel and/or outsourcing to cover specific personnel needs of our customers for a limited period </li>
				<li>· Validation Services. These include, equipment and critical systems qualification, computerized system validation, process – cleaning – analytical method validation and periodic review of validation status</li>
				<li>· Procedures at COFEPRIS for drugs registration, registration renewal or modification, permit import authorization, coordination of COFEPRIS verifications in sites abroad, among others.</li>
			</ul>
		<?php endif; ?>
		
	</div>
	<ul class="slide-menu">
		<?php $currentlang = get_bloginfo('language');
		if($currentlang=="es-ES"):?>
			<li>
				<a href="" class="btn-slide-one active">
					<span></span>
					<p>Somos expertos</p>
				</a>
			</li>
			<li>
				<a href="" class="btn-slide-two">
					<span></span>
					<p>Alcance</p>
				</a>
			</li>
		<?php else: ?>
			<li>
				<a href="" class="btn-slide-one active">
					<span></span>
					<p>Start</p>
				</a>
			</li>
			<li>
				<a href="" class="btn-slide-two">
					<span></span>
					<p>Scope</p>
				</a>
			</li>
		<?php endif; ?>
	</ul>
</div><!-- .wrap -->
<?php get_footer(); ?>