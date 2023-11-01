<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PingPassionTheme
 */

get_header();
?>

<main id="primary" class="site-main">
			<h1><?php the_title(); ?></h1>

			<article class="single-bois-card">
					<?php the_post_thumbnail(); ?>
					<div class="single-bois-card_content">	
						<p><?php the_content(); ?></p>
					</div>
				</article>
				<?php
			
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'saladbar' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'saladbar' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;


		?>

	</main><!-- #main -->

<?php
get_footer();
