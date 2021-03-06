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
			<h2>News</h2>
			<a href="#noticias" class="btn-scroll">Scroll</a>
		</div>
	</div>
	<div class="content noticias" id="noticias">
		<div class="main-width">
			<div class="posts">
				<h2>Posts</h2>
				<ul>
					<!--EMPIEZA EL LOOP-->
					<?php query_posts('category_name=posts'); while(have_posts()) : the_post(); ?>
						<li>
							<a href="javascript:void(0);" class="post-title"> · <?php the_title(); ?> </a>
							<div class="post-opened">
								<div class="img">
									<a class="btn-close">close</a>
									<?php the_content(); ?>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
					<!--TERMINA EL LOOP-->
				</ul>
			</div>
			<div class="articles">
				<h2>Articles</h2>
				<ul>
					<!--EMPIEZA EL LOOP-->
					 <?php query_posts('category_name=articulos'); while(have_posts()) : the_post(); ?>
						<li><a href="<?php echo get_post_meta($post->ID, 'pdf', true); ?>" target="_blank">· <?php the_title(); ?> </a></li>
					<?php endwhile; ?>
					<!--TERMINA EL LOOP-->
				</ul>
			</div>
		</div><!-- .main-width -->
		<?php get_footer(); ?>
	</div><!-- .content -->
</div><!-- #wrapper -->