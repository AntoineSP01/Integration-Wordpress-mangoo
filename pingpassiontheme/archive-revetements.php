<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PingPassionTheme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>
            
            <header class="page-header">
                <h1>Les différents revêtements</h1>
                <p>Retrouver ci dessous tous les revêtements que nous vous proposons. Ainsi vous pourrez enfin être à votre niveau maximal.</p>
            </header>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<section class="revetements">
					<article class="revetements-card">
						<?php the_post_thumbnail(); ?>
						<div class="revetements-card_content">
							<h2>
								<?php the_title(); ?>
							</h2>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">En savoir plus</a>
						</div>
					</article>
				</section>
				<?php
			endwhile; 

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
