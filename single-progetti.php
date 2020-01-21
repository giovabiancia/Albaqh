<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<main id="main" class="main main-single-progetto" role="main">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
			<h2><?php echo get_the_title(); ?></h2>
			<span><?php echo get_the_date(); ?></span> |
			<span>
				<?php
					$category = get_the_category( $post->ID );
					echo $category[0]->cat_name;
				?>
			</span>
			<div class="checkAnim from-bottom cliente-partner">
				<p>
					<?php if (get_field('cliente')): ?>
						Cliente: <?php the_field('cliente'); ?>
					<?php endif; ?>
					<?php if (get_field('cliente') and get_field('partner')): ?>
						|
					<?php endif ?>
					<?php if (get_field('partner')): ?>
						Partner: <?php the_field('partner'); ?>
					<?php endif; ?>
				</p>
			</div>
			<div class="img-dettaglio">
				<img src="<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="checkAnim from-bottom the-content">
				<?php the_content(); ?>
			</div>
				<?php
				// Start the loop.


					the_post_navigation( array(
						'prev_text' => '<span class="post-title">%title</span>'.'<span class="bottone-prev"></span>'.'<a class="bottone t-a-p" href="http://www.popcomm.it/culturarepublic/i-progetti"" title="progetti">torna ai progetti</a>',
						'next_text' => '<span class="post-title">%title</span>'.'<span class="bottone-next"></span>',

					) );

				// End the loop.
				endwhile;
				?>

			</div>

			<div class="row bg-red donazioni">
			  <div class="container">
			    <div class="col checkAnim from-bottom">
			      <h2 class="h2-white">Donazioni</h2>
			      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua PayPall.</p>
			      <a class="bottone btn-line-black" href="#">fai una donazione</a>
			    </div>
			  </div>
			</div>


		</main><!-- .site-main -->

<?php get_footer(); ?>
