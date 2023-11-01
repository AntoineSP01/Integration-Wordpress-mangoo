<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PingPassionTheme
 */
$dataRevetements = get_fields();
get_header();
?>

<main id="primary" class="site-main">
			<h1><?php the_title(); ?></h1>

			<article class="single-revetements-card">
					<?php the_post_thumbnail(); ?>
					<div class="single-revetements-card_content">	
						<p><?php the_content(); ?></p>
					</div>
				</article>
				<?php
		


		?>
		<section class="informations">
			<h2>Informations du Revêtement</h2>
			<p>Rapidité : <?= $dataRevetements['rapidite'] ?></p>
			<p>Contrôle : <?= $dataRevetements['controle'] ?></p>
			<p>Adhérence : <?= $dataRevetements['adherence'] ?></p>
			<p>Épaisseur(s) possible(s) : 
				<?php foreach($dataRevetements['epaisseur'] as $epaisseur) : ?>
					<?= $epaisseur["label"] ?> /
				<?php endforeach; ?>
			</p>
		</section>
		
		<?php
		the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'saladbar' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'saladbar' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
		?>
			

	</main>

<?php
get_footer();
