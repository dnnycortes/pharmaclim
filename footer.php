<?php
/**
 * Este es el templete para mostrar el footer del sitio
 *
 */
?>

<footer class="main-footer">
	<div class="main-width">
		<?php $currentlang = get_bloginfo('language');
		if($currentlang=="es-ES"):?>
			<div class="quote">
				<p>"Aquello que para la oruga es el fin del mundo, <br> para el resto del mundo se llama mariposa"</p>
				<span>Lao Tse</span>
			</div>
		<?php else: ?>
			<div class="quote">
				<p>“What the caterpillar calls the end of the world, <br> for the rest of the world calls the butterfly”</p>
				<span>Lao Tse</span>
			</div>
		<?php endif; ?>
	</div>
</footer>
<footer class="sec-footer">
	<div class="main-width">
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>