<?php
/**
 * Name          : Yahya Al-Mashni, Ajwad Rauf, Benjamin Sin
 * Assignment    : Group Theme Assignment
 * Description   : Custom theme based on Undersore package. Custom Slider implemented throught Javascript.
 * Custom Post type defined as Slide, implments links and featured images to be shown on javascript slider. 
 * Custom options page implmented that changes the category type displayed on a cutom page template.
 * Custom Page template implments a square grid layout, with custom pagination, next and before arrows and page number naviagtion.
 * Custom shortcode that implments slider wherever required.
 * Custom icon for custom post type.
 *
 * @package Underscore_Pets
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->







	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
